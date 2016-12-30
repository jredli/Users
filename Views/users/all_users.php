<!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 text-center">           
             <table class="table">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Date registred</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach($this->all_users as $key => $value) {
                        echo '<tr>';
                        echo '<td>' . $value['username'] . '</td>';
                        echo '<td>' . $value['password'] . '</td>';
                        echo '<td>' . $value['reg_date'] . '</td>';     
                    }
                 ?>                   
                </tbody>
              </table>






            <table>
                 
                </table>    
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->