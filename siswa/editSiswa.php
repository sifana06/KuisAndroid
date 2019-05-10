<?php

$kode = @$_GET['nis'];

require_once('koneksi.php');

$sql = "SELECT * FROM tb_siswa WHERE nis=$nis";

$r = mysqli_query($con,$sql);

$result = array();
@$row = mysqli_fetch_array($r);
array_push($result,array(
    "nis"=>$row['nis'],
    "nama"=>$row['nama'],
    "alamat"=>$row['alamat']
));

echo json_encode(array('result'=>$result));
mysqli_close($con);
?>