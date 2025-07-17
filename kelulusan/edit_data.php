<?php 	
include('koneksi.php');
$db = new database();
$nim = $_GET['id'];
if(! is_null($nim))
{
	$data_mahasiswa = $db->get_by_id($nim);
}
else
{
	header('location:tampil_data.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="container mt-3">
  <h2>Update Data Mahasiswa</h2>
  <form method="post" action="proses_data.php?action=update">
    <div class="mb-3 mt-3">
      <label for="nim">NIM Mahasiswa</label>
      <input type="text" class="form-control" id="nim" placeholder="Enter NIM Mahasiswa" readonly name="nim" value="<?php echo $data_mahasiswa['nim']; ?>"/>
    </div>
    <div class="mb-3">
      <label for="nama">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter Nama Mahasiswa" name="nama" value="<?php echo $data_mahasiswa['nama']; ?>"/>
    </div>
    <div class="mb-3 mt-3">
      <label for="prodi">Program Studi</label>
      <input type="text" class="form-control" id="prodi" placeholder="Enter Program Studi" name="prodi" value="<?php echo $data_mahasiswa['prodi']; ?>"/>
    </div>
    <div class="mb-3 mt-3">
      <label for="fakultas">Fakultas</label>
      <input type="text" class="form-control" id="fakultas" placeholder="Enter Fakultas" name="fakultas" value="<?php echo $data_mahasiswa['fakultas']; ?>"/>
    </div>
    <div class="mb-3 mt-3">
      <label for="tahunmasuk">Tahun Masuk</label>
      <input type="text" class="form-control" id="tahunmasuk" placeholder="Enter Tahun Masuk" name="tahunmasuk" value="<?php echo $data_mahasiswa['tahunmasuk']; ?>"/>
    </div>
    <div class="mb-3 mt-3">
      <label for="tahunlulus">Tahun Lulus</label>
      <input type="text" class="form-control" id="tahunlulus" placeholder="Enter Tahun Lulus" name="tahunlulus" value="<?php echo $data_mahasiswa['tahunlulus']; ?>"/>
    </div>
    <div class="mb-3 mt-3">
      <label for="status">Status</label>
      <input type="text" class="form-control" id="status" placeholder="Enter Status" name="status" value="<?php echo $data_mahasiswa['status']; ?>"/>
    </div>
    <button type="submit" class="btn btn-primary" name="tombol" value="Update">Update</button>
  </form>
</div>
