<?php
$dbHost = 'localhost';
$dbName = 'tegarport';
$dbUsername = "root";
$dbPassword = "";
try {
	$dbConn = new PDO( "mysql:host={$dbHost};dbname={$dbName}", $dbUsername, $dbPassword );
	$dbConn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); //Setting Error Mode as Exception
} catch ( PDOException $e ) {
	echo "<script>location.reload();</script>";
}
?>