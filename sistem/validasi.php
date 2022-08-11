<?php 
session_start();

include ('connect.php');//ini koneksi pada db

$user = $_POST["user"];//koneksi dg login sbg username
$pass = $_POST["password"];//koneksi dg login sbg pw

$sql = mysqli_query($konek,"SELECT * FROM login WHERE user LIKE '$user' AND password LIKE '$pass'");//diambil dari $ yang ada di file koneksi.php
$row = mysqli_fetch_assoc($sql);
// foreach ($row as $key) {
// 	$userDb = $key["user"];
// 	$passDb = $key["password"];

if ($row['user'] == $user && $row['password'] == $pass) {
	$_session['login'] = true;
	header("Location: ../panel_admin");
}else {
	header("Location: ../login");
}
// echo $row['user'];




 ?>