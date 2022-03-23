<?php

//header.php

include('database_connection.php');

session_start();

if(!isset($_SESSION["admin_id"]))
{
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>IBA | SEIP - Participant Attendance </title>
<link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>!-->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.dataTables.min.js"></script>
  <script src="../js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div>
  <div class="row">
    <div class="nav-bar-header-one p-2 ml-3 ">
                <div class="header-logo p-1">
                    <a href="../index.php">
                        <img width="90" height="35" src="../../img/seip1.png" alt="logo">
                        <img  width="90" height="35" src="../../img/iba.png" alt="logo">
                    </a>
                </div>
            </div>
    <div class="col text-right">
      <div class="jumbotron-small text-center " style="margin-bottom:0">
  <h1>Participant Attendance System</h1>
</div>
        <div class="d-flex flex-row-reverse bd-highlight">
                      <!-- <li class="navbar-item dropdown header-admin">
                          <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                              aria-expanded="false">
                              <div class="admin-title">
                                  <h5 class="item-title">Stevne Zone</h5>
                                  <span>Admin</span>
                              </div>
                              <div class="admin-img">
                                  <img src="../img/figure/admin.jpg" alt="Admin">
                              </div>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                              <div class="item-header">
                                  <h6 class="item-title">Steven Zone</h6>
                              </div>
                              <div class="item-content">
                                  <ul class="settings-list">
                                      <li><a href="#"><i class="flaticon-user"></i>My Profile</a></li>
                                      <li><a href="#"><i class="flaticon-list"></i>Task</a></li>
                                      <li><a href="#"><i
                                                  class="flaticon-chat-comment-oval-speech-bubble-with-text-lines"></i>Message</a>
                                      </li>
                                      <li><a href="#"><i class="flaticon-gear-loading"></i>Account Settings</a></li>
                                      <li><a href="login.php"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                  </ul>
                              </div>
                          </div>
                      </li> -->
                      <!-- <li class="navbar-item dropdown header-message">
                          <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="far fa-envelope"></i>
                              <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                              <span>5</span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right">
                              <div class="item-header">
                                  <h6 class="item-title">05 Message</h6>
                              </div>
                              <div class="item-content">
                                  <div class="media">
                                      <div class="item-img bg-skyblue author-online">
                                          <img src="img/figure/student11.png" alt="img">
                                      </div>
                                      <div class="media-body space-sm">
                                          <div class="item-title">
                                              <a href="#">
                                                  <span class="item-name">Maria Zaman</span>
                                                  <span class="item-time">18:30</span>
                                              </a>
                                          </div>
                                          <p>What is the reason of buy this item.
                                              Is it usefull for me.....</p>
                                      </div>
                                  </div>
                                  <div class="media">
                                      <div class="item-img bg-yellow author-online">
                                          <img src="img/figure/student12.png" alt="img">
                                      </div>
                                      <div class="media-body space-sm">
                                          <div class="item-title">
                                              <a href="#">
                                                  <span class="item-name">Benny Roy</span>
                                                  <span class="item-time">10:35</span>
                                              </a>
                                          </div>
                                          <p>What is the reason of buy this item.
                                              Is it usefull for me.....</p>
                                      </div>
                                  </div>
                                  <div class="media">
                                      <div class="item-img bg-pink">
                                          <img src="img/figure/student13.png" alt="img">
                                      </div>
                                      <div class="media-body space-sm">
                                          <div class="item-title">
                                              <a href="#">
                                                  <span class="item-name">Steven</span>
                                                  <span class="item-time">02:35</span>
                                              </a>
                                          </div>
                                          <p>What is the reason of buy this item.
                                              Is it usefull for me.....</p>
                                      </div>
                                  </div>
                                  <div class="media">
                                      <div class="item-img bg-violet-blue">
                                          <img src="img/figure/student11.png" alt="img">
                                      </div>
                                      <div class="media-body space-sm">
                                          <div class="item-title">
                                              <a href="#">
                                                  <span class="item-name">Joshep Joe</span>
                                                  <span class="item-time">12:35</span>
                                              </a>
                                          </div>
                                          <p>What is the reason of buy this item.
                                              Is it usefull for me.....</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="navbar-item dropdown header-notification">
                          <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="far fa-bell"></i>
                              <div class="item-title d-md-none text-16 mg-l-10">Notification</div>
                              <span>8</span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right">
                              <div class="item-header">
                                  <h6 class="item-title">03 Notifiacations</h6>
                              </div>
                              <div class="item-content">
                                  <div class="media">
                                      <div class="item-icon bg-skyblue">
                                          <i class="fas fa-check"></i>
                                      </div>
                                      <div class="media-body space-sm">
                                          <div class="post-title">Complete Today Task</div>
                                          <span>1 Mins ago</span>
                                      </div>
                                  </div>
                                  <div class="media">
                                      <div class="item-icon bg-orange">
                                          <i class="fas fa-calendar-alt"></i>
                                      </div>
                                      <div class="media-body space-sm">
                                          <div class="post-title">Director Metting</div>
                                          <span>20 Mins ago</span>
                                      </div>
                                  </div>
                                  <div class="media">
                                      <div class="item-icon bg-violet-blue">
                                          <i class="fas fa-cogs"></i>
                                      </div>
                                      <div class="media-body space-sm">
                                          <div class="post-title">Update Password</div>
                                          <span>45 Mins ago</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li> -->
      </div>
  </div>
</div>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="grade.php">Grade</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teacher.php">Teacher</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="student.php">Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="attendance.php">Attendance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>  
    </ul>
  </div>  
</nav>