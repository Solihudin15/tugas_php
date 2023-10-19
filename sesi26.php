<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Sesi 26</title>
</head>
<body>
    <!-- Tugas Nomer 1 -->
    <?php
    for ($nilai = 1; $nilai <= 10; $nilai++){
        if ($nilai % 2 == 0) {
            echo "Nilai $nilai adalah angka Genap <br>";
        }else {
            echo "Nilai $nilai adalah angka Ganjil <br>";
        }
    }
    ?>
    <br><hr><br>
    <!-- Tugas Nomer 2 -->
    <?php
    for ($tahun = 2000; $tahun <= 2023; $tahun++){
        if ($tahun % 400 == 0) {
            echo "Tahun $tahun adalah Tahun Kabisat <br>";
        }
        elseif ($tahun % 100 == 0) {
            echo "Tahun $tahun bukanlah Tahun kabisat <br>";
        }
        else if ($tahun % 4 == 0) {
            echo "Tahun $tahun adalah Tahun Kabisat <br>";
        }
        else{
            echo "Tahun $tahun bukanlah Tahun kabisat <br>";
        }
    }
    ?>
    <br><hr><br>
        <!-- Tugas Nomer 3 -->
    <?php
    for ($i = 9; $i >= 1; $i--){
        for ($a = 1; $a <= $i; $a++){
            echo "$a";
        }
        echo "<br>";
    }
    ?>
    <br><br><br>
</body>
</html>