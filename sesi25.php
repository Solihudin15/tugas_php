<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Sesi 25</title>
</head>
<body>
    <!-- Tugas 1 Membuat Output Bilangan Ganjil & Genap -->
    <?php
    $nilai = 11;
    if ($nilai % 2 == 0) {
        echo "Nilai $nilai adalah angka Genap";
    }else {
        echo "Nilai $nilai adalah angka Ganjil";
    }
    ?>
    <br><br><br>
    <!-- Tugas 2 Membuat Output Tahun Kabisat -->
    <?php
    $tahun = 2000;
    if ($tahun % 400 == 0) {
        echo "Tahun $tahun adalah Tahun Kabisat";
    }
    elseif ($tahun % 100 == 0) {
        echo "Tahun $tahun bukanlah Tahun kabisat";
    }
    else if ($tahun % 4 == 0) {
        echo "Tahun $tahun adalah Tahun Kabisat";
    }
    else{
        echo "Tahun $tahun bukanlah Tahun kabisat";
    }
    ?>
    <br><br><br>
    <!-- Tugas 3 Membuat Grade Nilai -->
    <?php
    $nilai = 87;
    if($nilai <= 100 && $nilai >= 90){
        echo "Nilai kamu $nilai Mendapatkan Grade A";
    } else if ($nilai <= 89 && $nilai >= 80){
        echo "Nilai kamu $nilai Mendapatkan Grade B";
    } else if ($nilai <= 79 && $nilai >= 70){
        echo "Nilai kamu $nilai Mendapatkan Grade C";
    } else if ($nilai <= 69 && $nilai >= 60){
        echo "Nilai kamu $nilai Mendapatkan Grade D";
    } else {
        echo "Nilai kamu $nilai Mendapatkan Grade E";
    }
    ?>
</body>
</html>