<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/websiteku/conn.php";
$nim=$_GET['nim'];
$sql="DELETE FROM mahasiswa where nim='$nim'";
$rs=mysqli_query($con,$sql);
if($rs){
    $_SESSION['msg']="Berhasil menghapus Data : <b>$nim </b>";
    header("Location:http://localhost/websiteku/dashboard/index.php?menu=daftarsiswa&module=mahasiswa");
}else{
    $_SESSION['msg']="Error.. ". mysqli_error() ;
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarsiswa&module=mahasiswa");
}