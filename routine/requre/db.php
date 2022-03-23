<?php 
    include 'dbconfig.php';

    $query = "SELECT * FROM `iot_1st`;

    $result=mysqli_query($connect, $query);
    echo '<pre>';
    print_r($result);
    echo '</pre>';
    exit(); 
?>