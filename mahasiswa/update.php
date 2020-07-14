<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/websiteku/conn.php";

$nim=strip_tags($_POST['nim']);
$nama=strip_tags($_POST['nama']);
$fak=strip_tags($_POST['fakultas']);
$prodi=strip_tags($_POST['prodi']);
$email=strip_tags($_POST['email']);
$telp=strip_tags($_POST['telp']);
$alamat=strip_tags($_POST['alamat']);
$password=strip_tags($_POST['password']);
$md5password=md5($password);

$sql="UPDATE mahasiswa SET nama='$nama' , fakultas='$fak' ,prodi= '$prodi' , 
email='$email' ,telp= '$telp' , alamat='$alamat' ,password='$md5password' 
WHERE nim='$nim'"; 


$rs=mysqli_query($con,$sql);

if($rs){
    $_SESSION['msg']="Berhasil merubah Data : <b>$nim </b>";
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarsiswa&module=mahasiswa");
}else{
    $_SESSION['msg']="Error.. ". mysqli_error() ;
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=create&module=mahasiswa");
}
?>