<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/websiteku/conn.php";
$kodemk=$_GET['kodemk'];
$sql="DELETE FROM matkul where kodemk='$kodemk'";
$rs=mysqli_query($con,$sql);
if($rs){
    $_SESSION['msg']="Berhasil menghapus Data : <b>$kodemk </b>";
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarmatkul&module=matkul");
}else{
    $_SESSION['msg']="Error.. ". mysqli_error() ;
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarmatkul&module=matkul");
}