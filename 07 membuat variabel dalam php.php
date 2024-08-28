<?php
$nama = "nayla";
$harga = 3000;
$nama_barang = "rok sekolah";
$harga = 100;
$stok = 30;
// membuat variabel baru
$stok = 40;
// 1)	Awal dari nama variabel tidak boleh menggunakan angka dan simbol, kecuali underscore.
// Contoh: Benar
$namakepanjangan = "syarifah nayla rizky";
$namapendek = "nayla";
// 2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
// Contoh:
$nama_barang = "rok sekolah";
$namaPembeli = "putri"; // menggunakan camelCase

// 3)	Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
// Contoh:
$nama_barang = "rok sekolah";
$namaPembeli = "nelfi";
$harga = 100;

// 4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
// Contoh: Tiga variabel ini akan dianggap berbeda.
$Belajar = "seni budaya";
$BELAJAR = "pjok";
$belajar = "pkn";
// =================== cara mencetak =======================
echo
"<p>nama nayla :$nama,".
"<p> harga:$harga,".
$nama, "<p>" .
$harga, "<p>" . 
$harga, "<p>" .
$stok, "<p>" .
$nama, "<p>" .
$namakepanjangan, "<p>" .
$nama_barang, "<p>" .
$namaPembeli, "<p>" .
$nama_barang, "<p>" .
$namaPembeli, "<p>" .
$harga, "<p>" .
$Belajar, "<p>" .
$BELAJAR, "<p>" .
$belajar;