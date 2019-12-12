<?php
if (!isset($_SESSION)){session_start();}
$user=$_POST['username'];
$pass=$_POST['pass'];
$desired_line = 1;
include "readfile.php";

if($user==$t){
	$desired_line = 2;
	include "readfile.php";
	if($pass==$t){
		$_SESSION['user']=$t;
		header ('location:index.php');
	}else{
		echo "password salah";
	}
}else{
	echo "username salah";
}

?>