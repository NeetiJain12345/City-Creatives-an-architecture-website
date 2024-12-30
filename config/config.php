<?php
$dbhost='localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'skit_db';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
	echo 'Error!';
}

?>