
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
  <h2>Form Tambah Kelulusan</h2>
  <form method="post" action="proses_kelulusan.php?action=add">
  <div class="mb-3 mt-3">
      <label for="idkelulusan">ID Kelulusan</label>
      <input type="text" class="form-control" placeholder="Enter ID Kelulusan"name="idkelulusan">
    </div>
  
    <div class="mb-3 mt-3">
      <label for="nim">NIM Mahasiswa</label>
      <input type="text" class="form-control" id="nim" placeholder="Enter NIM Mahasiswa" name="nim">
    </div>
    <div class="mb-3">
      <label for="tahunlulus">Tahun Lulus</label>
      <input type="text" class="form-control" id="tahunlulus" placeholder="Enter Tahun Lulus" name="tahunlulus">
    </div>
    <div class="mb-3">
      <label for="status">Status</label>
      <tr>
        <td>Status</td>
        <td>:</td>
        <td>
          <select name="status">
            <option value="">--Pilih Status--</option>
            <option value="status">Lulus</option>
            <option value="status">Tidak Lulus</option> 
          </select>
        </td>
      </tr>
      <input type="text" class="form-control" id="status" placeholder="Enter Status" name="status">
    </div>
    <button type="submit" class="btn btn-primary" name="tombol" value="Simpan">Simpan</button>
    <button type="reset" class="btn btn-primary" name="tombol" value="Reset form">batal</button>
  </form>
</div>
</body>
</html>
