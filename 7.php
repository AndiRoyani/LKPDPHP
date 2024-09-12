<?php
// Deklarasi fungsi wrapText yang akan mengolah teks
function wrapText($text) {
    // Menghitung jumlah karakter dalam teks menggunakan str_split
    $count = str_split($text);

    // Cek jika jumlah karakter lebih dari 50
    if (count($count) > 50) {
        // Jika lebih dari 50, maka potong teks menjadi 50 karakter dan tambahkan "..."
        $text = substr($text, 0 , 50);
        $text .= "...";
    }
    
    // Cetak teks yang telah diolah
    echo $text;
}

// Deklarasi variabel $kata yang berisi kalimat panjang
$kata = "Lorem ipsum dolor sit memet, consectetur adipiscing elit. Nulla vel auctor turpis. Donec vel erat sollicitudin, accumsan lectus eget, blandit orci. Integer ut erat ipsum. Sed porta at erat vitae ornare. Aenean auctor, lacus ac condimentum ultricies, mi enim lobortis nibh, sit amet laoreet arcu felis nec quam. Cras euismod ex magna, in scelerisque urna laoreet quis. Aliquam tincidunt lacus sed tempor dapibus. Morbi sit amet dolor hendrerit, sollicitudin purus non, blandit sem.";

// Cetak kalimat awal
echo "<b>Kalimat awal : </b> " . $kata . "</br>";

// Panggil fungsi wrapText untuk mengolah kalimat
wrapText($kata);
?>