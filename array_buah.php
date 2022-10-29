<?php
    $ar_buah = ["pepaya", "mangga", "Pisang", "Jambu" ];
        //cetak buah ke index ke 2
    echo'Cetak buah ketiga : '.$ar_buah[2];
        //cetak jumlah buah
    echo '<br/>Jumlah Buah : ' . count($ar_buah);
        //cetak seluruh buah
    echo '<ol>';
    foreach($ar_buah  as $buah) {
        echo '<li>' . $buah . '</li>';
    }
    echo '<ol>';
        //tambahkan buah
    $ar_buah[] = "Durian";
        //Hapus buah
    unset($ar_buah[1]);
        //Ubah indeks ke 2 menjadi semangka
    $ar_buah[2] = "Manggis";
        //cetak seluruh buah dengan indeks nya
    echo '<ul>';
    foreach($ar_buah as $k => $v) {
        echo '<li> buah index =' . $k . 'adalah' . $v . '<li/>';
    }
    echo '<ul>';
    
?>