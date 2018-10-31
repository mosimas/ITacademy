<?php
error_reporting(0);
require("config.php");
header("Content-type:application/json");
$course_code=$_GET['course'];
//$course_code="CO-BSS";
$sql ="select * from subjects where course_code='$course_code';";
$result = mysqli_query($conn,$sql);
 $response=array();
 while($row=mysqli_fetch_array($result))
 {
	 array_push($response,array("subject_code"=>$row[0],"subject_name"=>fixrn($row[1]),"Exam_no"=>$row[2],"cc"=>$row[3]));
 }

echo json_encode($response);
mysqli_close($conn);
?>
