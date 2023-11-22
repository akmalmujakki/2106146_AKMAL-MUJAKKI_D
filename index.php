<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pendaftaran Pencak Silat</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Formulir Pendaftaran Pencak Silat</h1>
<h1>Dojo Akmal Garut<h1>

<form action="proses_input.php" method="post">
  <label for="nama">Nama Lengkap:</label>
  <input type="text" id="nama" name="nama" required><br><br>

  <label for="usia">Usia:</label>
  <input type="number" id="usia" name="usia" min="5" max="100" required><br><br>

  <label for="alamat">Alamat:</label><br>
  <textarea id="alamat" name="alamat" rows="4" cols="30" required></textarea><br><br>

  <label for="jenis_kelamin">Jenis Kelamin:</label><br>
  <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
  <label for="laki">Laki-laki</label><br>
  <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
  <label for="perempuan">Perempuan</label><br><br>

  <label for="golongan_darah">Golongan Darah:</label>
  <select id="golongan_darah" name="golongan_darah" required>
    <option value="">Pilih Golongan Darah</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="AB">AB</option>
    <option value="O">O</option>
  </select><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <input type="submit" value="Daftar">
</form>

</body>
</html>
