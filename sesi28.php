<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek Sesi 28</title>
    <style>
        header{
            background-color: yellow;
        }
        h3 {
            padding-top: 10px;
            padding-left: 20px;
            padding-bottom: 10px;
        }
        table{
            border: 2px solid black;
            border-collapse: collapse;
            margin-top: 50px;
        }
        tr, td{
            text-align: center;
            border: 2px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>
</head>
<body>
<header>
    <h3>Daftar Nilai</h3>
</header>
<table align="center">
    <tr style="background-color: white;">
        <td>No.</td>
        <td>Nama</td>
        <td>Tanggal lahir</td>
        <td>Umur</td>
        <td>Alamat</td>
        <td>Kelas</td>
        <td>Nilai</td>
        <td>Hasil</td>
    </tr>
    <?php
    $data       = file_get_contents("json/data.json");
    $students    = json_decode($data);
    $no = 1;
    
    foreach ($students as $key => $student){
        //                          ---------- Menghitung Umur dari Tahun Lahir ----------
        $tahun_sekarang = date("Y");
        $ttl = $student->tanggal_lahir;
        $tahun_lahir = date("Y", strtotime($ttl));
        $umur = $tahun_sekarang - $tahun_lahir;
        
        //                           ---------- Mengubah Format Tahun-Bulan-hari ----------
        $newttl = date("d F Y", strtotime($ttl));
        
        //                               ---------- Konversi Nilai ke Grade ----------
        switch($student->nilai){
            case ($student->nilai >= 90 && $student->nilai <= 100):
                $grade = "A";
                break;
                
            case ($student->nilai >= 80 && $student->nilai <= 89):
                $grade = "B";
                break;
                
            case ($student->nilai >= 70 && $student->nilai <= 79):
                $grade = "C";
                break;
                
            case ($student->nilai >= 0 && $student->nilai <= 69):
                $grade = "D";
                break;
        }
        //                                      ---------- Output ----------
            if ($no % 2 == 0){
                echo "<tr style='background-color: white'>";
                    echo "<td>$no</td>";
                    echo "<td>$student->nama</td>";
                    echo "<td>$newttl</td>";
                    echo "<td>$umur</td>";
                    echo "<td>$student->alamat</td>";
                    echo "<td>$student->kelas</td>";
                    echo "<td>$student->nilai</td>";
                    echo "<td>$grade</td>";
                echo "</tr>";
            }else {
                echo "<tr style='background-color: gray'>";
                echo "<td>$no</td>";
                echo "<td>$student->nama</td>";
                echo "<td>$newttl</td>";
                echo "<td>$umur</td>";
                echo "<td>$student->alamat</td>";
                echo "<td>$student->kelas</td>";
                echo "<td>$student->nilai</td>";
                echo "<td>$grade</td>";
                echo "</tr>";
            }
        $no++;
    }
    ?>
</table>
</body>
</html>