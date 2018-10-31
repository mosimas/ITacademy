<?php
require "config.php";
session_start();


//error_reporting(0);
// header("Content-type: application/json");
$response = array();


$sql = "SELECT Enrol_No FROM enrol";
$result = $conn->query( $sql );

if ( $result->num_rows > 0 ) {

	while ( $row = $result->fetch_assoc() ) {
		$temp = explode( "R", $row[ 'Enrol_No' ] );
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

$sql = "select Subject_Name from subjects where Course_Code= 'CO-A+';";
//$sql ="select * from courses ";
$result = $conn->query( $sql );

echo $result;


$conn->close();

?>