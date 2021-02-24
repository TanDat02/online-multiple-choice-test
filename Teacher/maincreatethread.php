<?php
	session_start();
	include("connect.php");
	if(isset($_POST["createthread"])){
		$sql = "insert into dethi (idkythi) values('".$_SESSION['idkythi']."')";
		mysqli_query($conn, $sql);

		$sql1 = "select iddethi from dethi where idkythi='".$_SESSION['idkythi']."'";
		$result1 = mysqli_query($conn, $sql1);
		if($row1 = mysqli_fetch_array($result1)){

			for ($i=0; $i <= $_SESSION['socau']; $i++) { 
				if(isset($_POST["$i"])){
					// echo $_POST["$i"];
					$sql2 = "insert into cauhoidethi (iddethi, idcauhoi) values('".$row1['iddethi']."', '".$_POST["$i"]."')";
					mysqli_query($conn, $sql2);
				}
			}
			echo "<script>alert('Tạo đề thi thành công.'); window.location='http://localhost:8081/ThiTN/Teacher/checkthread.php'</script>";

		}
	}
	else{
		$sql1 = "select iddethi from dethi where idkythi='".$_SESSION['idkythi']."'";
		$result1 = mysqli_query($conn, $sql1);
		if($row1 = mysqli_fetch_array($result1)){

			for ($i=0; $i <= $_SESSION['socau']; $i++) { 
				if(isset($_POST["$i"])){
					// echo $_POST["$i"];
					$sql2 = "insert into cauhoidethi (iddethi, idcauhoi) values('".$row1['iddethi']."', '".$_POST["$i"]."')";
					mysqli_query($conn, $sql2);
				}
			}
			echo "<script>alert('Cập nhật đề thi thành công.'); window.location='http://localhost:8081/ThiTN/Teacher/thread.php'</script>";
		}
	}

	mysqli_close($conn);

	// foreach ($arrayquestion as $key => $value) {
	// 	echo $value;
	// }
?>