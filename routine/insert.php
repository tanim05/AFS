<?php
//insert.php;

if(isset($_POST["sub_code"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=routine", "root", "");
 $order_id = uniqid();
 for($count = 0; $count < count($_POST["sub_code"]); $count++)
 {  
  $query = "INSERT INTO sub 
  (sub_code, sub_name, sub_credit) 
  VALUES (:sub_code, :sub_name, :sub_credit)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':sub_code'  => $_POST["sub_code"][$count], 
    ':sub_name' => $_POST["sub_name"][$count], 
    ':sub_credit'  => $_POST["sub_credit"][$count]
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>

