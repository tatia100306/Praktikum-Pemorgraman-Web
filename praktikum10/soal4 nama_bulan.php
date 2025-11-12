<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Hari dalam Bulan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(135deg, #a8e063, #56ab2f);
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            background-color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.2);
        }

        .hasil {
            background-color: #fff;
            margin-top: 25px;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.3);
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h2>Jumlah Hari dalam Bulan Saat Ini</h2>

    <?php
    $bulan = date("n");
    $tahun = date("Y");

    switch ($bulan) {
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $hari = 31; break;
        case 4: case 6: case 9: case 11:
            $hari = 30; break;
        case 2:
            if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0))
                $hari = 29;
            else
                $hari = 28;
            break;
        default:
            $hari = 0;
    }

    $nama_bulan = date("F");
    echo "<div class='hasil'>";
    echo "<p>Bulan saat ini: <b>$nama_bulan $tahun</b></p>";
    echo "<p>Jumlah hari: <b>$hari hari</b></p>";
    echo "</div>";
    ?>
</body>
</html>
