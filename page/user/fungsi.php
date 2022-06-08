<?php
require_once '../../config/koneksi.php';

if($_GET['act'] == 'tambah'){
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama','$email','$password','$level')") or die(mysqli_error());
	header("location:../../user.html");


}elseif($_GET['act'] == 'edit'){
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	mysqli_query($koneksi, "UPDATE user SET nama = '$nama', email = '$email', password = '$password', level = '$level' WHERE id_user = '$id_user'") or die(mysqli_error());
	header("location:../../user.html");


}elseif($_GET['act'] == 'hapus'){
	$id_kelas = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas = '$id_kelas'") or die(mysqli_error());
	header("location:../../kelas.html");

	
}
?>