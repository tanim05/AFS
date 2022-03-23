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
  <title>Routine- Room<?php //echo $room_no; ?></title>
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
  
  
  $room_no="2001";
    if (isset($_POST["btn_r"])){
		   $room_no = $_POST["room"];
		   echo  " <b><font color='3583B0'> "."<h3 align='center'>"."Routine For: Room No-".$room_no."</h3>"."</font> </b> " ;
		  // echo $room_no;
		}
     else {echo  " <b><font color='3583B0'> "."<h3 align='center'>"."Routine For: Room No-".$room_no."</h3>"."</font> </b> " ;}
  
  
   if (isset($_POST["btn_p"])){
		$program = $_POST["program"];
		//if($program=='iot_1st')
			//{
				
				header('location: ./student_admin.php?p='.$program);
				
			//}
			
		/*elseif($program=='ict_1st')
			{
				$p = $_POST["program"];
				header('location: ./student_ict_admin.php?p='.$program);
				
			}	*/
		
	}
  
  
  
     if (isset($_POST["btn_t"])){
		$t = $_POST["teacher"];
		header('location:teacher_v.php?teac='.$t );
	
	  }
 
  //$Semester="iot_1st";
  // $room_no="202";
   $semester11="iot_1st";
  $semester12="iot_2nd";
  $semester21="ict_1st";
  $semester22="ict_2nd";
  //include 'dbconfig.php';

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "routine";
$connect = mysqli_connect($hostname, $username, $password, $dbname); 
mysqli_set_charset($connect, 'utf8');
if(!$connect)
{ 
  die('Could not connect: ' . mysql_error()); 
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
  <form  action=""  method="POST">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">      
         
		<label >Room No:</label>

					
					
					
					 <select name="room" id="room">  
                                <option>--- Select Room ---</option>
                                <?php
 
                        $query_room = "SELECT room_no FROM room ";
                        $room_result = mysqli_query($connect, $query_room);
                                while ($result = mysqli_fetch_assoc($room_result)) {
                                    ?>
                                    <option value="<?php echo $result['room_no']; ?>"><?php echo $result['room_no']; ?></option>
                                <?php } ?>
                    </select>			
				    <input type="submit" name="btn_r" value="Submit" />			        		
      </div>

	  
	        <div class="col-sm-4">         
		        <label >Program:</label>				
							<select name="program" id="program">
							  <option>--- Select program---</option>
							  <option value="IOT_1st">IOT_1st_semester</option>
                              <option value="IOT_2nd">IOT_2nd_semester</option>
							  <option value="ICT_1st">ICTE_1st_semester</option>
                              <option value="ICT_2nd">ICTE_2nd_semester</option>
							</select>
					
			
				    <input type="submit" name="btn_p" value="Submit" />			
					        		
			</div>
			
		
	  
	  
	  
	  
	  	    <div class="col-sm-4">         
		        <label >Teacher:</label>				
							<select name="teacher" id="teacher">
							  <option>--- Select teacher---</option>
							  <option value="MA">Munira Akter Lata</option>
							  <option value="NN">Nurjahan Nipa</option>
							  <option value="MMR">Mohammad Mamun Or Rashid</option>
							  <option value="SNK">Dr. Shamsun Naher Khanom</option>
							  <option value="RAH">Dr.Rokhsan-Ara-Hemel</option>
							  <option value="ZK">Zurana Aziz</option>
							  <option value="MR">Dr.Maksudur Rahman </option>
							  <option value="SG">Sumona Gupta </option>
                              <option value="AZ">Md. Ashrafuzzaman</option>
                              <option value="MAK">Dr. Md. Aktaruzzaman</option>
							  <option value="HR">Habibir Rahman</option>
							  <option value="SA">Dr Sabbir Alam</option>
							  <option value="SR">Dr. Md. Sazzadur Rahman</option>
							  <option value="ZN">Syeda Zakia Nayem</option>
							  <option value="FI">Farhana Islam</option>
							  <option value="FA">Farzana Akter</option>
							  <option value="KA">Dr. Md. Khorshed Alam </option>
                              
                              
							</select>
							
					
			
				    <input type="submit" name="btn_t" value="Submit" />			
					        		
			</div>
	    
	  
	</div>
	
	</div>
	    <table align='right'>
		<tr>
		
				 
				 <!--<td align='center'>
						<h5 align='left'><a href = "print.php">Download</a></h5>
				 </td>-->
				 
				<!-- <td align='center'>
						<h5 align='left'><a href = "teacher.php">Back</a></h5>
				 </td>-->
			
				<td align="right">
					<h5 align='right'><a   href = "../login.php">Logout</a></h5>
				</td>
		</tr>
	  </table>
	  
</form>

  <div class="row">
    <div class="col-sm-12">
      <div class="table">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Week Days/Time</th>
              <?php $t8 = "8:00-9:00"; ?>
              <th scope="col"><?php echo "<h6 align='center'"."<br>".$t8; ?></th>
              <?php $t9 = "9:00-10:00"; ?>
              <th scope="col"><?php echo "<h6 align='center'"."<br>".$t9; ?></th>
              <?php $t10 = "10:00-11:00"; ?>
              <th scope="col"><?php echo "<h6 align='center'"."<br>".$t10; ?></th>
              <?php $t11 = "11:00-12:00"; ?>
              <th scope="col"><?php echo "<h6 align='center'"."<br>".$t11; ?></th>
              <?php $t12 = "12:00-13:00"; 
              if ($t12!="") { ?>
                <th scope="col"><?php echo "<h6 align='center'"."<br>".$t12; ?></th><?php
              }
              ?>
              <?php $t13 = "13:00-14:00"; ?>
              <th scope="col"><?php echo "<h6 align='center'"."<br>".$t13; ?></th>
              <?php $t14 = "14:00-15:00"; ?>
              <th scope="col"><?php echo "<h6 align='center'"."<br>".$t14; ?></th>
              <?php $t15 = "15:00-16:00"; ?>
              <th scope="col"><?php echo "<h6 align='center'"."<br>".$t15; ?></th>
              <?php $t16 = "16:00-17:00"; ?>
              <th scope="col"><?php echo "<h6 align='center'"."<br>".$t16; ?></th>
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

/*$query = "SELECT id,sub_code,teacher_id,'iot_1st' as semester ,room_no,day,ctime,lab FROM $semester11 where day ='Satday'and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'iot_2nd' as semester ,room_no,day,ctime,lab FROM $semester12 
where day ='Satday'and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_1st' as semester ,room_no,day,ctime,lab FROM $semester21
where day ='Satday'and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_2nd' as semester ,room_no,day,ctime ,lab FROM $semester21 
where day ='Satday'and room_no= '$room_no'";
*/
$query="SELECT id,sub_code,teacher_id,'iot_1st' as semester ,room_no,day,ctime,lab FROM iot_1st where day ='Satday'and room_no='$room_no'
union ALL
SELECT id,sub_code,teacher_id,'iot_2nd' as semester ,room_no,day,ctime,lab FROM iot_2nd

where day ='Satday'and room_no='$room_no' union ALL
SELECT id,sub_code,teacher_id,'ict_1st' as semester ,room_no,day,ctime,lab FROM ict_1st
where day ='Satday'and room_no='$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_2nd' as semester ,room_no,day,ctime ,lab FROM ict_2nd
where day ='Satday'and room_no='$room_no'";
$result1 = mysqli_query($connect, $query);
    
   
       while ( $row = mysqli_fetch_array($result1))
        {
            if ($row['ctime']=='8:00-9:00') {
              
              $sub_code108 = $row['sub_code'];
              $teacher_id108 = $row['teacher_id'];
             // $room_No108 = $row['semester'];

             }
            elseif ($row['ctime']=='9:00-10:00') {
              $sub_code109 = $row['sub_code'];
              $teacher_id109 = $row['teacher_id'];
             // $room_No109 = $row['semester'];
            }

            elseif ($row['ctime']=='10:00-11:00') {
              $sub_code110 = $row['sub_code'];
              $teacher_id110 = $row['teacher_id'];
             // $room_No110 = $row['semester'];
            }
            elseif ($row['ctime']=='11:00-12:00') {
				
              $sub_code111 = $row['sub_code'];
              $teacher_id111 = $row['teacher_id'];
             // $room_No111 = $row['semester'];
            }
			
			
            elseif ($row['ctime']=='12:00-13:00') {
              $sub_code112 = $row['sub_code'];
              $teacher_id112 = $row['teacher_id'];
              //$room_No112 = $row['semester'];
            }
            elseif ($row['ctime']=='13:00-14:00') {
              $sub_code113 = $row['sub_code'];
              $teacher_id113 = $row['teacher_id'];
             // $room_No113 = $row['semester'];
            }
			
			/*   elseif ($row['ctime']=='14:00-15:00' && $row['lab']=='l') {
				$lab_110='l';
              $sub_code114 = $row['sub_code'];
              $teacher_id114 = $row['teacher_id'];
             // $room_No114 = 'Room-'.$row['room_no'];
            }
			elseif ($row['ctime']=='14:00-15:00' && $row['lab']!='l') {
				$lab_110='c';
              $sub_code114 = $row['sub_code'];
             $teacher_id114 = $row['teacher_id'];
             // $room_No114 = 'Room-'.$row['room_no'];
            }
			*/
            
            
               elseif ($row['ctime']=='14:00-15:00') {
				//$lab_110='l';
              $sub_code114 = $row['sub_code'];
              $teacher_id114 = $row['teacher_id'];
             // $room_No114 = 'Room-'.$row['room_no'];
            }
			
	
            elseif ($row['ctime']=='15:00-16:00') {
              $sub_code115 = $row['sub_code'];
              $teacher_id115 = $row['teacher_id'];
             // $room_No115 = $row['semester'];
            }
            elseif ($row['ctime']=='16:00-17:00') {
              $sub_code116 = $row['sub_code'];
              $teacher_id116 = $row['teacher_id'];
             // $room_No116 = $row['semester'];
            }

          }

          ?>
              <th bgcolor="#FAF1F1"scope="col"><?php echo"<h5 align='center'"."<br>". $sub_code108."<br> ".$teacher_id108."<br> ".$room_No108; ?></th>
              <th bgcolor="#FAF1F1" scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code109."<br> ".$teacher_id109."<br> ".$room_No109; ?></th>
              <th bgcolor="#FAF1F1" scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code110."<br> ".$teacher_id110."<br> ".$room_No110; ?></th>
			  
			  
			  	 
			  
			  
			   	 <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code111."<br> ".$teacher_id111."<br> ".$room_No111; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code112."<br> ".$teacher_id112."<br> ".$room_No112; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code113."<br> ".$teacher_id113."<br> ".$room_No113; ?></th>
			  
			 <th  bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code114."<br> ".$teacher_id114."<br> ".$room_No114; ?></th>
					<th  bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code115."<br> ".$teacher_id115."<br> ".$room_No115; ?></th>
					<th bgcolor="#FAF1F1" scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code116."<br> ".$teacher_id116."<br> ".$room_No116; ?></th
             
             
             
             
              
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
					  
$query = "SELECT id,sub_code,teacher_id,'iot_1st' as semester ,room_no,day,ctime,lab FROM iot_1st where day ='sunday'and room_no= '$room_no'union all 
SELECT id,sub_code,teacher_id,'iot_2nd' as semester ,room_no,day,ctime,lab FROM iot_2nd 
where day ='sunday'and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_1st' as semester ,room_no,day,ctime,lab FROM ict_1st
where day ='sunday'and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_2nd' as semester ,room_no,day,ctime,lab FROM ict_2nd
where day ='sunday'and room_no= '$room_no'";
$result1 = mysqli_query($connect, $query);
    
              while ( $row = mysqli_fetch_array($result1))
              {
                if ($row['ctime']=='8:00-9:00') {
                  $sub_code208 = $row['sub_code'];
                 $teacher_id208 = $row['teacher_id'];
                 // $room_No208 = $row['semester'];

                 }
                elseif ($row['ctime']=='9:00-10:00') {
                  $sub_code209 = $row['sub_code'];
                  $teacher_id209 = $row['teacher_id'];
                 // $room_No209 = $row['semester'];
                }

                elseif ($row['ctime']=='10:00-11:00') {
                  $sub_code210 = $row['sub_code'];
                  $teacher_id210 = $row['teacher_id'];
                //  $room_No210 = $row['semester'];
                }
                elseif ($row['ctime']=='11:00-12:00') {
                  $sub_code211 = $row['sub_code'];
                  $teacher_id211 = $row['teacher_id'];
                 // $room_No211 = $row['semester'];
                }
                elseif ($row['ctime']=='12:00-13:00') {
                  $sub_code212 = $row['sub_code'];
                  $teacher_id212 = $row['teacher_id'];
                  //$room_No212 = $row['semester'];
                }
                elseif ($row['ctime']=='13:00-14:00') {
                  $sub_code213 = $row['sub_code'];
                  $teacher_id213 = $row['teacher_id'];
                 // $room_No213 = $row['semester'];
                }
                  elseif ($row['ctime']=='14:00-15:00') {
					
                  $sub_code214 = $row['sub_code'];
                  $teacher_id214 = $row['teacher_id'];
                //  $room_No214 = $row['semester'];
                }



               /* elseif ($row['ctime']=='14:00-15:00'&& $row['lab']=='l') {
					$lab_208='l';
                  $sub_code214 = $row['sub_code'];
                  $teacher_id214 = $row['teacher_id'];
                //  $room_No214 = $row['semester'];
                }
				  elseif ($row['ctime']=='14:00-15:00'&& $row['lab']!='l') {
					$lab_208='c';
                  $sub_code214 = $row['sub_code'];
                  $teacher_id214 = $row['teacher_id'];
                  //$room_No214 = $row['semester'];
                }*/
                elseif ($row['ctime']=='15:00-16:00') {
                  $sub_code215 = $row['sub_code'];
                  $teacher_id215 = $row['teacher_id'];
                  //$room_No215 = $row['semester'];
                }
                elseif ($row['ctime']=='16:00-17:00') {
                  $sub_code216 = $row['sub_code'];
                  $teacher_id216 = $row['teacher_id'];
                 // $room_No216 = $row['semester'];
                }
              }
            ?>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code208."<br> ".$teacher_id208."<br> ".$room_No208; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code209."<br> ".$teacher_id209."<br> ".$room_No209; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code210."<br> ".$teacher_id210."<br> ".$room_No210; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code211."<br> ".$teacher_id211."<br> ".$room_No211; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code212."<br> ".$teacher_id212."<br> ".$room_No212; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code213."<br> ".$teacher_id213."<br> ".$room_No213; ?></th>
	
			  
			  <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code214."<br> ".$teacher_id214."<br> ".$room_No214; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code215."<br> ".$teacher_id215."<br> ".$room_No215; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code216."<br> ".$teacher_id216."<br> ".$room_No216; ?></th>
			  
			  
			
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
               	      $lab_308='';

$query = "SELECT id,sub_code,teacher_id,'iot_1st' as semester ,room_no,day,ctime,lab FROM iot_1st where day ='Monday'and room_no= '$room_no'union all 
SELECT id,sub_code,teacher_id,'iot_2nd' as semester ,room_no,day,ctime,lab FROM iot_2nd
where day ='Monday'and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_1st' as semester ,room_no,day,ctime,lab FROM ict_1st
where day ='Monday'and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_2nd' as semester ,room_no,day,ctime,lab FROM ict_2nd
where day ='Monday'and room_no= '$room_no'";
$result1 = mysqli_query($connect, $query);
              while ( $row = mysqli_fetch_array($result1))
              {
                if ($row['ctime']=='8:00-9:00') {
                  $sub_code308 = $row['sub_code'];
                  $teacher_id308 = $row['teacher_id'];
                 // $room_No308 = $row['semester'];

                 }
                elseif ($row['ctime']=='9:00-10:00') {
                  $sub_code309 = $row['sub_code'];
                  $teacher_id309 = $row['teacher_id'];
                 // $room_No309 = $row['semester'];
                }

                elseif ($row['ctime']=='10:00-11:00') {
                  $sub_code310 = $row['sub_code'];
                  $teacher_id310 = $row['teacher_id'];
                 // $room_No310 = $row['semester'];
                }
                elseif ($row['ctime']=='11:00-12:00') {
                  $sub_code311 = $row['sub_code'];
                  $teacher_id311 = $row['teacher_id'];
                //  $room_No311 = $row['semester'];
                }
                elseif ($row['ctime']=='12:00-13:00') {
                  $sub_code312 = $row['sub_code'];
                  $teacher_id312 = $row['teacher_id'];
                 // $room_No312 = $row['semester'];
                }
                elseif ($row['ctime']=='13:00-14:00' ) {
                   
                    
                  $sub_code313 = $row['sub_code'];
                  $teacher_id313 = $row['teacher_id'];
                 // $room_No313 = $row['semester'];
                }
              

                elseif ($row['ctime']=='14:00-15:00' ) {
                  $sub_code314 = $row['sub_code'];
                  $teacher_id314 = $row['teacher_id'];
                 // $room_No314 = $row['semester'];
                }
                elseif ($row['ctime']=='15:00-16:00') {
                  $sub_code315 = $row['sub_code'];
                  $teacher_id315 = $row['teacher_id'];
                //  $room_No315 = $row['semester'];
                }
                elseif ($row['ctime']=='16:00-17:00') {
                  $sub_code316 = $row['sub_code'];
                  $teacher_id316 = $row['teacher_id'];
                 // $room_No316 = $row['semester'];
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

$query = "SELECT id,sub_code,teacher_id,'iot_1st' as semester ,room_no,day,ctime,lab FROM iot_1st where day ='Tuesday' and room_no= '$room_no'union all 
SELECT id,sub_code,teacher_id,'iot_2nd' as semester ,room_no,day,ctime,lab FROM iot_2nd
where day ='Tuesday' and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_1st' as semester ,room_no,day,ctime,lab FROM ict_1st
where day ='Tuesday' and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_2nd' as semester ,room_no,day,ctime,lab FROM ict_2nd
where day ='Tuesday' and room_no= '$room_no'";
$result1 = mysqli_query($connect, $query);
              while ( $row = mysqli_fetch_array($result1))
              {
                if ($row['ctime']=='8:00-9:00') {
                  $sub_code408 = $row['sub_code'];
                  $teacher_id408 = $row['teacher_id'];
                //  $room_No408 = $row['semester'];

                 }
                elseif ($row['ctime']=='9:00-10:00') {
                  $sub_code409 = $row['sub_code'];
                  $teacher_id409 = $row['teacher_id'];
                //  $room_No409 = $row['semester'];
                }

                elseif ($row['ctime']=='10:00-11:00') {
                  $sub_code410 = $row['sub_code'];
                  $teacher_id410 = $row['teacher_id'];
                 // $room_No410 = $row['semester'];
                }
                else if ($row['ctime']=='11:00-12:00') {
					//$lab_408='l';
                  $sub_code411 = $row['sub_code'];
                  $teacher_id411 = $row['teacher_id'];
                  
                 // $room_No411 = $row['semester'];
                }
			
                else if ($row['ctime']=='12:00-13:00') {
                  $sub_code412 = $row['sub_code'];
                  $teacher_id412 = $row['teacher_id'];
                 // $room_No412 = $row['semester'];
                }
                else if ($row['ctime']=='13:00-14:00') {
                  $sub_code413 = $row['sub_code'];
                  $teacher_id413 = $row['teacher_id'];
                 // $room_No413 = $row['semester'];
                }

                elseif ($row['ctime']=='14:00-15:00') {
                  $sub_code414 = $row['sub_code'];
                  $teacher_id414 = $row['teacher_id'];
                  //$room_No414 = $row['semester'];
                }
                elseif ($row['ctime']=='15:00-16:00') {
                  $sub_code415 = $row['sub_code'];
                  $teacher_id415 = $row['teacher_id'];
                //  $room_No415 = $row['semester'];
                }
                elseif ($row['ctime']=='16:00-17:00') {
                  $sub_code416 = $row['sub_code'];
                  $teacher_id416 = $row['teacher_id'];
                 // $room_No416 = $row['semester'];
                }
              }
            ?>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code408."<br> ".$teacher_id408."<br> ".$room_No408; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code409."<br> ".$teacher_id409."<br> ".$room_No409; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code410."<br> ".$teacher_id410."<br> ".$room_No410; ?></th>
			  
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code411."<br> ".$teacher_id411."<br> ".$room_No411; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code412."<br> ".$teacher_id412."<br> ".$room_No412; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code413."<br> ".$teacher_id413."<br> ".$room_No413; ?></th>
              
              
			  
		
			  
			  

              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>"."<h5 align='center'"."<br>".$sub_code414."<br> ".$teacher_id414."<br> ".$room_No414; ?></th>
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
					  $lab_508=' ';
                    $lab_509=' ';

$query = "SELECT id,sub_code,teacher_id,'iot_1st' as semester ,room_no,day,ctime,lab FROM iot_1st where day ='Wednesday'and room_no= '$room_no'union all 
SELECT id,sub_code,teacher_id,'iot_2nd' as semester ,room_no,day,ctime,lab FROM iot_2nd
where day ='Wednesday'and room_no= '$room_no'
union all 
SELECT id,sub_code,teacher_id,'ict_1st' as semester ,room_no,day,ctime,lab FROM ict_1st
where day ='Wednesday'and room_no= '$room_no'
union all 
SELECT id,sub_code,teacher_id,'ict_2nd' as semester ,room_no,day,ctime,lab FROM ict_2nd
where day ='Wednesday'and room_no= '$room_no'";
$result1 = mysqli_query($connect, $query);
              while ( $row = mysqli_fetch_array($result1))
              {
                if ($row['ctime']=='8:00-9:00') {
                    
                  $sub_code508 = $row['sub_code'];
                  $teacher_id508 = $row['teacher_id'];
                 // $room_No508 = $row['semester'];

                 }
                 
               
                elseif ($row['ctime']=='9:00-10:00') {
                  $sub_code509 = $row['sub_code'];
                  $teacher_id509 = $row['teacher_id'];
                  //$room_No509 = $row['semester'];
                }

                elseif ($row['ctime']=='10:00-11:00') {
                  $sub_code510 = $row['sub_code'];
                  $teacher_id510 = $row['teacher_id'];
                 // $room_No510 = $row['semester'];
                }
                elseif ($row['ctime']=='11:00-12:00') {
				
                  $sub_code511 = $row['sub_code'];
                  $teacher_id511 = $row['teacher_id'];
                  //$room_No511 = $row['semester'];
                }
			
                elseif ($row['ctime']=='12:00-13:00') {
                  $sub_code512 = $row['sub_code'];
                  $teacher_id512 = $row['teacher_id'];
                  //$room_No512 = $row['semester'];
                }
                elseif ($row['ctime']=='13:00-14:00') {
                  $sub_code513 = $row['sub_code'];
                  $teacher_id513 = $row['teacher_id'];
                  //$room_No513 = $row['semester'];
                }

                elseif ($row['ctime']=='14:00-15:00') {
                  $sub_code514 = $row['sub_code'];
                  $teacher_id514 = $row['teacher_id'];
                 // $room_No514 = $row['semester'];
                }
                elseif ($row['ctime']=='15:00-16:00') {
                  $sub_code515 = $row['sub_code'];
                  $teacher_id515 = $row['teacher_id'];
                  //$room_No515 = $row['semester'];
                }
                elseif ($row['ctime']=='16:00-17:00') {
                  $sub_code516 = $row['sub_code'];
                  $teacher_id516 = $row['teacher_id'];
                 // $room_No516 = $row['semester'];
                }
              }
            ?>
            
            
			  
			  <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code508."<br> ".$teacher_id508."<br> ".$room_No508; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code509."<br> ".$teacher_id509."<br> ".$room_No509; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code510."<br> ".$teacher_id510."<br> ".$room_No510;?></th>
              
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code511."<br> ".$teacher_id511."<br> ".$room_No511; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code512."<br> ".$teacher_id512."<br> ".$room_No512; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code513."<br> ".$teacher_id513."<br> ".$room_No513;?></th>
              
          
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

$query = "SELECT id,sub_code,teacher_id,'iot_1st' as semester ,room_no,day,ctime,lab FROM iot_1st where day ='Thrusday'and room_no= '$room_no'union all 
SELECT id,sub_code,teacher_id,'iot_2nd' as semester ,room_no,day,ctime,lab FROM iot_2nd
where day ='Thrusday'and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_1st' as semester ,room_no,day,ctime,lab FROM ict_1st
where day ='Thrusday'and room_no= '$room_no'
union ALL
SELECT id,sub_code,teacher_id,'ict_2nd' as semester ,room_no,day,ctime,lab FROM ict_2nd
where day ='Thrusday'and room_no= '$room_no'";
$result1 = mysqli_query($connect, $query);
              while ( $row = mysqli_fetch_array($result1))
              {
                if ($row['ctime']=='8:00-9:00') {
                  $sub_code608 = $row['sub_code'];
                  $teacher_id608 = $row['teacher_id'];
                 // $room_No608 = $row['semester'];

                 }
                elseif ($row['ctime']=='9:00-10:00') {
                  $sub_code609 = $row['sub_code'];
                  $teacher_id609 = $row['teacher_id'];
                 // $room_No609 = $row['semester'];
                }

                elseif ($row['ctime']=='10:00-11:00') {
                  $sub_code610 = $row['sub_code'];
                  $teacher_id610 = $row['teacher_id'];
                  //$room_No610 = $row['semester'];
                }
                elseif ($row['ctime']=='11:00-12:00') {
					$lab_608='l';
                  $sub_code611 = $row['sub_code'];
                  $teacher_id611 = $row['teacher_id'];
                 // $room_No611 = $row['semester'];
                }
				
			
                elseif ($row['ctime']=='12:00-13:00') {
                  $sub_code612 = $row['sub_code'];
                  $teacher_id612 = $row['teacher_id'];
                 // $room_No612 = $row['semester'];
                }
                elseif ($row['ctime']=='13:00-14:00') {
                  $sub_code613 = $row['sub_code'];
                  $teacher_id613 = $row['teacher_id'];
                 // $room_No613 = $row['semester'];
                }

                elseif ($row['ctime']=='14:00-15:00') {
                  $sub_code614 = $row['sub_code'];
                  $teacher_id614 = $row['teacher_id'];
                  //$room_No614 = $row['semester'];
                }
                elseif ($row['ctime']=='15:00-16:00') {
                  $sub_code615 = $row['sub_code'];
                  $teacher_id615 = $row['teacher_id'];
                //  $room_No615 = $row['semester'];
                }
                elseif ($row['ctime']=='16:00-17:00') {
                  $sub_code616 = $row['sub_code'];
                  $teacher_id616 = $row['teacher_id'];
                  //$room_No616 = $row['semester'];
                }
              }
            ?>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code608."<br> ".$teacher_id608."<br> ".$room_No608; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code609."<br> ".$teacher_id609."<br> ".$room_No609; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code610."<br> ".$teacher_id610."<br> ".$room_No610; ?></th>
			  
			  
			  <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code611."<br> ".$teacher_id611."<br> ".$room_No611; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code612."<br> ".$teacher_id612."<br> ".$room_No612; ?></th>
              <th bgcolor="#FAF1F1"scope="col"><?php echo "<h5 align='center'"."<br>".$sub_code613."<br> ".$teacher_id613."<br> ".$room_No613; ?></th> 
			  
		
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
  <h2>Subject Name</h2>
  

  
  
  
  
 <?php 
 
 
 	$sql_sub_info="SELECT DISTINCT a.sub_code,a.teacher_id, b.sub_name from `iot_1st`a INNER JOIN sub b on a.sub_code=b.sub_code
	where room_no= '$room_no'
	union
	SELECT DISTINCT a.sub_code,a.teacher_id, b.sub_name from `ict_1st`a INNER JOIN sub b on a.sub_code=b.sub_code
	where room_no= '$room_no'
    union
    SELECT DISTINCT a.sub_code,a.teacher_id, b.sub_name from `iot_2nd`a INNER JOIN sub b on a.sub_code=b.sub_code
	where room_no= '$room_no'
	union
	SELECT DISTINCT a.sub_code,a.teacher_id, b.sub_name from `ict_2nd`a INNER JOIN sub b on a.sub_code=b.sub_code
	where room_no= '$room_no' ";
	
    
    
  
   $result_sub = mysqli_query($connect, $sql_sub_info);
     while ( $row = mysqli_fetch_array($result_sub)) 
	 {
      $s_code=$row['sub_code'];
      $s_name=$row['sub_name'];
	  
	  echo $s_code.":"."<b><font color='4590C8'> ".$s_name ."</font></b><br>";
 
	 }
 
 
 
 
 
 ?>
</p>



<h2>Teacher Name</h2>
   <p>
   
   
      <?php  
  	$sql_teacher_info=" SELECT DISTINCT a.teacher_id, b.teacher_name from `iot_1st` a INNER JOIN teacher b on a.teacher_id=b.teacher_id
    where room_no= '$room_no'
	
    union
	SELECT DISTINCT a.teacher_id, b.teacher_name from `ict_1st` a INNER JOIN teacher b on a.teacher_id=b.teacher_id
    where room_no= '$room_no'
    union
    SELECT DISTINCT a.teacher_id, b.teacher_name from `iot_2nd` a INNER JOIN teacher b on a.teacher_id=b.teacher_id
    where room_no= '$room_no'
	
    union
	SELECT DISTINCT a.teacher_id, b.teacher_name from `ict_2nd` a INNER JOIN teacher b on a.teacher_id=b.teacher_id
    where room_no= '$room_no'
 
     ";
  
    $result_teach = mysqli_query($connect, $sql_teacher_info);
     while ( $row = mysqli_fetch_array($result_teach)) 
	 {
      $t_code=$row['teacher_id'];
      $t_name=$row['teacher_name'];
	  
	  echo $t_code.":" ."<b><font color='4590C8'> ".$t_name ."</font></b><br>";
 
	 }
  
  
  ?>
   
  
  </p>
</body>
</html>