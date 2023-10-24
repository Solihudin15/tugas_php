<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    <?php
    //                                   Menghitung Grade Nilai
    $nama = "Solihudin";
    $nilai = 85;

    switch($nilai){
        case ($nilai >= 90 && $nilai <= 100):
            $grade = "A";
            $keterangan = "Lulus";
            break;
            
            case ($nilai >= 80 && $nilai <= 89):
                $grade = "B";
                $keterangan = "Lulus";
                break;
            
            case ($nilai >= 70 && $nilai <= 79):
                $grade = "C";
                $keterangan = "Lulus";
                break;
            
            case ($nilai >= 0 && $nilai <= 69):
                $grade = "D";
                $keterangan = "Tidak Lulus";
                break;
    }

    echo "Hasil Studi mahasiswa<br>";
    echo "Nama Mahasiswa : $nama<br>";
    echo "Nilai Mahasiswa : $nilai<br>";
    echo "Grade : '$grade'";
    ?>
</body>
</html>