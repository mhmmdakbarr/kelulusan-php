<?php 	
include('koneksi.php');
$db = new database();
$data_mahasiswa = $db->tampil_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Tabel Mahasiswa</h2>
  <a href="tambah_data.php">Tambah Mahasiswa</a>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>NIM Mahasiswa</th>
        <th>Nama Mahasiswa</th>
        <th>Program Studi</th>
        <th>Fakultas</th>
        <th>Tahun Masuk</th>
        <th>Tahun Lulus</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php 
		$no = 1;
		foreach($data_mahasiswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nim'];?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['prodi']; ?></td>
				<td><?php echo $row['fakultas']; ?></td>
				<td><?php echo $row['tahunmasuk']; ?></td>
        <td><?php echo $row['tahunlulus']; ?></td>
        <td><?php echo $row['status']; ?></td>
				<td>
        <a href="edit_data.php?id=<?php echo $row['nim']; ?>">Update</a>
        <a href="proses_data.php?action=delete&id=<?php echo $row['nim']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
</div>

</body>
</html>