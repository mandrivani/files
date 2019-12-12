<?php
if (!isset($_SESSION)){session_start();}
if(!isset($_SESSION['user'])){
	header ('location:login.php');
	die();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>cPanel asal-asalan</title>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>
<style>
body{
	font-family: 'Oswald', sans-serif;
	text-shadow:0 1px 1px #fff;
}
input[type=text]{
	padding:5px;
	border:1px #ccc solid;
	box-shadow:0 0 3px 3px #eee inset;
	width:99%;
}
input[type=text]:focus{
	padding:5px;
	border:1px #0099FF solid;
	box-shadow:none;
}
.container{
	width:500px;
	margin:0 auto;
}
.box{
	padding:5px;
	width:420px;
	display:inline-block;
	float:left;
	border:1px #ccc solid;
	border-radius:10px;
	background: #ededed; /* Old browsers */
	background: -moz-linear-gradient(top,  #ededed 0%, #f6f6f6 53%, #ffffff 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ededed), color-stop(53%,#f6f6f6), color-stop(100%,#ffffff)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #ededed 0%,#f6f6f6 53%,#ffffff 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #ededed 0%,#f6f6f6 53%,#ffffff 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #ededed 0%,#f6f6f6 53%,#ffffff 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #ededed 0%,#f6f6f6 53%,#ffffff 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ededed', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */

}
.title-box{
	font-size:24px;
	color:#333;
	width:100%;
	border-bottom:3px #999 solid;
	margin-bottom:5px;
}
</style>

<?php
if(!isset($_SESSION)){session_start();}
echo"

";

echo"
<div class='container'>

<div class='box'>
<div class='title-box'>Tambah domain<a href='logout.php' style='float:right'>Logout</a></div>
<form >

	<table>
		<tr>
			<td width=150>Email</td>
			<td width=250><input type='text' name='email' id='email' placeholder='isi email disini'></td>
		</tr>
		<tr>
			<td>Domain</td>
			<td><input type='text' name='domain' id='domain' placeholder='isi domain disini'></td>
		</tr>
		<tr>
			<td>Lokasi Folder</td>
			<td><input type='text' name='lokasi' id='lokasi' placeholder='isi lokasi folder disini'></td>
		</tr>
		<tr>
			<td></td>
			<td><input type='button' id='btn1' value='Submit'><td>
		</tr>
	</table>
	</form>
	
	<div id='apply'></div>
</div>
<div class='noty'></div>
</div>
";

// JavaScript Document
?>
<script src="jquery211.min.js" type="text/javascript"></script>
<script>
$(function(){
	
	
	
	$('#btn1').click(function(){

		var email=$('#email').val();
		var domain=$('#domain').val();
		var lokasi=$('#lokasi').val();
		
		if (email == null | email==""){
			$('#noty').html("Nama masih kosong").fadeIn(1000);
		}else if (domain == null | domain==""){
			$('#noty').html("Domain masih kosong").fadeIn(1000);
		}else if (lokasi == null | lokasi==""){
			$('#noty').html("Lokasi folder masih kosong").fadeIn(1000);	
		}else{
			$.ajax({
				type: "POST",
				url: "ses.php?id=1",
				data: { email:email,domain:domain,lokasi:lokasi}
			}).done(function( data ) {
		
				// Now the output from PHP is set to 'data'.
				// Check if the 'data' contains 'OK' or 'NG'
				if (data.indexOf("") >= 0){
					$('#apply').load('apply.php');
					// you can do something here
					
				}
			});
		}
	});
	
});
</script>
</body>
</html>