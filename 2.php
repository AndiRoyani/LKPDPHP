<?php
// Nilai pembelian awal
$pembelian = 130000;

// Mendapatkan hari ini dalam format nama hari (e.g. "Tuesday")
$day = date("l");

// Inisialisasi total bayar menjadi 0
$totalBayar = 0;

// Cek jika nilai pembelian lebih besar dari 100000
if ($pembelian > 100000) {
    // Cek jika hari ini adalah hari Selasa
    if ($day == "Tuesday") {
        // Jika hari ini adalah Selasa, maka berikan diskon 7% dan 5%
        $totalBayar = $pembelian - ($pembelian * 7 / 100);
        $totalBayar = $pembelian - ($pembelian * 5 / 100);
    } else {
        // Jika hari ini bukan Selasa, maka berikan diskon 7%
        $totalBayar = $pembelian - ($pembelian * 7 / 100);
    }
} else {
    // Jika nilai pembelian kurang dari atau sama dengan 100000, maka total bayar sama dengan nilai pembelian
    $totalBayar = $pembelian;
}

// Cetak tanggal hari ini
echo "Tanggal hari ini: " . $day . "<br>";

// Cetak total pembelanjaan dengan format rupiah
echo "Total pembelanjaan: " . number_format($pembelian, 0, '.', '.') . "<br>";

// Cetak total yang harus dibayar dengan format rupiah
echo "Total yang harus dibayar: " . number_format($totalBayar, 0, '.', '.') . "<br>";
?>