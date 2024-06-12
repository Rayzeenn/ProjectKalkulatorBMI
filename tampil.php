<?php
include 'fungsi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tinggi = $_POST["tinggi"];
    $berat = $_POST["berat"];
    $nama = $_POST["nama"];

    $hasilBMI = hitungBMI($tinggi, $berat);

    $bmi = number_format($hasilBMI["bmi"], 1);
    $klasifikasi = $hasilBMI["klasifikasi"];
}
?>

<!DOCTYPE html>

<head>
    <title>Hasil Kalkulator BMI</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>HASIL KALKULATOR BMI</h1>

        <div class="hasil">
            <p>Nama: <span class="bold"><?php echo $nama; ?></span></p>
            <p>BMI Anda: <span class="bold"><?php echo $bmi; ?></span></p>
            <p>Klasifikasi: <span class="bold"><?php echo $klasifikasi; ?></span></p>

            <table class="tabel">
                <tr>
                    <th>Klasifikasi</th>
                    <th>Nilai BMI</th>
                </tr>
                <tr>
                    <td>Kekurangan Bobot</td>
                    <td>&lt; 18.5</td>
                </tr>
                <tr>
                    <td>Sehat</td>
                    <td>18.5 - 22.9</td>
                </tr>
                <tr>
                    <td>Kelebihan Bobot</td>
                    <td>23 - 24.9</td>
                </tr>
                <tr>
                    <td>Obesitas 1</td>
                    <td>25 - 29.9</td>
                </tr>
                <tr>
                    <td>Obesitas 2</td>
                    <td>&gt; 30</td>
                </tr>
            </table>
        </div>
    </div>

</body>

</html>