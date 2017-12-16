<!DOCTYPE html>
<html>
  
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Final Project </h1>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" action="index.php?page=accounts&action=login" method="post">
                    <div class="form-group">
                      <input id="login-username" type="text" name="login" required="" class="input-material">
                      <label for="login-username" class="label-material">Email</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="psw" required="" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <p id="login" class="login"><input type="submit" name="commit" value="Login"></p>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>

                  <form id="login-form" action="index.php?page=accounts&action=signup" method="post">
                    <div><p class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><p id="login" class="signup"><input type="submit" name="commit" value="Signup"></p></div>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>

    
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>