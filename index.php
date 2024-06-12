<?php
include 'fungsi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tanggalLahir = $_POST["tanggalLahir"];
  $jenisKelamin = $_POST["jenisKelamin"];
  $tinggi = $_POST["tinggi"];
  $berat = $_POST["berat"];
  $nama = $_POST["nama"];

  $hasilBMI = hitungBMI($tinggi, $berat);

  $bmi = $hasilBMI["bmi"];
  $klasifikasi = $hasilBMI["klasifikasi"];
}
?>
<!DOCTYPE html>

<head>
  <title>Kalkulator BMI</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container">
    <h1>KALKULATOR BMI</h1>
    <form action="tampil.php" method="post">
    <div class="form-group">
        <label class="label">Nama</label>
        <input type="text" name="nama" id="nama" class="input" required>
      </div>
      <div class="form-group">
        <label class="label">Tanggal Lahir Anda</label>
        <input type="date" name="tanggalLahir" id="tanggallahir" class="input" required>
      </div>

      <div class="form-group">
        <label class="label">Jenis Kelamin Anda</label>
        <div>
          <input type="radio" name="jenisKelamin" value="laki-laki" checked> Laki-laki<br>
          <input type="radio" name="jenisKelamin" value="perempuan"> Perempuan
        </div>
      </div>

      <div class="form-group">
        <label class="label">Berapa tinggi Anda? (cm)</label>
        <input type="number" name="tinggi" class="input" required>
      </div>

      <div class="form-group">
        <label class="label">Berapa berat badan Anda? (kg)</label>
        <input type="number" name="berat" class="input" required>
      </div>

      <div class="button-container">
        <button type="submit" class="button">Hitung</button>
      </div>
    </form>
  </div>

</body>

</html>