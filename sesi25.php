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
    <!-- Tugas 2 membuat Output Tahun Kabisat -->
    <?php
    $tahun = 2000;
    if ($tahun % 400 == 0) {
        echo "Tahun $tahun adalah Tahun Kabisat";
    }
    elseif ($tahun % 100 == 0) {
        echo "Tahun $tahun bukanlah Tahun kabisat";
    }
    elseif ($tahun % 4 == 0) {
        echo "Tahun $tahun adalah Tahun Kabisat";
    }
    else{
        echo "Tahun $tahun bukanlah Tahun kabisat";
    }
    ?>

</body>
</html>