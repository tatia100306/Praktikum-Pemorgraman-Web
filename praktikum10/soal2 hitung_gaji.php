<!DOCTYPE html>
<html>
<head>
    <title>Hitung Upah Karyawan</title>
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

        form {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.3);
            margin-top: 20px;
        }

        input[type="number"] {
            padding: 8px;
            width: 180px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #388E3C;
        }

        .hasil {
            background-color: #fff;
            margin-top: 25px;
            padding: 15px 25px;
            border-radius: 10px;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.2);
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h2>Hitung Upah Karyawan Honorer</h2>

    <form method="post">
        <label>Jumlah jam kerja per minggu:</label><br>
        <input type="number" name="jam" placeholder="contoh: 52" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST['jam'];
        $upah_per_jam = 2000;
        $upah_lembur = 3000;

        if ($jam > 48) {
            $lembur = $jam - 48;
            $total = (48 * $upah_per_jam) + ($lembur * $upah_lembur);
        } else {
            $total = $jam * $upah_per_jam;
        }

        echo "<div class='hasil'>";
        echo "<p>Jam kerja: $jam jam/minggu</p>";
        echo "<p>Total upah: <b>Rp " . number_format($total, 0, ',', '.') . "</b></p>";
        echo "</div>";
    }
    ?>
</body>
</html>
