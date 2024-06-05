<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Setelah Tapera</title>
    <style>
        body {
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-image: url(img/tapera.jpg);
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        p {
            color: #555;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gaji Setelah Tapera</h1>
        <?php
        $gaji = 1000000;
        $tapera = 0.03; // 3% TAPERA
        $tapera_deduction = $gaji * $tapera;
        $thp = $gaji - $tapera_deduction;

        echo "<p>Gaji sebelum TAPERA = RP. " . number_format($gaji, 0, ',', '.') . "</p>";
        echo "<p>TAPERA = RP. " . number_format($tapera_deduction, 0, ',', '.') . " (3%)</p>";
        echo "<p>Gaji yang dibawa pulang = RP. " . number_format($thp, 0, ',', '.') . "</p>";
        ?>
    </div>
</body>
</html>
