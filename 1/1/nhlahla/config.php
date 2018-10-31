<?php
class db {
	private $dbhost = '192.168.176.12';
	private $dbuser = 'root';
	private $dbpass = '';
	private $dbname = 'britehouse';


	public function fixrn( $json ) {
		$json = preg_replace( "!\r?\n!", "", $json );

		return $json;
	}
	public function fixrn2( $json ) {
		$json = preg_replace( "!\r?\n?\\!", "", $json );

		return $json;
	}

	public
	function connect() {
		$mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname;";
		$dbConnection = new PDO( $mysql_connect_str, $this->dbuser, $this->dbpass );
		$dbConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		return $dbConnection;

	}

}
/*// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
} else {
	echo "Connected successfully";
}*/
?>