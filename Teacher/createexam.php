<?php
	session_start();
	include("connect.php");
	$idTenKyThi = $_POST["optionIdKT"];
    $khoiLop = $_POST["optionKhoiLop"];
    $idTenMonThi = $_POST["optionIdMT"];
	$ngayThi = $_POST["tday"];
    $thoiLuong = $_POST["quantity"];
    $ghiChu = $_POST["cmt"];
    
	if(isset($_POST["create"]))
	{
		// echo $_SESSION['magv'];
		// //Kiểm tra kỳ thi đã tồn tại chưa
		$sql = "select * from kythi where idtenkt='".$idTenKyThi."' and khoi='".$khoiLop."' and idmon='".$idTenMonThi."'";
		$kt = mysqli_query($conn,$sql);
		if(mysqli_num_rows($kt) > 0)
		{
			echo "<script>alert('Kỳ thi đã tồn tại!.'); window.location='http://localhost:8081/ThiTN/Teacher/createexam.html'</script>";
		}
		else
		{
			$sql1 = "insert into kythi(magv, idtenkt, khoi, idmon, ngaythi, thoiluong, ghichu) 
			values('".$_SESSION['magv']."','".$idTenKyThi."','".$khoiLop."','".$idTenMonThi."','".$ngayThi."','".$thoiLuong."', '".$ghiChu."')";
			if(mysqli_query($conn, $sql1)){
				echo "<script>alert('Tạo kỳ thi thành công!.'); window.location='http://localhost:8081/ThiTN/Teacher/createexam.html'</script>";
			}
			else{
				echo "<script>alert('FAIL!.'); window.location='http://localhost:8081/ThiTN/Teacher/createexam.html'</script>";
			}
			
		}
	}
	mysqli_close($conn);
?>