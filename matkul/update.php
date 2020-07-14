<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/websiteku/conn.php";

$kodemk=strip_tags($_POST['kodemk']);
$namamk=strip_tags($_POST['namamk']);
$sks=strip_tags($_POST['sks']);
$hari=strip_tags($_POST['hari']);
$namadosen=strip_tags($_POST['namadosen']);
$gedung=strip_tags($_POST['gedung']);
$lantai=strip_tags($_POST['lantai']);
$ruangan=strip_tags($_POST['ruangan']);

$sql="UPDATE matkul SET kodemk='$kodemk' , namamk='$namamk' ,sks= '$sks' , 
hari='$hari' ,namadosen= '$namadosen' , gedung='$gedung' ,lantai='$lantai' , ruangan='$ruangan'
WHERE kodemk='$kodemk'"; 


$rs=mysqli_query($con,$sql);

if($rs){
    $_SESSION['msg']="Berhasil merubah Kode : <b>$kodemk </b>";
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarmatkul&module=matkul");
}else{
    $_SESSION['msg']="Error.. ". mysqli_error() ;
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=create&module=matkul");
}
?>