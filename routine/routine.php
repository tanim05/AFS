<?php
// check_seesion.php
include 'requre/connect.php';
include 'dbconfig.php';
include 'sub.php';
include 'teacher.php';
include 'room.php';
//$Semester='iot_1st';
// session_start();
// if (!isset($_SESSION['email']) || empty($_SESSION['password'])) header("location: login.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Routine</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="#">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/customStyle.css" rel="stylesheet">

</head>

<body id="page-top">
    <div class="row">
        <div class="nav-bar-header-one p-2 ml-3 ">
            <div class="header-logo p-1">
                <a href="../index.php">
                    <img width="90" height="35" src="../attendance/img/seip1.png" alt="logo">
                    <img width="90" height="35" src="../attendance/img/iba.png" alt="logo">
                </a>
            </div>
        </div>
        <div class="col text-right">
            <div class="jumbotron-small text-left " style="margin-bottom:0">
                <h1>Post Graduate Diploma in Garment Business (PGD-GB)</h1>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="http://localhost:8000/batch">Home</a>
        <!-- <a class="navbar-brand" href="index.php">Attendance Status</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="attendance.php">Attendance</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="../attendance/login.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- <nav class="navbar navbar-expand n avbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Automated Routine System</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>-->

    <!-- Navbar Search -->
    <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>-->

    <!-- Navbar -->
    <!--<ul class="navbar-nav ml-auto ml-md-0">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">Settings</a>
        <a class="dropdown-item" href="#">Activity Log</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </div>
    </li>
  </ul>

  </nav> -->

    <div id="wrapper">

        <!-- Sidebar -->
        <!-- <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="routine.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Routine</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="add_teacher.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Add Teacher</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_student.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Add Student</span></a>
      </li>
    </ul> -->

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <!-- <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Routine</a>
          </li>
          <li class="breadcrumb-item active">routine</li>
        </ol> -->

                <!-- Page Content -->
                <!-- <h1>Routine</h1> -->
                <hr>
                <div class="main content">
                    <form method="post" action="routineAction.php">
                        <div class="table">
                            <div class="d-flex m-3 mr-5 ml-5">
                                <!-- <h2 class="text-center"> -->
                                <select class="dropdown mr-5 custom-select" name="getIntake">

                                    <option selected>Select Intake</option>
                                    <option value="i1">Intake-1</option>
                                    <option value="i2">Intake-2</option>
                                    <option value="i3">Intake-3</option>
                                    <option value="i4">Intake-4</option>
                                    <option value="i4">Intake-5</option>
                                    <option value="i4">Intake-6</option>
                                    <option value="i4">Intake-7</option>
                                    <option value="i4">Intake-8</option>
                                    <option value="i4">Intake-9</option>
                                </select>
                                <select class="custom-select mr-5 " name="getBatch">
                                    <option selected>Select Batch</option>
                                    <option value="b1">Batch-1</option>
                                    <option value="b2">Batch-2</option>
                                    <option value="b3">Batch-3</option>
                                </select>
                                <select class="custom-select" name="getModule">
                                    <option selected>Select Module</option>
                                    <option value="m1">Module-1</option>
                                    <option value="m2">Module-2</option>
                                    <option value="m3">Module-3</option>
                                </select>
                                <!-- </h2> -->
                            </div>
                            <?php
                            // // $semester='ict_1st';

                            // $semester = $_POST['getsemester'];
                            //$session_name = $_POST['getsession'];
                            ?>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Time/<br>Week</th>
                                        <th scope="col">8:00-9:00</th>
                                        <th scope="col">9:00-10:00</th>
                                        <th scope="col">10:00-11:00</th>
                                        <th scope="col">11:00-12:00</th>
                                        <th scope="col">12:00-13:00</th>
                                        <th scope="col">13:00-14:00</th>
                                        <th scope="col">14:00-15:00</th>
                                        <th scope="col">15:00-16:00</th>
                                        <th scope="col">16:00-17:00</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Saterday</th>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code108">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id108">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no108">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code109">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id109">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no109">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code110">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id110">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no110">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code111">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id111">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no111">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code112">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id112">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no112">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code113">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id113">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no113">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code114">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id114">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no114">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code115">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id115">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no115">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code116">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id116">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no116">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sunday</th>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code208">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id208">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no208">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code209">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id209">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no209">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code210">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id210">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no210">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code211">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id211">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no211">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code212">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id212">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no212">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code213">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id213">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no213">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code214">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id214">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no214">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code215">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id215">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no215">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code216">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id216">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no216">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Monday</th>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code308">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id308">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no308">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code309">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id309">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no309">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code310">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id310">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no310">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code311">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id311">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no311">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code312">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id312">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no312">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code313">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id313">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no313">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code314">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id314">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no314">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code315">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id315">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no315">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code316">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id316">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no316">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tuesday</th>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code408">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id408">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no408">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code409">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id409">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no409">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code410">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id410">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no410">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code231">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id231">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no231">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code412">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id412">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no412">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code413">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id413">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no413">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code414">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id414">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no414">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code415">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id415">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no415">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code416">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id416">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no416">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Wednesday</th>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code508">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id508">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no508">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code509">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id509">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no509">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code510">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id510">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no510">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code511">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id511">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no511">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code512">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id512">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no512">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code513">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id513">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no513">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code514">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id514">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no514">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code515">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id515">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no515">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code516">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id516">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no516">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Thrusday</th>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code608">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id608">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no608">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code609">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id609">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no609">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code610">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id610">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no610">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code611">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id611">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no611">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code612">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id612">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no612">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code613">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id613">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no613">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code614">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id614">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no614">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code615">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id615">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no615">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <?php include 'sub.php'; ?>
                                                <select class="form-control" name="sub_code616">
                                                    <option>Sub_code</option>
                                                    <?php while ($row3 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row3[0]; ?>"><?php echo $row3[0]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                    <?php include 'teacher.php'; ?>
                                                </select><br>
                                                <select class="form-control" name="teacher_id616">
                                                    <option>Teacher</option>
                                                    <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                        <option value="<?php echo $row1[0]; ?>"><?php echo $row1[1]; ?>
                                                        </option>
                                                    <?php endwhile; ?>
                                                </select><br>
                                                <?php include 'room.php'; ?>
                                                <select class="form-control" name="room_no616">
                                                    <option>room_no</option>
                                                    <?php
                                                    $query_room = "SELECT room_no FROM room ";
                                                    $room_result = mysqli_query($conn, $query_room);
                                                    while ($row = mysqli_fetch_array($room_result)) {
                                                    ?>
                                                        <?php while ($row1 = mysqli_fetch_array($result1)) :; ?>
                                                            <option value="<?php echo $row1[0]; ?>">
                                                                room-<?php echo $row1[0];
                                                                        ?>
                                                            </option>
                                                        <?php endwhile; ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="padding-left: 30%; padding-right: 30%; padding-bottom: 20px ">
                            <button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <!-- <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © 2019 - All rights reserved by BDU. <br>Developed By Shakirul Arifin Tanim</span>
          </div>
        </div>
      </footer> -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

</body>

</html>
