<?php
require_once('koneksi.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat= $_POST['alamat'];
    //$warna = $_POST['warna'];

    if (empty($nama)|| empty($alamat)) {
        echo "Tidak Boleh Kosong...";
    }

    elseif(!preg_match("/^[a-zA-z]*$/", $nama)){
        echo "Nama tidak boleh angka";
    } else {

    $sql = "INSERT INTO tb_siswa (nis,nama,alamat) VALUES ('$nis','$nama','$alamat')";


    if(mysqli_query($con,$sql)){
        echo 'Berhasil';
    }else{
        echo 'Gagal';
    }
}
    mysqli_close($con);
}
?>