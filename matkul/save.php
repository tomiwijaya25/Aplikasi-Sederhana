<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/websiteku/conn.php";

$kodemk		=strip_tags($_POST['kodemk']);
$namamk		=strip_tags($_POST['namamk']);
$sks		=strip_tags($_POST['sks']);
$hari		=strip_tags($_POST['hari']);
$namadosen	=strip_tags($_POST['namadosen']);
$gedung		=strip_tags($_POST['gedung']);
$lantai		=strip_tags($_POST['lantai']);
$ruangan	=strip_tags($_POST['ruangan']);

$sql="INSERT INTO matkul values ('$kodemk','$namamk' , '$sks' , '$hari' , '$namadosen' , '$gedung' , '$lantai' , '$ruangan')";

$rs=mysqli_query($con,$sql);
if($kodemk=='') {
    $_SESSION['msg']="Error.. data <b>Kode Matkul </b> Tidak boleh kosong";
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=create&module=matkul");
}elseif($rs){
    $_SESSION['msg']="Berhasil menambahkan Kode : <b>$kodemk </b>";
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarmatkul&module=matkul");
}else{
    $_SESSION['msg']="Error.. ". mysqli_error() ;
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarmatkul&module=matkul");
}
?>