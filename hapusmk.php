<!DOCTYPE html>
<?php
include('crudmk.php');
$sql="select * from matakuliah";
$data = bacaMtKuliah($sql);
?>
<html>
<head>
<title>Daftar MataKuliah</title>
</head>
<body>
<h2>Daftar MataKuliah</h2>
<table border="1">
<tr>
<th>Kode</th>
<th>Nama</th>
<th>Sks</th>
<th>Proses</th>
</tr>
<?php
foreach($data as $mhs){
$kode = $mhs['kode'];
$nama = $mhs['nama'];
$sks = $mhs['sks'];
echo "
<tr>
<td>$kode</td>
<td>$nama</td>
<td>$sks</td>

<td><a href='konfirmasihapusmk.php?kode=$kode'>Hapus</a></td>
</tr>
";
}
?>
</table>
</body>
</html>