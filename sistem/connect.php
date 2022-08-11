<?php 
$nama_server = "localhost";
$user_db = "root";
$pass_db = "";
$nama_db = "dbperpus";

$konek = mysqli_connect($nama_server,$user_db,$pass_db,$nama_db);

if (!$konek) {
	echo "Koneksi Gagal";
}

 ?>