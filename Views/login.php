<!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5 text-center">

          
                <form action="index/login" method="post">
                    <div class="form-group">
                      <label for="tbUser">Username:</label>
                      <input type="text" class="form-control" name="tbUser" placeholder="username">
                    </div>
                    <div class="form-group">
                      <label for="tbPass">Password:</label>
                      <input type="password" class="form-control" name="tbPass" placeholder="password">
                    </div>    
                    <button type="submit" class="btn btn-info">Log In</button>                   

<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Register</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
    <div class="modal-body">
        <div class="row">
          <h3>Registration form</h3>
        </div>
        <form action="index/login" method="post">
      <div class="form-group">

                      <label for="regUser">Username:</label>
                      <input type="text" class="form-control" name="regUser" placeholder="username">
                    </div>
                    <div class="form-group">
                      <label for="regPass">Password:</label>
                      <input type="password" class="form-control" name="regPass" placeholder="password">
                    </div>  
                    <button type="submit" class="btn btn-info">Register</button>        
    </form>
    </div>
    </div>
  </div>
</div>
                </form> 


            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->