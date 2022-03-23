<?php
include 'requre/connect.php';
include 'dbconfig.php';
//$semester = 'iot_2nd';


if (isset($_POST["submit"])) {
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $intake = $_POST["getIntake"];
    $batch = $_POST["getBatch"];
    $module = $_POST["getModule"];
    $semester = $intake . $batch . $module;
    //echo $semester;
    //exit();


    $subjectCode = $_POST["sub_code108"];
    $teacherID = $_POST["teacher_id108"];
    $roomNo = $_POST["room_no108"];
    $day = "satday";
    $ctime = "8:00-9:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code109"];
    $teacherID = $_POST["teacher_id109"];
    $roomNo = $_POST["room_no109"];
    $day = "satday";
    $ctime = "9:00-10:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code110"];
    $teacherID = $_POST["teacher_id110"];
    $roomNo = $_POST["room_no110"];
    $day = "satday";
    $ctime = "10:00-11:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code111"];
    $teacherID = $_POST["teacher_id111"];
    $roomNo = $_POST["room_no111"];
    $day = "satday";
    $ctime = "11:00-12:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code112"];
    $teacherID = $_POST["teacher_id112"];
    $roomNo = $_POST["room_no112"];
    $day = "satday";
    $ctime = "12:00-13:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code113"];
    $teacherID = $_POST["teacher_id113"];
    $roomNo = $_POST["room_no113"];
    $day = "satday";
    $ctime = "13:00-14:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code114"];
    $teacherID = $_POST["teacher_id114"];
    $roomNo = $_POST["room_no114"];
    $day = "satday";
    $ctime = "14:00-15:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code115"];
    $teacherID = $_POST["teacher_id115"];
    $roomNo = $_POST["room_no115"];
    $day = "satday";
    $ctime = "15:00-16:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }

    $subjectCode = $_POST["sub_code116"];
    $teacherID = $_POST["teacher_id116"];
    $roomNo = $_POST["room_no116"];
    $day = "satday";
    $ctime = "16:00-17:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code208"];
    $teacherID = $_POST["teacher_id208"];
    $roomNo = $_POST["room_no208"];
    $day = "sunday";
    $ctime = "8:00-9:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code209"];
    $teacherID = $_POST["teacher_id209"];
    $roomNo = $_POST["room_no209"];
    $day = "sunday";
    $ctime = "9:00-10:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code210"];
    $teacherID = $_POST["teacher_id210"];
    $roomNo = $_POST["room_no210"];
    $day = "sunday";
    $ctime = "10:00-11:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code211"];
    $teacherID = $_POST["teacher_id211"];
    $roomNo = $_POST["room_no211"];
    $day = "sunday";
    $ctime = "11:00-12:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code212"];
    $teacherID = $_POST["teacher_id212"];
    $roomNo = $_POST["room_no212"];
    $day = "sunday";
    $ctime = "12:00-13:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code213"];
    $teacherID = $_POST["teacher_id213"];
    $roomNo = $_POST["room_no213"];
    $day = "sunday";
    $ctime = "13:00-14:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code214"];
    $teacherID = $_POST["teacher_id214"];
    $roomNo = $_POST["room_no214"];
    $day = "sunday";
    $ctime = "14:00-15:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code215"];
    $teacherID = $_POST["teacher_id215"];
    $roomNo = $_POST["room_no215"];
    $day = "sunday";
    $ctime = "15:00-16:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }

    $subjectCode = $_POST["sub_code216"];
    $teacherID = $_POST["teacher_id216"];
    $roomNo = $_POST["room_no216"];
    $day = "sunday";
    $ctime = "16:00-17:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }

    $subjectCode = $_POST["sub_code308"];
    $teacherID = $_POST["teacher_id308"];
    $roomNo = $_POST["room_no308"];
    $day = "Monday";
    $ctime = "8:00-9:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code309"];
    $teacherID = $_POST["teacher_id309"];
    $roomNo = $_POST["room_no309"];
    $day = "Monday";
    $ctime = "9:00-10:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code310"];
    $teacherID = $_POST["teacher_id310"];
    $roomNo = $_POST["room_no310"];
    $day = "Monday";
    $ctime = "10:00-11:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code311"];
    $teacherID = $_POST["teacher_id311"];
    $roomNo = $_POST["room_no311"];
    $day = "Monday";
    $ctime = "11:00-12:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code312"];
    $teacherID = $_POST["teacher_id312"];
    $roomNo = $_POST["room_no312"];
    $day = "Monday";
    $ctime = "12:00-13:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code313"];
    $teacherID = $_POST["teacher_id313"];
    $roomNo = $_POST["room_no313"];
    $day = "Monday";
    $ctime = "13:00-14:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code314"];
    $teacherID = $_POST["teacher_id314"];
    $roomNo = $_POST["room_no314"];
    $day = "Monday";
    $ctime = "14:00-15:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code315"];
    $teacherID = $_POST["teacher_id315"];
    $roomNo = $_POST["room_no315"];
    $day = "Monday";
    $ctime = "15:00-16:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }

    $subjectCode = $_POST["sub_code316"];
    $teacherID = $_POST["teacher_id316"];
    $roomNo = $_POST["room_no316"];
    $day = "Monday";
    $ctime = "16:00-17:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code408"];
    $teacherID = $_POST["teacher_id408"];
    $roomNo = $_POST["room_no408"];
    $day = "Tuesday";
    $ctime = "8:00-9:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code409"];
    $teacherID = $_POST["teacher_id409"];
    $roomNo = $_POST["room_no409"];
    $day = "Tuesday";
    $ctime = "9:00-10:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code410"];
    $teacherID = $_POST["teacher_id410"];
    $roomNo = $_POST["room_no410"];
    $day = "Tuesday";
    $ctime = "10:00-11:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code231"];
    $teacherID = $_POST["teacher_id231"];
    $roomNo = $_POST["room_no231"];
    $day = "Tuesday";
    $ctime = "11:00-12:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code412"];
    $teacherID = $_POST["teacher_id412"];
    $roomNo = $_POST["room_no412"];
    $day = "Tuesday";
    $ctime = "12:00-13:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code413"];
    $teacherID = $_POST["teacher_id413"];
    $roomNo = $_POST["room_no413"];
    $day = "Tuesday";
    $ctime = "13:00-14:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code414"];
    $teacherID = $_POST["teacher_id414"];
    $roomNo = $_POST["room_no414"];
    $day = "Tuesday";
    $ctime = "14:00-15:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code415"];
    $teacherID = $_POST["teacher_id415"];
    $roomNo = $_POST["room_no415"];
    $day = "Tuesday";
    $ctime = "15:00-16:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }

    $subjectCode = $_POST["sub_code416"];
    $teacherID = $_POST["teacher_id416"];
    $roomNo = $_POST["room_no416"];
    $day = "Tuesday";
    $ctime = "16:00-17:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }

    $subjectCode = $_POST["sub_code508"];
    $teacherID = $_POST["teacher_id508"];
    $roomNo = $_POST["room_no508"];
    $day = "Wednesday";
    $ctime = "8:00-9:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code509"];
    $teacherID = $_POST["teacher_id509"];
    $roomNo = $_POST["room_no509"];
    $day = "Wednesday";
    $ctime = "9:00-10:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code510"];
    $teacherID = $_POST["teacher_id510"];
    $roomNo = $_POST["room_no510"];
    $day = "Wednesday";
    $ctime = "10:00-11:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code511"];
    $teacherID = $_POST["teacher_id511"];
    $roomNo = $_POST["room_no511"];
    $day = "Wednesday";
    $ctime = "11:00-12:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code512"];
    $teacherID = $_POST["teacher_id512"];
    $roomNo = $_POST["room_no512"];
    $day = "Wednesday";
    $ctime = "12:00-13:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code513"];
    $teacherID = $_POST["teacher_id513"];
    $roomNo = $_POST["room_no513"];
    $day = "Wednesday";
    $ctime = "13:00-14:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code514"];
    $teacherID = $_POST["teacher_id514"];
    $roomNo = $_POST["room_no514"];
    $day = "Wednesday";
    $ctime = "14:00-15:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code515"];
    $teacherID = $_POST["teacher_id515"];
    $roomNo = $_POST["room_no515"];
    $day = "Wednesday";
    $ctime = "15:00-16:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }

    $subjectCode = $_POST["sub_code516"];
    $teacherID = $_POST["teacher_id516"];
    $roomNo = $_POST["room_no516"];
    $day = "Wednesday";
    $ctime = "16:00-17:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code608"];
    $teacherID = $_POST["teacher_id608"];
    $roomNo = $_POST["room_no608"];
    $day = "Thrusday";
    $ctime = "8:00-9:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code609"];
    $teacherID = $_POST["teacher_id609"];
    $roomNo = $_POST["room_no609"];
    $day = "Thrusday";
    $ctime = "9:00-10:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code610"];
    $teacherID = $_POST["teacher_id610"];
    $roomNo = $_POST["room_no610"];
    $day = "Thrusday";
    $ctime = "10:00-11:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code611"];
    $teacherID = $_POST["teacher_id611"];
    $roomNo = $_POST["room_no611"];
    $day = "Thrusday";
    $ctime = "11:00-12:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code612"];
    $teacherID = $_POST["teacher_id612"];
    $roomNo = $_POST["room_no612"];
    $day = "Thrusday";
    $ctime = "12:00-13:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code613"];
    $teacherID = $_POST["teacher_id613"];
    $roomNo = $_POST["room_no613"];
    $day = "Thrusday";
    $ctime = "13:00-14:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code614"];
    $teacherID = $_POST["teacher_id614"];
    $roomNo = $_POST["room_no614"];
    $day = "Thrusday";
    $ctime = "14:00-15:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    $subjectCode = $_POST["sub_code615"];
    $teacherID = $_POST["teacher_id615"];
    $roomNo = $_POST["room_no615"];
    $day = "Thrusday";
    $ctime = "15:00-16:00";
    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {
        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }

    $subjectCode = $_POST["sub_code616"];
    $teacherID = $_POST["teacher_id616"];
    $roomNo = $_POST["room_no616"];
    $day = "Thrusday";
    $ctime = "16:00-17:00";

    if ($subjectCode != "Sub_code" && $teacherID != "Teacher" && $roomNo != "room_no") {

        $query = "INSERT INTO $semester
              (sub_code,teacher_id,room_no,day,ctime)
              VALUES ('$subjectCode','$teacherID','$roomNo','$day','$ctime')";
        mysqli_query($connect, $query);
    }
    //print_r($query);
    //exit();
}
header('Location: routine.php');
