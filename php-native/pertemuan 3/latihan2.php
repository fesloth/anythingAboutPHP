<?php
// pengulangan if else

$i = 5;
if ($i < 2) {
    echo "benar";
} else {
    echo "salah";
    // else tidak ada keterangan/kondisi karena else adalah tampilan yang akan muncul jika if false
}
// $i jumlahnya 5, jika (if) $i lebih kecil dari 2, apakah {} benar, atau (else) salah
// jika true maka if akan ditampilkan, jika false else echo akan muncul

// pengulangan if else if else
// aturan: baris pertamalah yang dibaca oleh server

$a = 10;
if ($a < 5) {
    echo "benar";
} else if ($a == 10) {
    echo "bingo!";
    // karena if false, maka yang ditampilkan adalah else if karena pernyataannya benar
    // lalu bagaimana apabila else if juga salah? maka else lah yg akan ditampilkan
    // bagaimana apabila if benar? maka tampil if karena if lah yang paling pertama tertera
} else {
    echo "salah";
}
