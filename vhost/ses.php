<?php
echo"";
if(!isset($_SESSION)){session_start();}
if(isset($_GET['id'])){
	if($_GET['id']=='1'){
		$_SESSION['e']=$_POST['email'];
		$_SESSION['d']=$_POST['domain'];
		$_SESSION['l']=$_POST['lokasi'];
	}else if ($_GET['id']=='2'){
		$_SESSION['vhost']=$_POST['vhost'];
		$_SESSION['hosts']=$_POST['hosts'];
	}
}
?>