<?php
	include("connect.php");
	mysqli_query($conn,"set names utf8");
    $idTenMonThi = $_POST["optionIdMT"];
    $khoiLop = $_POST["optionKhoiLop"];
    $cauHoi = $_POST["cauHoi"];
	$dapAn1 = $_POST["dapAn1"];
	$dapAn2 = $_POST["dapAn2"];
	$dapAn3 = $_POST["dapAn3"];
	$dapAn4 = $_POST["dapAn4"];
	$dapAn = $_POST["dapAn"];
    $phanHoi = $_POST["phanHoi"];
    

	if($dapAn == 1){
		$dapAnDung = "A";
		$cauTraLoiDung = $dapAn1;
	}
	elseif ($dapAn == 2) {
		$dapAnDung = "B";
		$cauTraLoiDung = $dapAn2;
	}
	elseif ($dapAn == 3) {
		$dapAnDung = "C";
		$cauTraLoiDung = $dapAn3;
	}
	else{
		$dapAnDung = "D";
		$cauTraLoiDung = $dapAn4;
	}


	if(isset($_POST["save"]))
	{
		$sql = "insert into thuviencauhoi(idmon, lop, cauhoi, dapan1, dapan2, dapan3, dapan4, dapandung, cautraloidung, phanhoi) 
		values('".$idTenMonThi."','".$khoiLop."','".$cauHoi."','".$dapAn1."','".$dapAn2."','".$dapAn3."', '".$dapAn4."', '".$dapAnDung."', '".$cauTraLoiDung."', '".$phanHoi."')";
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('Tạo câu hỏi thành công.'); window.location='http://localhost:8081/ThiTN/Teacher/createquestions.html'</script>";
		}
		else{
			echo "<script>alert('FAIL!'); window.location='http://localhost:8081/ThiTN/Teacher/createquestions.html'</script>";
		}			
	}
	mysqli_close($conn);
?>