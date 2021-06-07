<?php
require_once 'koneksiakad.php';
// membaca (select) tabelmahasiswa
// jikaberhasil, hasil array drbaris-baris data
// dansetiapbaris data berupa array darinama-nama field
// jikatidakada,hasilberupanilai null
Function bacaMtKuliah($sql){
$data = array();
$koneksi = koneksiAkademik();
$hasil = mysqli_query($koneksi, $sql);
// jikatidakada record, hasilberupa null
if (mysqli_num_rows($hasil) == 0) {
mysqli_close($koneksi);
return null;
}
$i=0;
while($baris = mysqli_fetch_assoc($hasil)){
$data[$i]['kode']= $baris['kode'];
$data[$i]['nama'] = $baris['nama'];
$data[$i]['sks'] = $baris['sks'];
$i++;
}
mysqli_close($koneksi);
return $data;
}

function tambahMtKuliah($kode, $nama, $sks){
    $koneksi = koneksiAkademik();
    $sql = "insert into matakuliah values(
    '$kode', '$nama', '$sks')";
    $hasil = 0;
    if(mysqli_query($koneksi, $sql))
    $hasil = 1;
    mysqli_close($koneksi);
    return $hasil;
    }

    function hapusMtKuliah($kode) {
        $koneksi = koneksiAkademik();
        $sql = "delete from matakuliah where kode='$kode'";
        if (!mysqli_query($koneksi, $sql)){
        die('Error: ' . mysqli_error());
        }
        $hasil = mysqli_affected_rows($koneksi);
        mysqli_close($koneksi);
        return $hasil;
        }

        function cariMtKuliah($kode){
            $koneksi = koneksiAkademik();
            $sql = "select * from matakuliah where kode='$kode'";
            $hasil = mysqli_query($koneksi, $sql);
            if(mysqli_num_rows($hasil)>0){
            $baris=mysqli_fetch_assoc($hasil);
            $data['kode']=$baris['kode'];
            $data['nama'] = $baris['nama'];
            $data['sks'] = $baris['sks'];
            mysqli_close($koneksi);
            return $data;
            }else{
            mysqli_close($koneksi);
            return null;
            }
            }

           
function ubahMtKuliah($kode, $nama, $sks){
    $koneksi = koneksiAkademik();
    $sql = "UPDATE matakuliah
    SET nama ='$nama',
    sks = '$sks',
    WHERE kode='$kode'";
    if (mysqli_query($koneksi, $sql)) {
    $hasil = true;
    } else {
    $hasil = "Error mengubah record: " . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
    return $hasil;
    }