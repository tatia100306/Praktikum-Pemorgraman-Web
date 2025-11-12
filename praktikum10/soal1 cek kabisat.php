<!DOCTYPE html>
<html>
<head>
    <title>Cek Tahun Kabisat</title>
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
            width: 150px;
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

        .kabisat {
            color: #2e7d32;
            font-weight: bold;
        }

        .bukan {
            color: #d32f2f;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Cek Tahun Kabisat</h2>

    <form method="post">
        <label>Masukkan Tahun:</label>
        <input type="number" name="tahun" placeholder="contoh: 2024" required>
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tahun = $_POST['tahun'];
        echo "<div class='hasil'>";
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            echo "<p class='kabisat'>$tahun adalah tahun kabisat ✔️</p>";
        } else {
            echo "<p class='bukan'>$tahun bukan tahun kabisat ❌</p>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>
