<?php

class Session
{

    public static function init()
    {
        @session_start();
    }

    //Setuje sesiju, [uloga] => admin, [$kljuc] => $vrednost
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    //Vraća sesiju da možemo da pristupimo njenoj vrednosti
    public static function get($key)
    {
        if (isset($_SESSION[$key]))
            return $_SESSION[$key];
    }

    //Uništava sesiju
    public static function destroy()
    {
        session_destroy();
    }
}