<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Tambah Data Mahasiswa</h2>
  <form method="post" action="proses_data.php?action=add">
    <div class="mb-3 mt-3">
      <label for="nim">NIM</label>
      <input type="text" class="form-control" id="nim" placeholder="Enter NIM Mahasiswa" name="nim">
    </div>
    <div class="mb-3">
      <label for="nama">Nama Mahasiswa</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter Nama Mahasiswa" name="nama">
    </div>
    <div class="mb-3 mt-3">
      <label for="prodi">Program Studi</label>
      <input type="text" class="form-control" id="prodi" placeholder="Enter Program Studi" name="prodi">
    </div>
    <div class="mb-3 mt-3">
      <label for="fakultas">Fakultas</label>
      <tr>
        <td>Fakultas</td>
        <td>:</td>
        <td>
          <select name="fakultas">
            <option value="">--Pilih fakultas--</option>
            <option value="fakultas">Teknik</option>
            <option value="fakultas">Kedokteran</option>
            <option value="fakultas">Pertanian</option>
            <option value="fakultas">Keguruan</option>
          </select>
        </td>
      </tr>
      <input type="text" class="form-control" id="fakultas" placeholder="Enter Program Studi" name="fakultas">
    </div>
    <div class="mb-3 mt-3">
      <label for="tahunmasuk">Tahun Masuk</label>
      <input type="text" class="form-control" id="tahunmasuk" placeholder="Enter Tahun Masuk" name="tahunmasuk">
    </div>
    <div class="mb-3 mt-3">
      <label for="tahunlulus">Tahun Lulus</label>
      <input type="text" class="form-control" id="tahunlulus" placeholder="Enter Tahun Lulus" name="tahunlulus">
    </div>
    <div class="mb-3 mt-3">
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
  </form>
</div>

</body>
</html>
