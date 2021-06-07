<?php
include('crudmk.php');
$kode = $_GET['kode'];
$hasil = hapushMtKuliah($kode);
if($hasil > 0)
header("Location: bacamk.php");
else {
echo 'Gagal menghapus record';
}
?>