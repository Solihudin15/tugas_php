<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Sesi 27 pt.2</title>
</head>
<body>
    <?php
    echo"Tugas Nomer 1<br><br>";
    //                      Tugas Nomer 1
    $a = 1;
    for ($b = 1; $b <= 10; $b++){
        $kali = $a * $b;
        echo "$a x $b = $kali<br>";
    }

    echo"<br><hr>Tugas Nomer 2<br><br>";
    //                      Tugas Nomer 2
    for ($i = 9; $i >= 1; $i--){
        for ($a = 1; $a <= $i; $a++){
            echo "*";
        }
        echo "<br>";
    }
    
    //                      Tugas Nomer 3
    echo"<br><hr>Tugas Nomer 3<br><br>";
    for ($i = 0; $i <= 8; $i++){
        for ($a = 0; $a <= $i; $a++){
            echo "$a";
        }
        echo "<br>";
    }
    echo"<br><hr><br>";
    ?>
</body>
</html>