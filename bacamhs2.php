<?php
	include('crudmhs.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h2>Daftar Mahasiswa</h2>
	<?php
		//$sql ="select * from mahasiswa"; #select * from mahasiswa where jurusan = 'MI'
		//$data = bacaMhs($sql); #bacasemuaMhs() #bacaMhsPerjurusan('TI')
		//Latihan 1
		$data = bacaSemuaMhs();
		if($data == null) {
			echo "Tidak ada data mahasiswa";
		} else {
	?>
	<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>JenisKelamin</th>
			<th>Jurusan</th>
		</tr>
	<?php 
		foreach($data as $mhs) {
			$nim = $mhs['nim'];
			$nama = $mhs['nama'];
			$kelamin = $mhs['kelamin'];
			$jurusan = $mhs['jurusan'];
			echo "
				<tr>
					<td>$nim</td>
					<td>$nama</td>
					<td>$kelamin</td>
					<td>$jurusan</td>
				</tr>
			";
		}
		echo '</table>';
		}
	?>
</body>
</html> 
