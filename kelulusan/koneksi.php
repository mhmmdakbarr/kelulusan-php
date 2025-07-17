<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_crudoop";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_mahasiswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($nim,$nama,$prodi,$fakultas,$tahunmasuk,$tahunlulus,$status)
	{
		mysqli_query($this->koneksi,"insert into tb_mahasiswa values ('$nim','$nama','$prodi','$fakultas','$tahunmasuk','$tahunlulus','$status')");
	}

	function get_by_id($nim)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_mahasiswa where nim='$nim'");
		return $query->fetch_array();
	}
	function update_data($nama,$prodi,$fakultas,$tahunmasuk,$nim,$tahunlulus,$status)
	{
		$query = mysqli_query($this->koneksi,"update tb_mahasiswa set nama='$nama',prodi='$prodi',fakultas='$fakultas',tahunmasuk='$tahunmasuk',tahunlulus='$tahunlulus',status='$status'
		where nim='$nim'");
	}

	function delete_data($nim)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_mahasiswa where nim='$nim'");
	}

	function tampil_user()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_user");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_user($iduser,$nama,$username,$password)
	{
		mysqli_query($this->koneksi,"insert into tb_user values('$iduser','$nama','$username','$password')");
	}
	function get_by_id1($iduser)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_user where iduser='$iduser'");
		return $query->fetch_array();
	}
	function update_user($nama,$username,$password,$iduser)
	{
		$query = mysqli_query($this->koneksi,"update tb_user set nama='$nama',username='$username',password='$password' 
		where iduser='$iduser'");
	}

	function delete_user($iduser)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_user where iduser='$iduser'");
	}

	function tampil_kelulusan()
	{
		$data = mysqli_query($this->koneksi,"select * from tb_kelulusan");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	
	function tambah_kelulusan($idkelulusan,$nim,$tahunlulus)
	{
		mysqli_query($this->koneksi,"insert into tb_kelulusan values('$idkelulusan','$nim','$tahunlulus','$status')");
	}

	function get_by_id2($idkelulusan)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_kelulusan where idkelulusan='$idkelulusan'");
		return $query->fetch_array();
	}

	function delete_kelulusan($idkelulusan)
	{
		$query = mysqli_query($this->koneksi,"delete from tb_kelulusan where idkelulusan='$idkelulusan'");
	}
}
?>