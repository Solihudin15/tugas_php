<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
                                    <!-- Tugas Nomor 1 -->
<h3>Tugas Nomor 1</h3>
<?php
    $array = array("satu", "dua", "tiga", "empat", "lima");
    $array_r = array_reverse($array);
    
    foreach ($array_r as $value){
        echo " $value <br>";
    }

?>
                                    <!-- Tugas Nomor 2 -->
<hr><h3>Tugas Nomor 2</h3>
<?php
    $buah = array("apel", "nanas", "mangga", "jeruk",);
    echo "Tedapat " . count($buah) . " buah";
?>

                                    <!-- Tugas Nomor 3 -->
<hr><h3>Tugas Nomor 3</h3>
<?php
    $nilai = array(7, 3, 4, 9);
    $jml_nilai = array_sum($nilai);
    
    echo "Totalnya adalah $jml_nilai";
?>

                                    <!-- Tugas Nomor 4 -->
<hr><h3>Tugas Nomor 4</h3>
<?php
    $a = 1;
        for ($b = 1; $b <= 10; $b++){
            $kali = $a * $b;
            echo "$a x $b = $kali<br>";
        }
?> 
</body>
</html>
