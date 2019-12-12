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
input[type=password]{
	padding:5px;
	border:1px #ccc solid;
	box-shadow:0 0 3px 3px #eee inset;
	width:99%;
	margin-top:5px;
}
input[type=password]:focus{
	padding:5px;
	border:1px #0099FF solid;
	box-shadow:none;
}
.login{
	display:block;
	width:400px;
	height:50px;
	margin:0 auto;
	margin-top:100px;
}
.tbl{
	width:99%;
	height:50px;
	color:#333;
	cursor:pointer;
	padding:5px;
	margin-top:50px;
}
</style>

<div class="login">
<form action="aksi.php" method="post">
<input type="text" name="username" id="username" placeholder="username" />
<input type="password" name="pass" id="pass" placeholder="password" />
<center><input type="submit" value="login" class='tbl'/></center>
</form>
</div>