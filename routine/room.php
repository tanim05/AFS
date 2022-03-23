<?php
    $query = "SELECT * FROM room";
    $result1 = mysqli_query($connect, $query);
    $options = "";
        while($row3 = mysqli_fetch_array($result2))
        {
            $options = $options."<option>$row3[0]</option>";
        }
?>