<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "exam_date_fixing";
    $connect = mysqli_connect($hostname, $username, $password, $dbname); 
mysqli_set_charset($connect, 'utf8');
    if(!$connect)
    { 
      die('Could not connect: ' . mysql_error()); 
    } 
    mysqli_select_db($connect,"exam_date_fixing");
    ?>