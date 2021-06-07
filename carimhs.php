<?php
	include('crudmhs.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h2>Cari Mahasiswa</h2>

	<form action="carimhs.php" method="post">
		NIM:
		<input type="text" name="nim">
		<input type="submit" name="submit" value="cari">
	</form>

	<?php
		//Tugas Praktikum Pertemuan 8 No 3
		if(isset($_POST['nim'])){
			$nim = $_POST['nim'];
			$data = cariMhsDariNim($nim);
			if($data == null) {
				echo "Tidak ada data mahasiswa";
			} else {
				?>
				<table>
				<?php 
					foreach($data as $mhs) {
						$nim = $mhs['nim'];
						$nama = $mhs['nama'];
						$kelamin = $mhs['kelamin'];
						$jurusan = $mhs['jurusan'];
						echo "
							<tr>
								<td>Nim</td>
								<td>&emsp; $nim</td>
							</tr><br>
							<tr>
								<td>Nama</td>
								<td>&emsp; $nama</td>
							</tr><br>
							<tr>
								<td>Kelamin</td>
								<td>&emsp; $kelamin</td>
							</tr><br>
							<tr>
								<td>Jurusan</td>
								<td>&emsp; $jurusan</td>
							</tr>
						";
                    }
					echo '</table>';
                }
            }
	?>
</body>
</html> 