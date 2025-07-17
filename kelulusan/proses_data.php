<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['nim'],$_POST['nama'],$_POST['prodi'],$_POST['fakultas'],$_POST['tahunmasuk'],$_POST['tahunlulus'],$_POST['status']);
	header('location:tampil_data.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['nim'],$_POST['nama'],$_POST['prodi'],$_POST['fakultas'],$_POST['tahunmasuk'],$_POST['tahunlulus'],$_POST['status']);
	header('location:tampil_data.php');
}
elseif($action=="delete")
{
	$nim = $_GET['id'];
	$koneksi->delete_data($nim);
	header('location:tampil_data.php');
}
?>