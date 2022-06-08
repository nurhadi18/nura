<?php
require_once '../../config/koneksi.php';

if($_GET['act'] == 'tambah'){
	$id_kelas = $_POST['id_kelas'];
	$nama_kelas = $_POST['nama_kelas'];
	$status = $_POST['status'];
	mysqli_query($koneksi, "INSERT INTO kelas VALUES('$id_kelas','$nama_kelas','$status')") or die(mysqli_error());
	header("location:../../kelas.html");


}elseif($_GET['act'] == 'edit'){
	$id_kelas = $_POST['id_kelas'];
	$nama_kelas = $_POST['nama_kelas'];
	$status = $_POST['status'];
	mysqli_query($koneksi, "UPDATE kelas SET nama_kelas = '$nama_kelas', status = '$status' WHERE id_kelas = '$id_kelas'") or die(mysqli_error());
	header("location:../../kelas.html");


}elseif($_GET['act'] == 'hapus'){
	$id_kelas = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas = '$id_kelas'") or die(mysqli_error());
	header("location:../../kelas.html");

	
}
?>