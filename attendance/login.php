<?php

//login.php

include('admin/database_connection.php');

session_start();

if (isset($_SESSION["teacher_id"])) {
    header('location:index.php');
}


?>
<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SEIP-IBA | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../public/theme/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="../public/theme/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="../public/theme/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/theme/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="../public/theme/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="../public/theme/fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../public/theme/css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/theme/style.css">
    <!-- Modernize js -->
    <script src="../public/theme/js/modernizr-3.6.0.min.js"></script>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <h2>Post Graduate Diploma in Garment Business (PGD-GB)</h2>
                    <p>Skills for Employment Investment Program (SEIP) - Institute of Business Administration (IBA)<br>
                        University of Dhaka</p>
                </div>
                <form method="post" role="login" class="login-form" id="teacher_login_form" >
                    <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="text" name="teacher_emailid" id="teacher_emailid" placeholder="Enter Email Address" class="form-control">
                        <i class="far fa-envelope"></i>
                        <span id="error_teacher_emailid" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="teacher_password" id="teacher_password" placeholder="Enter password" class="form-control">
                        <i class="fas fa-lock"></i>
                        <span id="error_teacher_password" class="text-danger"></span>
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember-me">
                            <label for="remember-me" class="form-check-label">Remember Me</label>
                        </div>
                        <a href="#" class="forgot-btn">Forgot Password?</a>
                    </div>
                    <div class="form-group">
                        <button name="btnLogin" type="submit" class="login-btn">Login</button>
                    </div>
                </form>
                <div class="login-social">
                    <!-- <p>or sign in with</p> -->
                    <ul>
                        <li><a href="https://mof.gov.bd"><img src="../public/image/BD-Govt-logo.png" alt="Bangladesh Govt"></a></li>
                        <li><a href="https://seip-fd.gov.bd"><img src="../public/image/seip-logo.png" alt="SEIP"></a></li>
                        <li><a href="https://www.iba-du.edu"><img src="../public/image/iba.png" alt="IBA"></a></li>
                    </ul>
                </div>
            </div>
            <div class="sign-up">Don't have an account ? <a href="#">Signup now!</a></div>
        </div>
    </div>
    <!-- Login Page End Here -->
    <!-- jquery-->
    <script src="../public/theme/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="../public/theme/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="../public/theme/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../public/theme/js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="../public/theme/js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="../public/theme/js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme/.com/demo/html/psdboss/akkhor/akkhor/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jul 2021 11:38:51 GMT -->



<script>
    $(document).ready(function() {
        $('#teacher_login_form').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: "check_teacher_login.php",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('#teacher_login').val('Validate...');
                    $('#teacher_login').attr('disabled', 'disabled');
                },
                success: function(data) {
                    if (data.success) {
                        location.href = "index.php";
                    }
                    if (data.error) {
                        $('#teacher_login').val('Login');
                        $('#teacher_login').attr('disabled', false);
                        if (data.error_teacher_emailid != '') {
                            $('#error_teacher_emailid').text(data.error_teacher_emailid);
                        } else {
                            $('#error_teacher_emailid').text('');
                        }
                        if (data.error_teacher_password != '') {
                            $('#error_teacher_password').text(data.error_teacher_password);
                        } else {
                            $('#error_teacher_password').text('');
                        }
                    }
                }
            })
        });
    });
</script>
