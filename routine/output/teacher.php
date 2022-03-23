<!DOCTYPE html>
<html>
<head>
  <style>
  a:link, a:visited {
    background-color: #BF4040;
    color: white;
    padding: 25px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }

  a:hover, a:active {
  background-color: red;
  }
  </style>
  <title>Routine- IOT-001</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="icon" type="image/png" sizes="16x16" href="https://bdu.ac.bd/assets/images/icon/favicon-16x16.png">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body>
  <?php 
    session_start();
  if (!isset($_SESSION['email']) || empty($_SESSION['email'])) header("location: login.php");
  $semester11="i1b1m1";
  $semester12="i1b1m1";
  $semester21="i1b1m1";
  $semester22="i1b1m1";

//echo $_SESSION['email'];



  //include 'dbconfig.php';

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "attendance";
$connect = mysqli_connect($hostname, $username, $password, $dbname); 
if(!$connect)
{ 
  die('Could not connect: ' . mysql_error()); 
} 

$t_email=$_SESSION['email'];

$sql="select * from teacher where email='$t_email'";

   $result = mysqli_query($connect, $sql);
     while ( $row = mysqli_fetch_array($result)) 
	 {

      $teacher_id=$row['teacher_id'];
	  $t_name=$row['teacher_name'];
	 }



	  
	 
	 
	 
	 

// mysqli_select_db($connect,"routine");


//     $query = "insert into iot_ist_student(sub_code,room_no,day,ctime,teacher_id) SELECT DISTINCT `iot_1st`.sub_code, `iot_1st`.room_no, `iot_1st`.day,`iot_1st`.ctime,`teacher`.teacher_id FROM `iot_1st` JOIN `teacher` ON `iot_1st`.teacher_id=`teacher`.teacher_id ORDER BY `iot_1st`.day DESC ,`iot_1st`.ctime DESC ";

//     $result=mysqli_query($connect, $query);

  //       $sroutine = "";
  //       while($row = mysqli_fetch_array($result))
  //       {
  //        // $day = $sroutine.$row['day'];
  //        //    $ctime = $sroutine.$row['ctime'];
  //        //    $sub_code = $sroutine.$row['sub_code'];
  //        //    $teacher_id = $sroutine.$row['teacher_id'];
  //        //    $room_no = $sroutine.$row['room_no'];
    // //echo "$day<br>$ctime<br>$sub_code<br>$teacher_id<br>$room_no<br>";
          
  //         echo $row['day']."<br>";
  //         echo $row['ctime']."<br>";
  //         echo $row['sub_code']."<br>";
  //         echo $row['teacher_id']."<br>";
  //         echo $row['room_no']."<br>";

  //           /*$sroutine = $sroutine."<option>$row[day]</option>";
  //           $sroutine = $sroutine."<option>$row[ctime]</option>";
  //           $sroutine = $sroutine."<option>$row[sub_code]</option>";
  //           $sroutine = $sroutine."<option>$row[teacher_id]</option>";
  //           $sroutine = $sroutine."<option>$row[room_no]</option>";*/
  //       }
    // echo '<pre>';
     //print_r($result);
     //print_r($sroutine);
    // var_dump($sroutine);
    // echo '</pre>';
    // exit();

	

	
	
  ?>
  
 
			<div class="col-sm-3">
				<h4><span>Routine for Teacher:  <font color="4590C8"><?php echo $t_name ."&nbsp &nbsp";?></font></span></h4>
			</div>
			
    
  
  
  <table align='right'>
		<tr>
				 <!--<td align='left'>
						<h5 align='left'><a href = "room.php">Room</a></h5>
				  </td>-->
			
				<td align="center">
				<h5 align='right'><a   href = "../login.php">Logout</a></h5>
				</td>
		</tr>
	  </table>

  <div class="row">
    <div class="col-sm-12">
      <div class="table">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Week Days/Time</th>
              <?php $t8 = "8:00-8:55"; ?>
              <th scope="col"><?php echo  "<h6 align='center'"."<br>".$t8; ?></th>
              <?php $t9 = "9:00-9:55"; ?>
              <th scope="col"><?php echo "<h6 align='center'"."<br>". $t9; ?></th>
              <?php $t10 = "10:00-10:55"; ?>
              <th scope="col"><?php echo  "<h6 align='center'"."<br>".$t10; ?></th>
              <?php $t11 = "11:00-11:55"; ?>
              <th scope="col"><?php echo "<h6 align='center'"."<br>". $t11; ?></th>
              <?php $t12 = "12:00-12:55"; 
              if ($t12!="") { ?>
                <th scope="col"><?php echo  "<h6 align='center'"."<br>".$t12; ?></th><?php
              }
              ?>
              <?php $t13 = "13:00-13:55"; ?>
              <th scope="col"><?php echo  "<h6 align='center'"."<br>".$t13; ?></th>
              <?php $t14 = "14:00-14:55"; ?>
              <th scope="col"><?php echo  "<h6 align='center'"."<br>".$t14; ?></th>
              <?php $t15 = "15:00-15:55"; ?>
              <th scope="col"><?php echo  "<h6 align='center'"."<br>".$t15; ?></th>
              <?php $t16 = "16:00-16:55"; ?>
              <th scope="col"><?php echo  "<h6 align='center'"."<br>".$t16; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Saturday</th>
              <?php
                      $sub_code108 = " ";
                      $teacher_id108 = " ";
                      $room_No108 = " ";
                      $sub_code109 = " ";
                      $teacher_id109 = " ";
                      $room_No109 = " ";
                      $sub_code110 = " ";
                      $teacher_id110 = " ";
                      $room_No110 = " ";
                      $sub_code111 = " ";
                      $teacher_id111 = " ";
                      $room_No111 = " ";
                      $sub_code112 = " ";
                      $teacher_id112 = " ";
                      $room_No112 = " ";
                      $sub_code113 = " ";
                      $teacher_id113 = " ";
                      $room_No113 = " ";
                      $sub_code114 = " ";
                      $teacher_id114 = " ";
                      $room_No114 = " ";
                      $sub_code115 = " ";
                      $teacher_id115 = " ";
                      $room_No115 = " ";
                      $sub_code116 = " ";
                      $teacher_id116 = " ";
                      $room_No116 = " ";
					  $lab_108='';
					  $lab_110='';

           // $query = "SELECT * FROM $semester11 where day ='satday'and teacher_id= '$teacher_id' ";
$query="SELECT id,sub_code,'iot_ist' as semester ,room_no,day,ctime,lab FROM $semester11 
 where day ='satday'and teacher_id= '$teacher_id'
union all 
SELECT id,sub_code,'iot_2nd' as semester ,room_no,day,ctime,lab FROM $semester12 
where day ='satday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_1st' as semester ,room_no,day,ctime,lab FROM $semester21
where day ='satday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_2nd' as semester ,room_no,day,ctime,lab FROM $semester21 
where day ='satday'and teacher_id= '$teacher_id'";

    $result1 = mysqli_query($connect, $query);
    
   
       while ( $row = mysqli_fetch_array($result1))
        {
            if ($row['ctime']=='8:00-9:00') {
              
              $sub_code108 = $row['sub_code'];
            //  $teacher_id108 = $row['semester'];
              $room_No108 = 'Room-'.$row['room_no'];

             }
            elseif ($row['ctime']=='9:00-10:00') {
              $sub_code109 = $row['sub_code'];
             // $teacher_id109 = $row['semester'];
              $room_No109 = 'Room-'.$row['room_no'];
            }

            elseif ($row['ctime']=='10:00-11:00') {
              $sub_code110 = $row['sub_code'];
             // $teacher_id110 = $row['semester'];
              $room_No110 = 'Room-'.$row['room_no'];
            }
            elseif ($row['ctime']=='11:00-12:00'&& $row['lab']=='l') {
				$lab_108='l';
              $sub_code111 = $row['sub_code'];
             // $teacher_id111 = $row['semester'];
              $room_No111 = 'Room-'.$row['room_no'];
            }
			
			 elseif ($row['ctime']=='11:00-12:00'&& $row['lab']=!'l') {
				 $lab_108='c';
              $sub_code111 = $row['sub_code'];
              //$teacher_id111 = $row['semester'];
              $room_No111 = 'Room-'.$row['room_no'];
            }
			
            elseif ($row['ctime']=='12:00-13:00') {
              $sub_code112 = $row['sub_code'];
             // $teacher_id112 = $row['semester'];
              $room_No112 = 'Room-'.$row['room_no'];
            }
            elseif ($row['ctime']=='13:00-14:00') {
              $sub_code113 = $row['sub_code'];
             // $teacher_id113 = $row['semester'];
              $room_No113 = 'Room-'.$row['room_no'];
            }
             elseif ($row['ctime']=='14:00-15:00' && $row['lab']=='l') {
				$lab_110='l';
              $sub_code114 = $row['sub_code'];
              //$teacher_id114 = $row['teacher_id'];
              $room_No114 = 'Room-'.$row['room_no'];
            }
			elseif ($row['ctime']=='14:00-15:00' && $row['lab']!='l') {
				$lab_110='c';
              $sub_code114 = $row['sub_code'];
             // $teacher_id114 = $row['teacher_id'];
              $room_No114 = 'Room-'.$row['room_no'];
            }
            elseif ($row['ctime']=='15:00-16:00') {
              $sub_code115 = $row['sub_code'];
             // $teacher_id115 = $row['semester'];
              $room_No115 = 'Room-'.$row['room_no'];
            }
            elseif ($row['ctime']=='16:00-17:00') {
              $sub_code116 = $row['sub_code'];
             // $teacher_id116 = $row['semester'];
              $room_No116 = 'Room-'.$row['room_no'];
            }

          }

          ?>
              <th bgcolor="#FAF1F1"scope="col"><?php echo  "<h5 align='center'"."<br>". $sub_code108."<br> ".$teacher_id108."<br> ".$room_No108; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code109."<br> ".$teacher_id109."<br> ".$room_No109; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code110."<br> ".$teacher_id110."<br> ".$room_No110; ?></th>
			  
			  
			    	  <?php if ($lab_108=='l') {?>	
			   <th  bgcolor="#909497"scope="col"><?php // echo "<h5 align='center'"."<br>".$sub_code208."<br> ".$teacher_id208."<br> ".$room_No208; ?></th>
              <th  bgcolor="#909497"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code112."<br> ".$teacher_id112."<br> ".$room_No112; ?></th>
              <th bgcolor="#909497" scope="col"><?php //echo "<h5 align='center'"."<br>".$sub_code210."<br> ".$teacher_id210."<br> ".$room_No210; ?></th>  <?php }   
			   
			   else{ ?>   
			      <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code111."<br> ".$teacher_id111."<br> ".$room_No111; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code112."<br> ".$teacher_id112."<br> ".$room_No112; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code113."<br> ".$teacher_id113."<br> ".$room_No113; ?></th> <?php }   ?>
			  
					  
			  
			  
			  
			  
			  		<?php if ($lab_110=='l') {?>	
					<th  bgcolor="#909497"scope="col"><?php // echo "<h5 align='center'"."<br>".$sub_code208."<br> ".$teacher_id208."<br> ".$room_No208; ?></th>
					<th  bgcolor="#909497"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code115."<br> ".$teacher_id115."<br> ".$room_No115; ?></th>
					<th bgcolor="#909497" scope="col"><?php //echo "<h5 align='center'"."<br>".$sub_code210."<br> ".$teacher_id210."<br> ".$room_No210; ?></th>  <?php }   
			   
			   else{ ?>   
			   		 <th  bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code114."<br> ".$teacher_id114."<br> ".$room_No114."</h5>"; ?></th>
				      <th  bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code115."<br> ".$teacher_id115."<br> ".$room_No115."</h5>"; ?></th>
				      <th  bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code116."<br> ".$teacher_id116."<br> ".$room_No116."</h5>"; ?></th> <?php }   ?>
			  
			  
			  
			  
			  
			  
			  
			  
           
            </tr>
            <tr>
            <th scope="row">Sunday</th>
            <?php
                      $sub_code208 = " ";
                      $teacher_id208 = " ";
                      $room_No208 = " ";
                      $sub_code209 = " ";
                      $teacher_id209 = " ";
                      $room_No209 = " ";
                      $sub_code210 = " ";
                      $teacher_id210 = " ";
                      $room_No210 = " ";
                      $sub_code211 = " ";
                      $teacher_id211 = " ";
                      $room_No211 = " ";
                      $sub_code212 = " ";
                      $teacher_id212 = " ";
                      $room_No212 = " ";
                      $sub_code213 = " ";
                      $teacher_id213 = " ";
                      $room_No213 = " ";
                      $sub_code214 = " ";
                      $teacher_id214 = " ";
                      $room_No214 = " ";
                      $sub_code215 = " ";
                      $teacher_id215 = " ";
                      $room_No215 = " ";
                      $sub_code216 = " ";
                      $teacher_id216 = " ";
                      $room_No216 = " ";
					  $lab_208='';
              $query="SELECT id,sub_code,'iot_ist' as semester ,room_no,day,ctime,lab FROM $semester11 
 where day ='sunday'and teacher_id= '$teacher_id'
union all 
SELECT id,sub_code,'iot_2nd' as semester ,room_no,day,ctime,lab FROM $semester12 
where day ='sunday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_1st' as semester ,room_no,day,ctime,lab FROM $semester21
where day ='sunday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_2nd' as semester ,room_no,day,ctime,lab FROM $semester21 
where day ='sunday'and teacher_id= '$teacher_id'";
              $result1 = mysqli_query($connect, $query);
    
              while ( $row = mysqli_fetch_array($result1))
              {
                if ($row['ctime']=='8:00-9:00') {
                  $sub_code208 = $row['sub_code'];
                 // $teacher_id208 = $row['semester'];
                  $room_No208 = 'Room-'.$row['room_no'];

                 }
                elseif ($row['ctime']=='9:00-10:00') {
                  $sub_code209 = $row['sub_code'];
                  //$teacher_id209 = $row['semester'];
                  $room_No209 = 'Room-'.$row['room_no'];
                }

                elseif ($row['ctime']=='10:00-11:00') {
                  $sub_code210 = $row['sub_code'];
                  //$teacher_id210 = $row['semester'];
                  $room_No210 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='11:00-12:00') {
                  $sub_code211 = $row['sub_code'];
                  //$teacher_id211 = $row['semester'];
                  $room_No211 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='12:00-13:00') {
                  $sub_code212 = $row['sub_code'];
                  //$teacher_id212 = $row['semester'];
                  $room_No212 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='13:00-14:00') {
                  $sub_code213 = $row['sub_code'];
                 // $teacher_id213 = $row['semester'];
                  $room_No213 = 'Room-'.$row['room_no'];
                }

                elseif ($row['ctime']=='14:00-15:00'&& $row['lab']=='l') {
					$lab_208='l';
                  $sub_code214 = $row['sub_code'];
                  //$teacher_id214 = $row['semester'];
                  $room_No214 = 'Room-'.$row['room_no'];
                }
				 elseif ($row['ctime']=='14:00-15:00'&& $row['lab']!='l') {
					$lab_208='c';
                  $sub_code214 = $row['sub_code'];
                  //$teacher_id214 = $row['semester'];
                  $room_No214 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='15:00-16:00') {
                  $sub_code215 = $row['sub_code'];
                  //$teacher_id215 = $row['semester'];
                  $room_No215 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='16:00-17:00') {
                  $sub_code216 = $row['sub_code'];
                  //$teacher_id216 = $row['semester'];
                  $room_No216 = 'Room-'.$row['room_no'];
                }
              }
            ?>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code208."<br> ".$teacher_id208."<br> ".$room_No208; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code209."<br> ".$teacher_id209."<br> ".$room_No209; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code210."<br> ".$teacher_id210."<br> ".$room_No210; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code211."<br> ".$teacher_id211."<br> ".$room_No211; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code212."<br> ".$teacher_id212."<br> ".$room_No212; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code213."<br> ".$teacher_id213."<br> ".$room_No213; ?></th>
			  
			  
			    <?php if ($lab_208=='l') {?>	
			   <th  bgcolor="#909497"scope="col"><?php // echo "<h5 align='center'"."<br>".$sub_code208."<br> ".$teacher_id208."<br> ".$room_No208; ?></th>
              <th  bgcolor="#909497"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code215."<br> ".$teacher_id215."<br> ".$room_No215; ?></th>
              <th bgcolor="#909497" scope="col"><?php //echo "<h5 align='center'"."<br>".$sub_code210."<br> ".$teacher_id210."<br> ".$room_No210; ?></th>  <?php }   
			   
			   else{ ?>   
			               <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code214."<br> ".$teacher_id214."<br> ".$room_No214; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code215."<br> ".$teacher_id215."<br> ".$room_No215; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code216."<br> ".$teacher_id216."<br> ".$room_No216; ?></th> <?php }   ?>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
    
            </tr>
            <tr>
              <th scope="row">Monday</th>
                <?php
                      $sub_code308 = " ";
                      $teacher_id308 = " ";
                      $room_No308 = " ";
                      $sub_code309 = " ";
                      $teacher_id309 = " ";
                      $room_No309 = " ";
                      $sub_code310 = " ";
                      $teacher_id310 = " ";
                      $room_No310 = " ";
                      $sub_code311 = " ";
                      $teacher_id311 = " ";
                      $room_No311 = " ";
                      $sub_code312 = " ";
                      $teacher_id312 = " ";
                      $room_No312 = " ";
                      $sub_code313 = " ";
                      $teacher_id313 = " ";
                      $room_No313 = " ";
                      $sub_code314 = " ";
                      $teacher_id314 = " ";
                      $room_No314 = " ";
                      $sub_code315 = " ";
                      $teacher_id315 = " ";
                      $room_No315 = " ";
                      $sub_code316 = " ";
                      $teacher_id316 = " ";
                      $room_No316 = " ";

              $query="SELECT id,sub_code,'iot_ist' as semester ,room_no,day,ctime FROM $semester11 
 where day ='monday'and teacher_id= '$teacher_id'
union all 
SELECT id,sub_code,'iot_2nd' as semester ,room_no,day,ctime FROM $semester12 
where day ='monday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_1st' as semester ,room_no,day,ctime FROM $semester21
where day ='monday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_2nd' as semester ,room_no,day,ctime FROM $semester21 
where day ='monday'and teacher_id= '$teacher_id'";
              $result1 = mysqli_query($connect, $query);
    
              while ( $row = mysqli_fetch_array($result1))
              {
                if ($row['ctime']=='8:00-9:00') {
                  $sub_code308 = $row['sub_code'];
                 // $teacher_id308 = $row['semester'];
                  $room_No308 = 'Room-'.$row['room_no'];

                 }
                elseif ($row['ctime']=='9:00-10:00') {
                  $sub_code309 = $row['sub_code'];
                 // $teacher_id309 = $row['semester'];
                  $room_No309 = 'Room-'.$row['room_no'];
                }

                elseif ($row['ctime']=='10:00-11:00') {
                  $sub_code310 = $row['sub_code'];
                 // $teacher_id310 = $row['semester'];
                  $room_No310 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='11:00-12:00') {
                  $sub_code311 = $row['sub_code'];
                 // $teacher_id311 = $row['semester'];
                  $room_No311 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='12:00-13:00') {
                  $sub_code312 = $row['sub_code'];
                 // $teacher_id312 = $row['semester'];
                  $room_No312 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='13:00-14:00') {
                  $sub_code313 = $row['sub_code'];
                  //$teacher_id313 = $row['semester'];
                  $room_No313 = 'Room-'.$row['room_no'];
                }

                elseif ($row['ctime']=='14:00-15:00') {
                  $sub_code314 = $row['sub_code'];
                 // $teacher_id314 = $row['semester'];
                  $room_No314 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='15:00-16:00') {
                  $sub_code315 = $row['sub_code'];
                 // $teacher_id315 = $row['semester'];
                  $room_No315 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='16:00-17:00') {
                  $sub_code316 = $row['sub_code'];
                 // $teacher_id316 = $row['semester'];
                  $room_No316 = 'Room-'.$row['room_no'];
                }
              }
            ?>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code308."<br> ".$teacher_id308."<br> ".$room_No308; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code309."<br> ".$teacher_id309."<br> ".$room_No309; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code310."<br> ".$teacher_id310."<br> ".$room_No310; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code311."<br> ".$teacher_id311."<br> ".$room_No311; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code312."<br> ".$teacher_id312."<br> ".$room_No312; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code313."<br> ".$teacher_id313."<br> ".$room_No313; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code314."<br> ".$teacher_id314."<br> ".$room_No314; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code315."<br> ".$teacher_id315."<br> ".$room_No315; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code316."<br> ".$teacher_id316."<br> ".$room_No316; ?></th>
            </tr>           
            <tr>
              <th scope="row">Tuesday</th>
                              <?php
                      $sub_code408 = " ";
                      $teacher_id408 = " ";
                      $room_No408 = " ";
                      $sub_code409 = " ";
                      $teacher_id409 = " ";
                      $room_No409 = " ";
                      $sub_code410 = " ";
                      $teacher_id410 = " ";
                      $room_No410 = " ";
                      $sub_code411 = " ";
                      $teacher_id411 = " ";
                      $room_No411 = " ";
                      $sub_code412 = " ";
                      $teacher_id412 = " ";
                      $room_No412 = " ";
                      $sub_code413 = " ";
                      $teacher_id413 = " ";
                      $room_No413 = " ";
                      $sub_code414 = " ";
                      $teacher_id414 = " ";
                      $room_No414 = " ";
                      $sub_code415 = " ";
                      $teacher_id415 = " ";
                      $room_No415 = " ";
                      $sub_code416 = " ";
                      $teacher_id416 = " ";
                      $room_No416 = " ";
					  $lab_408='';

$query="SELECT id,sub_code,'iot_ist' as semester ,room_no,day,ctime,lab FROM $semester11 
 where day ='Tuesday'and teacher_id= '$teacher_id'
union all 
SELECT id,sub_code,'iot_2nd' as semester ,room_no,day,ctime,lab FROM $semester12 
where day ='Tuesday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_1st' as semester ,room_no,day,ctime,lab FROM $semester21
where day ='Tuesday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_2nd' as semester ,room_no,day,ctime,lab FROM $semester21 
where day ='Tuesday'and teacher_id= '$teacher_id'";
              $result1 = mysqli_query($connect, $query);
    
              while ( $row = mysqli_fetch_array($result1))
              {
                if ($row['ctime']=='8:00-9:00') {
                  $sub_code408 = $row['sub_code'];
                 // $teacher_id408 = $row['semester'];
                  $room_No408 = 'Room-'.$row['room_no'];

                 }
                elseif ($row['ctime']=='9:00-10:00') {
                  $sub_code409 = $row['sub_code'];
                 // $teacher_id409 = $row['semester'];
                  $room_No409 = 'Room-'.$row['room_no'];
                }

                elseif ($row['ctime']=='10:00-11:00') {
                  $sub_code410 = $row['sub_code'];
                 // $teacher_id410 = $row['semester'];
                  $room_No410 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='11:00-12:00'&& $row['lab']=='l') {
				$lab_408='l';
                  $sub_code411 = $row['sub_code'];
                 // $teacher_id411 = $row['semester'];
                  $room_No411 = 'Room-'.$row['room_no'];
                }
				 elseif ($row['ctime']=='11:00-12:00'&& $row['lab']!='l') {
				 $lab_408='c';
                  $sub_code411 = $row['sub_code'];
                 // $teacher_id411 = $row['semester'];
                  $room_No411 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='12:00-13:00') {
                  $sub_code412 = $row['sub_code'];
                  //$teacher_id412 = $row['semester'];
                  $room_No412 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='13:00-14:00') {
                  $sub_code413 = $row['sub_code'];
                 // $teacher_id413 = $row['semester'];
                  $room_No413 = 'Room-'.$row['room_no'];
                }

                elseif ($row['ctime']=='14:00-15:00') {
                  $sub_code414 = $row['sub_code'];
                 // $teacher_id414 = $row['semester'];
                  $room_No414 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='15:00-16:00') {
                  $sub_code415 = $row['sub_code'];
                 // $teacher_id415 = $row['semester'];
                  $room_No415 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='16:00-17:00') {
                  $sub_code416 = $row['sub_code'];
                  //$teacher_id416 = $row['semester'];
                  $room_No416 = 'Room-'.$row['room_no'];
                }
              }
            ?>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code408."<br> ".$teacher_id408."<br> ".$room_No408; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code409."<br> ".$teacher_id409."<br> ".$room_No409; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code410."<br> ".$teacher_id410."<br> ".$room_No410; ?></th>
			  
			  
			   <?php if ($lab_408=='l') {?>	
			   <th  bgcolor="#909497"scope="col"><?php // echo "<h5 align='center'"."<br>".$sub_code208."<br> ".$teacher_id208."<br> ".$room_No208; ?></th>
              <th  bgcolor="#909497"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code412."<br> ".$teacher_id412."<br> ".$room_No412; ?></th>
              <th bgcolor="#909497" scope="col"><?php //echo "<h5 align='center'"."<br>".$sub_code210."<br> ".$teacher_id210."<br> ".$room_No210; ?></th>  <?php }   
			   
			   else{ ?>   
			   <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code411."<br> ".$teacher_id411."<br> ".$room_No411; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code412."<br> ".$teacher_id412."<br> ".$room_No412; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code413."<br> ".$teacher_id413."<br> ".$room_No413; ?></th> <?php }   ?>
			  
			  
			  
			  
			  
              
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code414."<br> ".$teacher_id414."<br> ".$room_No414; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code415."<br> ".$teacher_id415."<br> ".$room_No415; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code416."<br> ".$teacher_id416."<br> ".$room_No416; ?></th>
                    </tr>
            <tr>
              <th scope="row">Wednesday</th>
                    <?php
                      $sub_code508 = " ";
                      $teacher_id508 = " ";
                      $room_No508 = " ";
                      $sub_code509 = " ";
                      $teacher_id509 = " ";
                      $room_No509 = " ";
                      $sub_code510 = " ";
                      $teacher_id510 = " ";
                      $room_No510 = " ";
                      $sub_code511 = " ";
                      $teacher_id511 = " ";
                      $room_No511 = " ";
                      $sub_code512 = " ";
                      $teacher_id512 = " ";
                      $room_No512 = " ";
                      $sub_code513 = " ";
                      $teacher_id513 = " ";
                      $room_No513 = " ";
                      $sub_code514 = " ";
                      $teacher_id514 = " ";
                      $room_No514 = " ";
                      $sub_code515 = " ";
                      $teacher_id515 = " ";
                      $room_No515 = " ";
                      $sub_code516 = " ";
                      $teacher_id516 = " ";
                      $room_No516 = " ";
					  $lab_508='';

$query="SELECT id,sub_code,'iot_ist' as semester ,room_no,day,ctime,lab FROM $semester11 
 where day ='Wednesday'and teacher_id= '$teacher_id'
union all 
SELECT id,sub_code,'iot_2nd' as semester ,room_no,day,ctime,lab FROM $semester12 
where day ='Wednesday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_1st' as semester ,room_no,day,ctime,lab FROM $semester21
where day ='Wednesday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_2nd' as semester ,room_no,day,ctime,lab FROM $semester21 
where day ='Wednesday'and teacher_id= '$teacher_id'";
              $result1 = mysqli_query($connect, $query);
    
              while ( $row = mysqli_fetch_array($result1))
              {
                if ($row['ctime']=='8:00-9:00') {
                  $sub_code508 = $row['sub_code'];
                  //$teacher_id508 = $row['semester'];
                  $room_No508 = 'Room-'.$row['room_no'];

                 }
                elseif ($row['ctime']=='9:00-10:00') {
                  $sub_code509 = $row['sub_code'];
                  //$teacher_id509 = $row['semester'];
                  $room_No509 = 'Room-'.$row['room_no'];
                }

                elseif ($row['ctime']=='10:00-11:00') {
                  $sub_code510 = $row['sub_code'];
                 // $teacher_id510 = $row['semester'];
                  $room_No510 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='11:00-12:00'&& $row['lab']=='l') {
					$lab_508='l';
                  $sub_code511 = $row['sub_code'];
                 // $teacher_id511 = $row['semester'];
                  $room_No511 = 'Room-'.$row['room_no'];
                }
				
				elseif ($row['ctime']=='11:00-12:00'&& $row['lab']!='l') {
					$lab_508='c';
                  $sub_code511 = $row['sub_code'];
                  //$teacher_id511 = $row['teacher_id'];
                  $room_No511 = 'Room-'.$row['room_no'];
                }
				
				
                elseif ($row['ctime']=='12:00-13:00') {
                  $sub_code512 = $row['sub_code'];
                 // $teacher_id512 = $row['semester'];
                  $room_No512 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='13:00-14:00') {
                  $sub_code513 = $row['sub_code'];
                 // $teacher_id513 = $row['semester'];
                  $room_No513 = 'Room-'.$row['room_no'];
                }

                elseif ($row['ctime']=='14:00-15:00') {
                  $sub_code514 = $row['sub_code'];
                  //$teacher_id514 = $row['semester'];
                  $room_No514 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='15:00-16:00') {
                  $sub_code515 = $row['sub_code'];
                  //$teacher_id515 = $row['semester'];
                  $room_No515 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='16:00-17:00') {
                  $sub_code516 = $row['sub_code'];
                 // $teacher_id516 = $row['semester'];
                  $room_No516 = 'Room-'.$row['room_no'];
                }
              }
            ?>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code508."<br> ".$teacher_id508."<br> ".$room_No508; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code509."<br> ".$teacher_id509."<br> ".$room_No509; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code510."<br> ".$teacher_id510."<br> ".$room_No510; ?></th>
			  
			  
			  
			  <?php if ($lab_508=='l') {?>	
			   <th  bgcolor="#909497"scope="col"><?php // echo "<h5 align='center'"."<br>".$sub_code208."<br> ".$teacher_id208."<br> ".$room_No208; ?></th>
              <th  bgcolor="#909497"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code512."<br> ".$teacher_id512."<br> ".$room_No512; ?></th>
              <th bgcolor="#909497" scope="col"><?php //echo "<h5 align='center'"."<br>".$sub_code210."<br> ".$teacher_id210."<br> ".$room_No210; ?></th>  <?php }   
			   
			   else{ ?>   
			  <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code511."<br> ".$teacher_id511."<br> ".$room_No511; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code512."<br> ".$teacher_id512."<br> ".$room_No512; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code513."<br> ".$teacher_id513."<br> ".$room_No513; ?></th> <?php }   ?>
			  
			  
			  
			  
			  
			  
			  
			 
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code514."<br> ".$teacher_id514."<br> ".$room_No514; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code515."<br> ".$teacher_id515."<br> ".$room_No515; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code516."<br> ".$teacher_id516."<br> ".$room_No516; ?></th>
                    </tr>
            <tr>
              <th scope="row">Thrusday</th>
                              <?php
                      $sub_code608 = " ";
                      $teacher_id608 = " ";
                      $room_No608 = " ";
                      $sub_code609 = " ";
                      $teacher_id609 = " ";
                      $room_No609 = " ";
                      $sub_code610 = " ";
                      $teacher_id610 = " ";
                      $room_No610 = " ";
                      $sub_code611 = " ";
                      $teacher_id611 = " ";
                      $room_No611 = " ";
                      $sub_code612 = " ";
                      $teacher_id612 = " ";
                      $room_No612 = " ";
                      $sub_code613 = " ";
                      $teacher_id613 = " ";
                      $room_No613 = " ";
                      $sub_code614 = " ";
                      $teacher_id614 = " ";
                      $room_No614 = " ";
                      $sub_code615 = " ";
                      $teacher_id615 = " ";
                      $room_No615 = " ";
                      $sub_code616 = " ";
                      $teacher_id616 = " ";
                      $room_No616 = " ";
					  	$lab_608='';
 
$query="SELECT id,sub_code,'iot_ist' as semester ,room_no,day,ctime,lab FROM $semester11 
 where day ='Thrusday'and teacher_id= '$teacher_id'
union all 
SELECT id,sub_code,'iot_2nd' as semester ,room_no,day,ctime,lab FROM $semester12 
where day ='Thrusday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_1st' as semester ,room_no,day,ctime,lab FROM $semester21
where day ='Thrusday'and teacher_id= '$teacher_id'
union ALL
SELECT id,sub_code,'ict_2nd' as semester ,room_no,day,ctime,lab FROM $semester21 
where day ='Thrusday'and teacher_id= '$teacher_id'";
 $result1 = mysqli_query($connect, $query);
    
              while ( $row = mysqli_fetch_array($result1))
              {
                if ($row['ctime']=='8:00-9:00') {
                  $sub_code608 = $row['sub_code'];
                  //$teacher_id608 = $row['semester'];
                  $room_No608 = 'Room-'.$row['room_no'];

                 }
                elseif ($row['ctime']=='9:00-10:00') {
                  $sub_code609 = $row['sub_code'];
                  //$teacher_id609 = $row['semester'];
                  $room_No609 = 'Room-'.$row['room_no'];
                }

                elseif ($row['ctime']=='10:00-11:00') {
                  $sub_code610 = $row['sub_code'];
                  //$teacher_id610 = $row['semester'];
                  $room_No610 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='11:00-12:00'&& $row['lab']=='l') {
					$lab_608='l';
                  $sub_code611 = $row['sub_code'];
                  //$teacher_id611 = $row['semester'];
                  $room_No611 = 'Room-'.$row['room_no'];
                }
				elseif ($row['ctime']=='11:00-12:00'&& $row['lab']!='l') {
						$lab_608='c';
                  $sub_code611 = $row['sub_code'];
                  //$teacher_id611 = $row['semester'];
                  $room_No611 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='12:00-13:00') {
                  $sub_code612 = $row['sub_code'];
                  //$teacher_id612 = $row['semester'];
                  $room_No612 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='13:00-14:00') {
                  $sub_code613 = $row['sub_code'];
                 // $teacher_id613 = $row['semester'];
                  $room_No613 = 'Room-'.$row['room_no'];
                }

                elseif ($row['ctime']=='14:00-15:00') {
                  $sub_code614 = $row['sub_code'];
                  //$teacher_id614 = $row['semester'];
                  $room_No614 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='15:00-16:00') {
                  $sub_code615 = $row['sub_code'];
                  //$teacher_id615 = $row['semester'];
                  $room_No615 = 'Room-'.$row['room_no'];
                }
                elseif ($row['ctime']=='16:00-17:00') {
                  $sub_code616 = $row['sub_code'];
                  //$teacher_id616 = $row['semester'];
                  $room_No616 = 'Room-'.$row['room_no'];
                }
              }
            ?>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code608."<br> ".$teacher_id608."<br> ".$room_No608; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code609."<br> ".$teacher_id609."<br> ".$room_No609; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code610."<br> ".$teacher_id610."<br> ".$room_No610; ?></th>
			  
			   <?php if ($lab_608=='l') {?>	
			   <th  bgcolor="#909497"scope="col"><?php // echo "<h5 align='center'"."<br>".$sub_code208."<br> ".$teacher_id208."<br> ".$room_No208; ?></th>
              <th  bgcolor="#909497"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code612."<br> ".$teacher_id612."<br> ".$room_No612; ?></th>
              <th bgcolor="#909497" scope="col"><?php //echo "<h5 align='center'"."<br>".$sub_code210."<br> ".$teacher_id210."<br> ".$room_No210; ?></th>  <?php }   
			   
			   else{ ?>   
			    <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code611."<br> ".$teacher_id611."<br> ".$room_No611; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code612."<br> ".$teacher_id612."<br> ".$room_No612; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code613."<br> ".$teacher_id613."<br> ".$room_No613; ?></th> <?php }   ?>
			  
			  
			  
			  
            
			  
			  
			  
			  
			  
			  
			  
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code614."<br> ".$teacher_id614."<br> ".$room_No614; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code615."<br> ".$teacher_id615."<br> ".$room_No615; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code616."<br> ".$teacher_id616."<br> ".$room_No616; ?></th>
            </tr>
              
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <p>
  <h2>Subject name</h2>
  

 <?php 
 

	$sql_sub_info="SELECT DISTINCT a.sub_code,a.teacher_id, b.sub_name from `iot_1st`a INNER JOIN sub b on a.sub_code=b.sub_code
	where a.teacher_id='$teacher_id'
	union 
	select DISTINCT a.sub_code,a.teacher_id, b.sub_name from `ict_1st`a INNER JOIN sub b on a.sub_code=b.sub_code
	where a.teacher_id='$teacher_id' ";
  
   $result_sub = mysqli_query($connect, $sql_sub_info);
     while ( $row = mysqli_fetch_array($result_sub)) 
	 {
      $s_code=$row['sub_code'];
      $s_name=$row['sub_name'];
	  
	  echo $s_code.":"."<b><font color='4590C8'> ".$s_name ."</font></b><br>";
 
	 }
 
 
 
 /*
 if ($teacher_id=='SH'){
	   $sub="ICTE 4113:Instructional Technology"."<br>"."ICTE 4111:Introduction to Education";
       echo $sub;
 }
 
  if ($teacher_id=='NN'){
	   $sub="IOT-4113:	Introduction to Programming"."<br>"."IOT-4114:	Introduction to Programming Lab"."<br>"."IOT-4111:	Introduction to Internet of Things";
       echo $sub;
 }
 
   if ($teacher_id=='MA'){
	   $sub="ICTE 4141:	Introduction to Computer and ICT"."<br>"."ICTE 4142:	Introduction to Computer and ICT lab";
       echo $sub;
 }
 
  if ($teacher_id=='MR'){
	   $sub="PHY-4101:	Physics for IoT"."<br>"." PHY-4102:	Physics for IoT Lab";
       echo $sub;
 }
 
   if ($teacher_id=='SG'){
	   $sub="HUM-4103: Communicative English Language "."<br>"."HUM-4104:	Communicative English Language Lab";
       echo $sub;
 }
    if ($teacher_id=='ZK'){
	   $sub="HUM-4103: Communicative English Language "."<br>"."HUM-4104:	Communicative English Language Lab";
       echo $sub;
 }
 
   if ($teacher_id=='SNK'){
	   $sub="HUM-4101:	History of the Emergence of  Independent Bangladesh";
       echo $sub;
 }
    if ($teacher_id=='RAH'){
	   $sub="MATH-4101:	Mathematics-I (Linear Algebra and Calculus)";
       echo $sub;
 }*/
 ?>
</p>


</body>
</html>