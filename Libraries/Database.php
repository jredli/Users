<?php

//Povezuje PHP sa serverom
class Database extends PDO
{

    public function __construct()
    {

        //Povezivanje sa bazom
        parent::__construct('mysql:host=localhost;dbname=users', 'root', '');;
    }

    //Osnovna funkcija za sve SELECT upite ka bazi
    public function select($query, $bindValues = array(), $fetchMode = PDO::FETCH_ASSOC)
    {

        //Prosleđivanje sql upita
        $statement = $this->prepare($query);
        //Postavljanje vrednosti koje se dinamički pune
        foreach ($bindValues as $key => $value) {
            $statement->bindValue(":$key", $value);
        }

        $statement->execute();
        return $statement->fetchAll($fetchMode);
    }

    //Osnovna funkcija za sve INSERT upite
    public function insert($table, $data)
    {

        //Cepa niz i razdvaja ih ','
        $dataName = implode('`, `', array_keys($data));
        //Dodaje ':' zbog bindValue-a, cepa niz i razdvaja ih po ', :'
        $dataValues = ":" . implode(', :', array_keys($data));

        $statement = $this->prepare("INSERT INTO $table (`$dataName`) VALUES ($dataValues)");

        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }

        $statement->execute();
    }
}