<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Bangun Ruang</title>
</head>
<body>
    <?php
    //                          Menghitung Volume Kubus
    echo "Menghitung Volume Kubus <br><br>";

    $s = 10;
    $volume = $s * $s * $s;

    echo "Sebuah Kubus Mempunyai sisi $s cm <br>";
    echo "Rumus Volume Kubus : sisi x sisi x sisi <br>";
    echo "Volume dari Persegi yang memiliki $s cm adalah $volume";
    echo "<br><br><hr>";

    //                          Menghitung Volume Balok
    echo "Menghitung Volume Balok <br><br>";

    $p = 10;
    $l = 5;
    $t = 3;
    $volume = $p * $l * $t;

    echo "Sebuah Balok Mempunyai Panjang $p cm, Lebar $l cm, dan Tinggi $t cm <br>";
    echo "Rumus Volume Balok : Panjang x Lebar x Tinggi <br>";
    echo "Volume dari balok yang memiliki Panjang $p cm, Lebar $l cm, dan Tinggi $t cm adalah $volume";
    echo "<br><br><hr>";

    //                          Menghitung Volume Prisma Segitiga
    echo "Menghitung Volume Prisma Segitiga <br><br>";

    $la = 30;
    $t = 10;
    $volume = $la * $t;

    echo "Sebuah Prisma Segitiga Mempunyai Luas Alas $la cm dan Tinggi $t cm <br>";
    echo "Rumus Volume Prisma Segitiga : Luas Alas x Tinggi <br>";
    echo "Volume dari Prisma Segitiga yang Luas Alas $la cm dan Tinggi $t cm adalah $volume";
    echo "<br><br><hr>";
    ?>
</body>
</html>
