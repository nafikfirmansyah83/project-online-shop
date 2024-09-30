<?php
session_start();
if(isset($_SESSION['email'])) {
	echo '<script>window.location.replace("./sukses.php");</script>';
} else {
$email = "uas@gmail.com";
$password = "123123";
if(isset($_POST['email']) && isset($_POST['password'])) {
	if ($_POST['email'] == $email && $_POST['password'] == $password) {
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		echo '<meta http-equiv="refresh" content="0; url=./sukses.php"/>';
	} elseif ($_POST['email'] != $email && $_POST['password'] == $password) {
		echo "<center><h1>Gagal!, Email Salah</h1></center>";
		echo '<meta http-equiv="refresh" content="4; url=./login.php"/>';
	} elseif ($_POST['email'] == $email && $_POST['password'] != $password) {
		echo "<center><h1>Gagal!, Password Salah</hl></center>";
		echo '<meta http-equiv="refresh" content="4; url=./login.php"/>';
	} elseif ($_POST['email'] != $email && $_POST['password'] != $password) {
		echo "<center><h1>Gagal!, Email & Fassword Salah</h1></center>";
		echo '<meta http-equiv="refresh" content="4; url=./login.php"/>';
	}
} else {
	echo "<center><hl>Gagal!, jangan biarkan email & password kosong</h1></center>";
	echo '<meta http-equiv="refresh" content="4; url=./login.php"/>';
}
}
?>