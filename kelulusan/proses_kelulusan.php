<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];

if($action == "add")
{	
	$koneksi->tambah_kelulusan($_POST['idkelulusan'],$_POST['nim'],$_POST['tahunlulus'],$_POST['status'],$_POST['status']);
	header('location:tampil_kelulusan.php');
}

elseif($action=="delete")
{
	$idkelulusan = $_GET['no'];
	$koneksi->delete_kelulusan($idkelulusan);
	header('location:tampil_kelulusan.php');
}
?>