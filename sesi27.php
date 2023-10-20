<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Sesi 27</title>
</head>
<body>
    <!-- Tugas Nomer 1 -->
    <?php
    for ($i = 0; $i <= 8; $i++){
        for ($a = 0; $a <= $i; $a++){
            echo "$a";
        }
        echo "<br>";
    }
    ?>
    <br><hr><br>
    <!-- Tugas Nomer 2 -->
    <table border="1">
        <tr bgcolor="cyan">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php
        for ($i = 1, $a = 10; $i <=10, $a >= 1; $i++, $a--){
        ?>
            <tr>
                <td><?php echo "$i" ?></td>
                <td><?php echo "Nama ke $i" ?></td>
                <td><?php echo "Kelas $a"?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>