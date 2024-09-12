<?php
// Deklarasi fungsi cek yang akan memeriksa jawaban
function cek ($nama, ...$arrJawaban) {
    // Deklarasi array $jawaban yang berisi jawaban benar
    $jawaban = ['A','B',"C",'A','B',"C",'A','D',"E",];
    
    // Deklarasi array $arrBenar untuk menyimpan hasil pemeriksaan
    $arrBenar = [];

    // Looping melalui array $jawaban dan memeriksa jawaban
    foreach ($jawaban as $key => $value) {
        // Cek jika jawaban pengguna sama dengan jawaban benar
        if ($arrJawaban [$key] == $value){
            // Jika sama, maka jawaban benar
            $arrBenar [$key] = 1; 
        } else {
            // Jika tidak sama, maka jawaban salah
            $arrBenar [$key] = 0; 
        }
    }
    
    // Menampilkan hasil
    echo "nama : $nama <br>";
    // Menampilkan jumlah jawaban benar
    echo "Jumlah Jawaban benar  : <br> " . count (array_keys($arrBenar,1)) . "</br><br>";
    // Menampilkan jumlah jawaban salah
    echo "Jumlah Jawaban salah  : <br> " . count (array_keys($arrBenar,0)) . "</br><br>";
}

// Panggil fungsi cek dengan nama "andi" dan jawaban
cek ("andi", 'A','B',"C",'A','B',"C",'A','D',"E", );
?>