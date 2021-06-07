<?php
Function koneksiAkademik(){
// menciptakankoneksi
$koneksi = mysqli_connect("localhost", "root", "",

"akademik");

// Cekkoneksi
if (!$koneksi) {
die("Koneksigagal: " . mysqli_connect_error());
}
return $koneksi;
}