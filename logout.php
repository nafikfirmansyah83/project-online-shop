<?php
session_start();
if(isset($_SESSION['email'])) 
{
	session_destroy();
	?>
	<meta http-equiv="refresh" content="0; url=./login.php"/>
	<?php
} 
else 
{
	?>
	<meta http-equiv="refresh" content="0; url=./login.php"/>
	<center><h2>Gagal Logout</h2>Silahkan login terlebih dahulu<br/><br/>Kamu akan dialihkan ke halaman login</center>
	<?php
}
?>