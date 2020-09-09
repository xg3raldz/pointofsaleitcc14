<?php
$database	= 'epiz_26569798_employee';
$username	= 'epiz_26569798';
$host		= 'sql308.epizy.com';
$password	= 'yx4wyVdfj3KmSz';
$msg 		= '';


ini_set('display_errors',1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | E_DEPRECATED);

$db = mysqli_connect($host,$username,$password,$database);


if($db == false){
	die("Connection failed: ".$mysql_connect_error());

}

if(!isset($_SESSION)){
	session_start();	
}

if (isset($_POST['logout'])){
	$user = $_SESSION['username'];
	$insert	= "INSERT INTO logs (username,purpose) VALUES('$user','User $user logout')";
 	$logs = mysqli_query($db,$insert);
	session_destroy();
	unset($_SESSION['username']);
	header('location: ../index.php');
}


?>