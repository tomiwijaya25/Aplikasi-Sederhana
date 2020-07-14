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

$sql="INSERT INTO mahasiswa values ('$nim','$nama' , '$fak' , '$prodi' , '$email' , '$telp' , '$alamat' , '$md5password')";

$rs=mysqli_query($con,$sql);
if($nim=='') {
    $_SESSION['msg']="Error.. data <b>NIM </b> Tidak boleh kosong";
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarsiswa&module=mahasiswa");
}elseif($rs){
    $_SESSION['msg']="Berhasil menambahkan Data : <b>$nama </b>";
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarsiswa&module=mahasiswa");
}else{
    $_SESSION['msg']="Error.. ". mysqli_error() ;
    header("Location: http://localhost/websiteku/dashboard/index.php?menu=daftarsiswa&module=daftarsiswa");
}
?>