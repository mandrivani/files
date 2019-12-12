 <?php
 if(!isset($_SESSION)){session_start();}
 //echo $_SESSION['vhost'];
// set file to read
$filename = "C:/xampp/apache/conf/extra/httpd-vhosts.conf";
  
$newdata =$_SESSION['vhost'];

if ($newdata != '') {

// open file 
$fw = fopen($filename , 'ab') or die('Could not open file!');
// write to file
// added stripslashes to $newdata
$fb = fwrite($fw,stripslashes($newdata)) or die('Could not write 
to file');
// close file
fclose($fw);
}

// set file to read
$filename2 = "C:/Windows/System32/drivers/etc/hosts";
  
$newdata2 =$_SESSION['hosts'];

if ($newdata2 != '') {

// open file 
$fw2 = fopen($filename2 , 'ab') or die('Could not open file!');
// write to file
// added stripslashes to $newdata
$fb2 = fwrite($fw2,stripslashes($newdata2)) or die('Could not write 
to file');
// close file
fclose($fw2);
}


echo "Domain berhasil didaftarkan. Silahkan Restart apache pada server<br>Kemudian jangan lupa pada pengaturan DNS anda set ke IP : 202.77.125.147";

//header ('location:index.php');
?> 
<script src="jquery211.min.js" type="text/javascript"></script>
<script>
$('#email').val(null);
$('#domain').val(null);
$('#lokasi').val(null);
</script>