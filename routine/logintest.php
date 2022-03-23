<?php 
  include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Routine Login</title>
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark";>
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <img src="bdu.png" alt="BDU_LOGO" 
      style="margin-right:auto;margin-left:auto; padding-top: 10px;padding-bottom: 10px;">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name ="email">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <a class="btn btn-primary btn-block" name="submit" >Login</a>
          <?php
          if(isset($_POST["submit"]))
          {
            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            //exit();
            $email = $_POST["email"];
            $password = $_POST["password"];

            $query = "SELECT `email`,`Password` FROM `user` WHERE `email` = '$email' AND `password` = '$password'";

              print_r($query);
              //exit();

            $result=mysqli_query($connect, $query);
             echo '<pre>';
             print_r($connect);
             echo '</pre>';
            // exit();
            if($result->num_rows == 0) {
            //   //if(!$result){
               echo "Email or password is incurrect...";

//            if (!$user) 
              header("location: login.php");
            // session_start();
            // $_SESSION['email']=
            // $_SESSION['post-data']['name']
            // $_SESSION['post-data']['username']
            }


            else if($result->num_rows == 1) {
              session_start();
              $row = mysqli_fetch_array($result);
                $_SESSION = $row;
                // php header redirect
              }
          }
        ?>
          <!-- <button class="btn btn-primary btn-block" type="submit" name="submit" >Login</button> -->
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>