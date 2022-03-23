<?php
    $query = "SELECT * FROM sub";
    $result1 = mysqli_query($connect, $query);
    $result2 = mysqli_query($connect, $query);
    $options = "";
        while($row3 = mysqli_fetch_array($result2))
        {
            $options = $options."<option>$row3[2]</option>";
        }
?>