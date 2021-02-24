<?php
	session_start();
	include("connect.php");
	$idTenKyThi = $_POST["optionIdKT"];
    $khoiLop = $_POST["optionKhoiLop"];
    $idTenMonThi = $_POST["optionIdMT"];
	$ngayThi = $_POST["tday"];
    $thoiLuong = $_POST["quantity"];
    $ghiChu = $_POST["cmt"];
    
	if(isset($_POST["update"]))
	{
		$sql = "select * from kythi where idtenkt='".$idTenKyThi."' and khoi='".$khoiLop."' and idmon='".$idTenMonThi."'";
		$kt = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($kt);
		//Kiem tra ngaythi hay thoiluong co duoc thay doi?
		if($ngayThi!=$row['ngaythi'] || $thoiLuong!=$row['thoiluong']){
			$sql1 = "update kythi set idtenkt='".$idTenKyThi."', khoi='".$khoiLop."', idmon='".$idTenMonThi."', ngaythi='".$ngayThi."', thoiluong='".$thoiLuong."', ghichu='".$ghiChu."' where idkythi='".$_SESSION['idkythi']."'";
			// $result1 = mysqli_query($conn,$sql1);
			if(mysqli_query($conn,$sql1))
			{
				echo "<script>alert('Cập nhật kỳ thi thành công.'); window.location='http://localhost:8081/ThiTN/Teacher/examinformation.php'</script>";
			}
		}
		//->ngaythi va thoiluong khong doi
		//kiem tra idtenkt, khoi va idtenmt có thay đoi
		elseif(mysqli_num_rows($kt) > 0)
		{
			echo "<script>alert('Thông tin kỳ thi không thay đổi!.'); window.location='http://localhost:8081/ThiTN/Teacher/examinformation.php'</script>";
		}
	}
	mysqli_close($conn);
?>