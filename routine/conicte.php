<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "exam_date_fixing";
    $connect = mysqli_connect($hostname, $username, $password, $dbname); 
    if(!$connect)
    { 
     	die('Could not connect: ' . mysql_error()); 
    } 
		mysqli_select_db($connect,"exam_date_fixing");
        $query = "SELECT sub_name FROM sub where program in ('C','ICTE')";
        $result1 = mysqli_query($connect, $query);
        $result2 = mysqli_query($connect, $query);
        $options = "";
            while($row3 = mysqli_fetch_array($result2))
            {
                $options = $options."<option>$row3[0]</option>";
            }
    ?>