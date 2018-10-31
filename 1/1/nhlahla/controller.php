<?php
include( 'config.php' );
header( "Content-type:application/json" );
$method = $_SERVER[ 'REQUEST_METHOD' ];

if ( $method == 'GET' ) {
	$get_function = $_GET[ 'function' ];
	if ( $get_function == 'allContact' ) {
		$sql = 'select EmpID,Name,Surname from employees';
		try {
			$db = new db();
			$db = $db->connect();
			$stmt = $db->query( $sql );
			$contact = $stmt->fetchAll( PDO::FETCH_OBJ );
			$db = null;
			$stri = json_encode( $contact );
			echo $stri;




		} catch ( PDOException $e ) {
			echo '{"error": {"text": "' . $e->getMessage() . '"}}';
		}
	}
	if ( $get_function == 'oneContact' ) {
		$ID = $_GET[ 'ID' ];
		$sql = "select * from employees where EmpID='$ID'";
		try {
			$db = new db();
			$db = $db->connect();
			$stmt = $db->query( $sql );
			$contact = $stmt->fetchAll( PDO::FETCH_OBJ );
			$db = null;
			$stri = json_encode( $contact );
			echo $stri;




		} catch ( PDOException $e ) {
			echo '{"error": {"text": "' . $e->getMessage() . '"}}';
		}
	}


} else if ( $method == 'POST' ) {
	$get_function=$_GET['function'];

if ( $get_function == 'createContact' ) {
	$EmpID = $_POST[ 'EmpID' ];
	$Name = $_POST[ 'Name' ];
	$Surname = $_POST[ 'Surname' ];
	$Gender = $_POST[ 'Gender' ];
	$Phone = $_POST[ 'Phone_No' ];
	$Email = $_POST[ 'Email' ];

	$sql = "INSERT INTO employees (EmpID, Name, Surname, Gender, Phone_No, Email)
    VALUES ('$EmpID', '$Name', '$Surname', '$Gender', '$Phone', '$Email')";

	try {
		$db = new db();
		$db = $db->connect();
		$stmt = $db->query( $sql );
		$db = null;

		echo '{"sever_response" : [{"message":"Contacts was added successfully"},{"status" :"200"}]}';



	} catch ( PDOException $e ) {
		echo '{"error": {"text": "' . $e->getMessage() . '"}}';
		http_response_code( 500 );
	}

}

	if ( $get_function == 'updateContact' ) {

		$EmpID = $_POST[ 'EmpID' ];
		$Name = $_POST[ 'Name' ];
		$Surname = $_POST[ 'Surname' ];
		$Gender = $_POST[ 'Gender' ];
		$Phone = $_POST[ 'Phone_No' ];
		$Email = $_POST[ 'Email' ];

		$sql = "UPDATE employees SET Name = '$Name',Surname ='$Surname',Gender='$Gender',Phone_No='$Phone',Email='$Email' where EmpID = '$EmpID'";

		try {
			$db = new db();
			$db = $db->connect();
			$stmt = $db->query( $sql );
			$db = null;

			echo '{"sever_response" : [{"message":"Contacts was updated successfully"},{"status" :"200"}]}';



		} catch ( PDOException $e ) {
			echo '{"error": {"text": "' . $e->getMessage() . '"}}';
			http_response_code( 500 );
		}

	}
}

?>