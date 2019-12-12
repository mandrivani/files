<?php
if (!isset($_SESSION)){session_start();}
if(isset($_SESSION['user'])){
	include "media.php";
}else{
	include "login.php";
}
?>