<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen</title>
</head>
<body>
    <!-- mengirimkan request POST ke halaman yang sama saat disubmit -->
    <form action="" method="post">
        <!-- Label dan input field untuk pengguna memasukkan kalimat -->
        <label for="namaproduk">Kalimat :</label><br>
        <input type="text" id="namaproduk" name="namaproduk" required>
    </form>
</body>
</html>
<?php
// Cek jika form telah disubmit (yaitu, metode request adalah POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dapatkan kalimat input dari form
    $teks = $_POST['namaproduk'];

    // menemukan semua karakter yang bukan huruf dan bukan spasi (yaitu, simbol)
    preg_match_all('/[^a-zA-Z\s]/', $teks, $matches);

    // Cek jika ada simbol yang ditemukan
    if (count($matches[0]) > 0) {
        // Hapus duplikasi dari array simbol
        $uniqueSymbols = array_unique($matches[0]);
        // Cetak simbol unik yang ditemukan dalam kalimat
        echo "karakter yang terdapat pada kalimat : " . implode(' , ', $uniqueSymbols);
    } else {
        // Jika tidak ada simbol yang ditemukan, cetak pesan
        echo "Tidak terdapat simbol pada kalimat.";
    }
}
?>