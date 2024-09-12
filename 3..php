<?php
// Looping dari 1 sampai 29 (karena kondisi looping adalah $i < 30)
for ($i=1; $i < 30; $i++) {
    // Cek jika 120 habis dibagi oleh $i
    if (120 % $i == 0) {
        // Jika 120 habis dibagi oleh $i, maka cetak hasil pembagian
        echo "120 : $i = " . round(120 / $i) . "<br>";
    }
}
?>
