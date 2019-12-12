<?php
if(!isset($_SESSION)){session_start();}
echo"";
$email=$_SESSION['e'];
$dom=$_SESSION['d'];
$lok=$_SESSION['l'];
$desired_line = 3;
include "readfile.php";
if (!file_exists($t.$lok)) {
    mkdir($t.$lok, 0777, true);
}

$hs="
127.0.0.1       ".$dom;
$path=$t.$lok;
$teks=
'<VirtualHost *:80>
    ServerAdmin '.$email.'
    DocumentRoot "'.$path.'"
    ServerName '.$dom.'
    ServerAlias www.'.$dom.'
    <Directory "'.$path.'">
        Options Indexes FollowSymLinks Includes ExecCGI
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
';
$teks .= "\n"; 


echo"
<form >

<textarea name='vhost' id='vhost'rows='10' hidden> $teks</textarea>
<textarea name='hosts' id='hosts' rows='10' hidden> $hs</textarea>
<input type='button' id='btn2' value='Apply'>
</form>
<div id='edit'></div>
";
?>
<script src="jquery211.min.js" type="text/javascript"></script>
<script>
$(function(){
	
	
	
	$('#btn2').click(function(){
		
		var vhost=$('#vhost').val();
		var hosts=$('#hosts').val();

		
		
			$.ajax({
				type: "POST",
				url: "ses.php?id=2",
				data: { vhost:vhost,hosts:hosts}
			}).done(function( data ) {
		
				// Now the output from PHP is set to 'data'.
				// Check if the 'data' contains 'OK' or 'NG'
				if (data.indexOf("") >= 0){
		
					// you can do something here
					$('#apply').load('edit.php');
					
				}
			});

	});
	
});
</script>