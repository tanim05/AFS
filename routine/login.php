<?php 
  include 'dbconfig.php';
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Routine Login</title>

  <!-- Custom fonts for this template-->
  <link rel="icon" type="image/png" sizes="16x16" href="https://bdu.ac.bd/assets/images/icon/favicon-16x16.png">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
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
          <!-- <a class="btn btn-primary btn-block" href="index.html">Login</a> -->
          <!-- <a class="btn btn-primary btn-block" name="submit" href="routine.php">Login</a>
          --> 
          <button class="btn btn-primary btn-block" type="submit" name="submit" >Login</button>
        </form>

        <?php
          if(isset($_POST["submit"]))
          {
            //echo '<pre>';
            //print_r($_POST);
            //echo '</pre>';
            //exit();
            $email = $_POST["email"];
            $password = $_POST["password"];

            $query = "SELECT `email`,`password`,`statues`,`dept`,`semester` FROM `user` WHERE `email` = '$email' AND `password` = '$password'";

              //print_r($query);
              //exit();

            $result=mysqli_query($connect, $query);
            // echo '<pre>';
            // print_r($connect);
            // echo '</pre>';
            // exit();

            if($result->num_rows == 0) {
               //if(!$result){
               echo "Email or password is incurrect...";
                //}
            //if (!$user) 
              //header("location: login.php");
            // session_start();
            // $_SESSION['email']=
            // $_SESSION['post-data']['name']
            // $_SESSION['post-data']['username']
            }


            else if($result->num_rows == 1) {
              session_start();
              $row = mysqli_fetch_array($result);
                $_SESSION = $row;
                if ($_SESSION['statues'] == "admin") {
                  header("location: routine.php");
                }
				
				elseif ($_SESSION['statues'] == "manager") {
                  header("location: output/room.php");
                }
                elseif ($_SESSION['statues'] =="teacher" ) {
                  header("location: output/teacher.php");
                }
                elseif ($_SESSION['statues'] =="student" && $_SESSION['dept'] =="iot" ) {
                  header("location: output/student.php");
				  
                }
				  elseif ($_SESSION['statues'] =="student" && $_SESSION['dept'] =="icte" ) {
                  header("location: output/student_ict.php");
				  
                }
				  else {header("location: login.php");}
              }
          }
        ?>
        <div class="text-center">
         <!-- <a class="d-block small mt-3" href="register.php">Register an Account</a>-->
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>