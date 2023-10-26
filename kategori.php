<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Body mass Index</title>
</head>
<body>
    <?php
    //                          Menghitung Body Mass Index
    $nama = "Solihudin";
    $tinggi = 170;                                     // Tinggi dalam satuan centimeter
    $berat = 70;
    
    $tinggim = $tinggi / 100;                          // Rumus konvesi dari centimeter ke meter 
    $rumus = ( $berat / ( $tinggim * $tinggim ) );     // Rumus untuk Body Mass Index
    $bmi = number_format($rumus,1);                    // Untuk memformat nilai koma menjadi 1 digit      
    
    if ( $bmi < 18.5 ){
        echo "Halo, $nama. Anda memiliki Tinggi $tinggi cm dan Berat $berat Kg, Nilai BMI anda adalah $bmi, anda termasuk Kurus";
    }elseif ( $bmi >= 18.5 && $bmi <= 24.9 ) {
        echo "Halo, $nama. Anda memiliki Tinggi $tinggi cm dan Berat $berat Kg, Nilai BMI anda adalah $bmi, anda termasuk Ideal";
    }else {
        echo "Halo, $nama. Anda memiliki Tinggi $tinggi cm dan Berat $berat Kg, Nilai BMI anda adalah $bmi, anda termasuk Gemuk";
    }
    ?>
</body>
</html>