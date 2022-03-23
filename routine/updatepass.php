<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Update Password</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <img src="bdu.png" alt="BDU_LOGO" 
      style="margin-right:auto;margin-left:auto;">
      <div class="card-header">Update Your Account Password</div>
      <div class="card-body">
	  <center><h3>***BDU mail required***</h3></center>
        <form method="post" action="">
        <form>
          <div class="form-group">
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" name ="email">
              <label for="inputEmail">roll@iot.bdu.ac.bd or roll@icte.bdu.ac.bd</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required"name="cpassword">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <strong>Program:   </strong>
  <input type="radio" name="dep" <?php if (isset($dep) && $dep=="IoT") echo "checked";?> value="IoT"> <strong>IoT   </strong>
  <input type="radio" name="dep" <?php if (isset($dep) && $dep=="ICTE") echo "checked";?> value="ICTE"><strong>ICTE   </strong>  
   <h6><font color='red'>PLease select program</font></h6>

  <br><br>
          <button class="btn btn-primary btn-block" type="submit" name="submit" >Update</button>
        </form>
        <?php
        include 'dbcon.php';
        $cpassword = $dep = "";
          if(isset($_POST["submit"]))
          {
/*            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
            exit();*/
            $email = $_POST["email"];
            $password = $_POST["password"];
            $cpassword = $_POST["cpassword"];
            $dep = $_POST["dep"];
            //$query = "SELECT `email`,`password`,`statues` FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
            if ($password == $cpassword) {
            if ($dep=='IoT')
            {

              //$query = "'";

             /* $query = "INSERT INTO iot (email,password) VALUES ('$email','$password')";
               mysqli_query($connect, $query);*/
                $query2 = "update user SET password = '$password'
WHERE email ='$email';";
               mysqli_query($connect, $query2);
/*              print_r($query);
              exit();*/
			echo "<center><h3>Successfully updated </h3></center>";

            }
             if ($dep=='ICTE')
            {

              //$query = "'";

             /* $query = "INSERT INTO icte (email,password) VALUES ('$email','$password')";
               mysqli_query($connect, $query);*/


               $query2 = "update user SET password = '$password'
WHERE email ='$email';";
               mysqli_query($connect, $query2);


			echo "<center><h3>Successfully updated </h3></center>";
            }
          }
          else {
            echo "Password don't match... ";
          }
        }
        ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="elogin.php">Login Page</a>
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
