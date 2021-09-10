<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Nilai</title>
</head>
<body>
  
  <h1>Tambah</h1>
  <a href="index.php">Kembali</a>
  <br><br>
  <form action="process.php" method="POST">
    <label>NIM</label>
    <br>
    <input type="text" name="nim">
    <br>
    <label>Nama</label>
    <br>
    <input type="text" name="nama">
    <br>
    <label>UTS</label>
    <br>
    <input type="number" name="uts">
    <br>
    <label>UAS</label>
    <br>
    <input type="number" name="uas">
    <br>
    <label>Tugas</label>
    <br>
    <input type="number" name="tugas">
    <br><br>
    <button type="submit" name="submit_simpan">Submit</button>
    <button type="reset">Reset</button>
  </form>

</body>
</html>