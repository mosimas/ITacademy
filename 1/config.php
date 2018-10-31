<?php
$DB_HOST = "localhost";
$DB_USER = "ikworyve_root";
$DB_PASSWORD = "Ikworx@2018";
$DB_DATABASE = "ikworyve_it_academy";
$conn = mysqli_connect( $DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE );

function fixrn($json)
{
	$json=preg_replace("!\r?\n!", "", $json);
	
	return $json;
}

/*// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
} else {
	echo "Connected successfully";
}*/
?>