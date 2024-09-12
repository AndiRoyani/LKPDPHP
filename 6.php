<?php
// Deklarasi array $barang yang berisi daftar belanjaan
$barang = [
    [
        'nama_barang' => 'Pasta GIgi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 2,
    ],
    [
        'nama_barang' => 'Sikat Gigi',
        'harga_barang' => 7000,
        'jumlah_beli' => 4,
    ]
];

// Inisialisasi variabel $price untuk menyimpan total harga
$price = 0;

// Cetak judul daftar belanjaan
echo "Daftar belanjaan :  <br>";
echo "<ol>";

// Looping melalui array $barang menggunakan foreach
foreach ($barang as $item) {
    // Hitung harga subtotal untuk setiap item
    $subPrice = $item['harga_barang'] * $item['jumlah_beli'];

    // Cetak daftar belanjaan dengan nama barang, jumlah beli, dan harga subtotal
    echo "<li>" . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") " . number_format($subPrice, 0, ".", ".");

    // Tambahkan harga subtotal ke total harga
    $price += $subPrice;
}

// Cetak penutup daftar belanjaan
echo "</ol>";
echo "</br>";

// Cetak total harga yang harus dibayar
echo 'Total harga yang harus di bayar adalah <b> Rp. ' . number_format($price, 0, '.', '.') . '</b>';
?>