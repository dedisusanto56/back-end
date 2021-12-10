<?php 
// array adalah variabel yang memiliki banyak nilai di dalamnya
// bisa sama tipe data, bisa beda
// bahkan bisa ada array di dalam array yang disebut array multidimensi
// array juga bisa menampung obejct
// array terdiri dari key dan elemen
// dimana key adalah index
// dan index, bisa angka atau disebut index numeric
// bisa juga index string atau array assosisative

// variabel biasa
$hari1 = "senin";
$hari2 = "selasa";

// jika kita ingin membuat variabel yang isinya hari2
// akan merepotkan jika kita memakai variabel baisa
// tapi kita gunakan array

// deklarasi array
// cara lama
$hari = array('senin', 'selasa', 'rabu');
// cara baru
$hari = ['senin', 'selasa', 'rabu'];
$arr1 = [123, 'shandika', true];

// menampilkan array
// tidak bisa menggunakan echo
echo $arr1;
// jika dijalankan maka akan error
// karena echo hanya bisa menampilkan 1 elemen
// maka gunakan var_dump atau print_r()


?>