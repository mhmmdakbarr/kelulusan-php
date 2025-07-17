<?php 	
include('koneksi.php');
$db = new database();
$data_kelulusan = $db->tampil_kelulusan();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Kelulusan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Tabel Kelulusan</h2>
  <a href="tambah_kelulusan.php">Tambah Kelulusan</a>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>ID Kelulusan</th>
        <th>NIM mahasiswa</th>
        <th>Tahun Lulus</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php 
		$no = 1;
		foreach($data_kelulusan as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['idkelulusan'];?></td>
				<td><?php echo $row['nim']; ?></td>
				<td><?php echo $row['tahunlulus']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td>
					<a href="proses_kelulusan.php?action=delete&no=<?php echo $row['idkelulusan']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
</div>

</body>
</html>