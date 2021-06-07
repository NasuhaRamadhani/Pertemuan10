<!DOCTYPE html>
<html>
<head>
<title>Daftar MataKuliah</title>
</head>
<body>
<h2>Daftar MataKuliah</h2>
<table border="1">
<tr>
<th>kode</th>
<th>nama</th>
<th>sks</th>
</tr>
<?php

// menciptakan koneksi
$koneksi = mysqli_connect("localhost", "root", "", "akademik");
// Cek koneksi
if (!$koneksi) {
die("Koneksi gagal: " . mysqli_connect_error());
}
$sql = "select * from matakuliah";
$hasil = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($hasil) > 0) {
// output data setiap baris
while($baris = mysqli_fetch_assoc($hasil)) {
$kode = $baris['kode'];
$nama = $baris['nama'];
$sks = $baris['sks'];
echo "
<tr>
<td>$kode</td>
<td>$nama</td>
<td>$sks</td>
</tr>
";

}
} else {
echo "Tidak ada record";
}
mysqli_close($koneksi);
?>
</table>
</body>
</html>