<!DOCTYPE html>
<html>
<head>
    <title>Hitung Saldo Akhir</title>
</head>
<body>

<h2>Perhitungan Saldo Akhir Tabungan</h2>

<form method="POST">
    Saldo Awal: <input type="number" name="saldo" required><br><br>
    Lama Menabung (bulan): <input type="number" name="bulan" required><br><br>
    <button type="submit">Hitung</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $saldo = $_POST['saldo'];
    $bulan = $_POST['bulan'];

    for ($i = 1; $i <= $bulan; $i++) {

        // Bunga per bulan
        if ($saldo < 1100000) {
            $bunga = $saldo * (0.03 / 12); // 3% per tahun
        } else {
            $bunga = $saldo * (0.04 / 12); // 4% per tahun
        }

        // Tambah bunga ke saldo
        $saldo += $bunga;

        // Potong biaya admin
        $saldo -= 9000;
    }

    echo "<h3>Saldo akhir setelah $bulan bulan adalah: Rp " . number_format($saldo, 0, ',', '.') . "</h3>";
}
?>

</body>
</html>