<?php 
session_start();

include ('connect.php');//ini koneksi pada db

$user = $_POST["user"];//koneksi dg login sbg username
$pass = $_POST["password"];//koneksi dg login sbg pw


if (empty($user)) {
	$_SESSION['info'] = 'Username dan Password tidak boleh kosong';
	header('Location: ../login');
}elseif (empty($pass)) {
	$_SESSION['info'] = 'Username dan Password tidak boleh kosong';
	header('Location: ../login');
}else{


$sql = mysqli_query($konek,"SELECT * FROM tb_guru WHERE nama_guru LIKE '$user' AND niy LIKE '$pass'");//diambil dari $ yang ada di file koneksi.php
$row = mysqli_fetch_assoc($sql);
// foreach ($row as $key) {
// 	$userDb = $key["user"];
// 	$passDb = $key["password"];

if ($row['nama_guru'] === $user && $row['niy'] === $pass) {
	$_SESSION['login'] = true;
	header("Location: ../panel_admin");
}else {
	header("Location: ../login");
}
// echo $row['user'];


}

 ?>