<?php
$jurusan= ["HTL","KLN","PMN","pplg","htl", "htl", "pplg"];
$gabung_jurusan = array_merge($jurusan);
$hapusygsama = array_unique($gabung_jurusan);

rsort($hapusygsama);

foreach ($hapusygsama as $value)
    echo $value . "\n";
?>