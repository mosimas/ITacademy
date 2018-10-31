<?php
require "config.php";
session_start();


//error_reporting(0);
    header("Content-type: application/json");
$response=array();

$_SESSION["valID"];
$ID_No = $_SESSION["valID"];
$course=$_POST['course'];
$course_code=$_POST['course_code'];
$EnrolNO = '';
$subSize=sizeof($course);
$subjects='';

for ($x = 0; $x < $subSize; $x++)
{
	$subjects.=$course[$x].',';
}
$subjects=substr($subjects,0,-1);

 //array_push($response,array($subjects),array($course_code));
   // echo json_encode($response);



$sql = "SELECT Enrol_No FROM enrol";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {

	while ( $row = mysqli_fetch_array($result) ) {
		$temp = explode( "R", $row[0] );
	}

	$temp[ 1 ] += 1;
	$num = 123;
	$str_length = 4;

	// hardcoded left padding if number < $str_length
	$EnrolNO = substr( "0000{$temp[1]}", -$str_length );

	// output: 0123

	//$custID="C".$temp[1];
	$EnrolNO = "R" . $EnrolNO;

} else {
	$EnrolNO = "R0001";
}


// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}


//$_SESSION['id']=$IdOrPassport;

 $EnrolNO;

$success='1';
	 // Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}


$sql1 = "SELECT ID_No FROM enrol where ID_No='$ID_No'";
	
$result1 = $conn->query( $sql1 );
//$_SESSION['id']=$IdOrPassport;
$rowdata = '';
if ( $result1->num_rows > 0 ) {
$error="ID already exist";
}
else {
			
	
			$sql = "INSERT INTO enrol
				(Enrol_No
				  ,ID_No
				  ,Course_Code
				  ,Subjects)
				 VALUES
					   ('$EnrolNO'
					   ,'$ID_No'
					   ,'$course_code'
					   ,'$subjects')
				 ";

            if (mysqli_query($conn, $sql)) {
                $error="Course registered successfully (You will be now redirected to the home page)";
				$success='2';
				session_unset();
            } else {
               // $error= "Error: " . $sql . "" . mysqli_error($conn);
               $error="Something went wrong contact administrator";
				$success='1';
            }	
}
array_push($response,array($success));
array_push($response,array($error));
    echo json_encode($response);

$conn->close();

?>
