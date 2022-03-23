<?php

$gradeId = $_POST['gradeId'];
$sub_query = "SELECT * FROM tbl_student WHERE student_grade_id = '".$row["grade_id"]."'";
$statement = $connect->prepare($sub_query);
$statement->execute();
$student_result = $statement->fetchAll();
$htmlForStudent = '';
foreach($student_result as $student)
{
    $htmlForStudent .= '<tr>';
    $htmlForStudent .= '<td>'.<?php echo $student["student_roll_number"]; ?>.'</td>'.
    $htmlForStudent .= '<td>'
    <?php echo $student["student_name"]; ?>
    $htmlForStudent .= '<input type="hidden" name="student_id[]" value="'.<?php echo $student["student_id"]; ?>.'" />';
    $htmlForStudent .= '</td>';
    $htmlForStudent .= '<td>';
    $htmlForStudent .= '<input type="radio" name="attendance_status'.<?php echo $student["student_id"]; ?>.'" checked value="Present" />
    </td>';
    $htmlForStudent .= '<td>'
    $htmlForStudent .= '<input type="radio" name="attendance_status'.<?php echo $student["student_id"]; ?>.'."  value="Absent" />
    </td>
    </tr>';
}

mysqli_close($conn);
echo "ANWAR";