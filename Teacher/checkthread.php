<?php 
	session_start();
	include("connect.php");
	$sql = "select * from dethi where idkythi='".$_SESSION['idkythi']."'";
	$result = mysqli_query($conn, $sql);
	//Kiem tra ky thi da tao de chua
	//Neu da tao de thi chuyen sang trang thread.php
	//Neu chua chuyen sang trang createthreads.php
	if($row=mysqli_fetch_array($result)){
		$_SESSION['iddethi'] = $row['iddethi'];
		header('location:thread.php');
	}
	else{
		header('location:createthreads.php');
	}

	mysqli_close($conn);
?>