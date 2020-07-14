<?php
	session_start();
		include_once "conn.php";
			$email=$_POST['email'];
			$password=$_POST['password'];
			$md5password=md5($password);
			$sql="select * from mahasiswa where email='$email' AND
			password='$md5password'";
			$rs=mysqli_query($con,$sql);
			$rec=mysqli_fetch_assoc($rs);
			if($rec){
			 unset($_SESSION['error']);
			 $_SESSION['user']=$rec;
			 	header("Location: http://localhost/websiteku/dashboard/index.php");
			}else{
			 $_SESSION['error']=true;
	 			header("Location: http://localhost/websiteku");
	}
?>