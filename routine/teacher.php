<?php
    $query = "SELECT * FROM teacher";
    $result1 = mysqli_query($connect, $query);
    $result2 = mysqli_query($connect, $query);
    $options = "";
    while($row2 = mysqli_fetch_array($result2))
    {
        $options = $options."<option>$row2[2]</option>";
    }
?>