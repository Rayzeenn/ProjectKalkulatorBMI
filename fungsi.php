<?php
function hitungBMI($tinggi, $berat)
{
    $bmi = $berat / ($tinggi * $tinggi / 10000);


    if ($bmi < 18.5) {
        $klasifikasi = "Kekurangan Berat Badan";
    } else if ($bmi < 25) {
        $klasifikasi = "Berat Badan Normal";
    } else if ($bmi < 30) {
        $klasifikasi = "Kelebihan Berat Badan";
    } else {
        $klasifikasi = "Obesitas";
    }
    return array(
        "bmi" => $bmi,
        "klasifikasi" => $klasifikasi
    );
}
