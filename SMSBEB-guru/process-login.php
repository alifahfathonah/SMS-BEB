<?php
include "../define.php";
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM tb_guru WHERE nip='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
echo "berhasil";

// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	$_SESSION['id'] = $data['id'];
	$_SESSION['nip'] = $data['nip'];
	$_SESSION['username'] = $data['username'];
	$_SESSION['level'] = 'guru';
	header("location:absensi/absen-mapel.php");
}else {
	header("location: index.php");
}
?>
