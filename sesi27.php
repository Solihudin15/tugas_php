<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Sesi 27</title>
    <style>
        table, tr, th, td{
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
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
    <table>
        <tr style ="background-color: cyan;">
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
        </tr>
        <?php
        for ($i = 1, $a = 10; $i <= 10, $a >= 1; $i++, $a--){
            if ($i % 2 == 0){
            echo "<tr style ='background-color: white'>";
                echo "<td>$i</td>";
                echo "<td>Nama ke $i</td>";
                echo "<td>Kelas $a</td>";
            echo "</tr>";
            } else{
            echo"<tr style ='background-color: gray;'>";
                echo"<td>$i</td>";
                echo"<td>Nama ke $i</td>";
                echo"<td>Kelas $a</td>";
            echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>