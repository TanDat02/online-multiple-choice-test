<?php
require_once ('dbhelp.php');

$mahs = $hoten = $lop = $khoi = $taikhoan = $matkhau =
$diachi = $email = $ngaysinh = $quequan = $gioitinh = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['mahs'])) {
		$mahs = $_POST['mahs'];
	}

	if (isset($_POST['hoten'])) {
		$hoten = $_POST['hoten'];
	}

	if (isset($_POST['lop'])) {
		$lop = $_POST['lop'];
	}

	if (isset($_POST['khoi'])) {
		$khoi = $_POST['khoi'];
	}

	if (isset($_POST['taikhoan'])) {
		$taikhoan = $_POST['taikhoan'];
	}

	if (isset($_POST['matkhau'])) {
		$matkhau = $_POST['matkhau'];
	}

	if (isset($_POST['diachi'])) {
		$diachi = $_POST['diachi'];
	}

	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}

	if (isset($_POST['ngaysinh'])) {
		$ngaysinh = $_POST['ngaysinh'];
	}

	if (isset($_POST['quequan'])) {
		$quequan = $_POST['quequan'];
	}

	if (isset($_POST['gioitinh'])) {
		$gioitinh = $_POST['gioitinh'];
	}

	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}

	$mahs = str_replace('\'', '\\\'', $mahs);
	$hoten = str_replace('\'', '\\\'', $hoten);
	$lop = str_replace('\'', '\\\'', $lop);
	$khoi = str_replace('\'', '\\\'', $khoi);
	$taikhoan = str_replace('\'', '\\\'', $taikhoan);
	$matkhau = str_replace('\'', '\\\'', $matkhau);
	$diachi = str_replace('\'', '\\\'', $diachi);
	$email  = str_replace('\'', '\\\'', $email);
	$ngaysinh = str_replace('\'', '\\\'', $ngaysinh);
	$quequan = str_replace('\'', '\\\'', $quequan);
	$gioitinh = str_replace('\'', '\\\'', $gioitinh);
	if ($s_id != '') {
		//update
		$sql = "update hocsinh set mahs = '$mahs', hoTen = '$hoten', lop = '$lop' , khoi = '$khoi', taikhoan = '$taikhoan', matkhau = '$matkhau', diaChi = '$diachi', Email = '$email', ngaySinh = '$ngaysinh', queQuan = '$quequan', gioitinh = '$gioitinh' where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into hocsinh (mahs, hoTen, lop, khoi, taikhoan, matkhau, diaChi, Email, ngaySinh, queQuan, gioitinh) value ('$mahs', '$hoten', '$lop', '$khoi', '$taikhoan', '$matkhau', '$diachi', '$email', '$ngaysinh', '$quequan', '$gioitinh')";
	}

	// echo $sql;

	execute($sql);

	header('Location: hs.php');
	die();
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from hocsinh where id = '.$id;
	$hocsinhList = executeResult($sql);
	if ($hocsinhList != null && count($hocsinhList) > 0) {
		$hocsinh        = $hocsinhList[0];
		$mahs = $hocsinh['mahs'];
		$hoten = $hocsinh['hoTen'];
		$lop = $hocsinh['lop'];
		$khoi = $hocsinh['khoi'];
		$taikhoan = $hocsinh['taikhoan'];
		$matkhau = $hocsinh['matkhau'];
		$diachi  = $hocsinh['diaChi'];
		$email  = $hocsinh['Email'];
		$ngaysinh = $hocsinh['ngaySinh'];
		$quequan = $hocsinh['queQuan'];
		$gioitinh  = $hocsinh['gioitinh'];
	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thông tin học sinh</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            	<input type="number" name="id" value="<?=$id?>" style="display: none;">
                                <input type="text" class="form-control" id="" name="mahs" placeholder="Mã học sinh" value="<?=$mahs?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="hoten" placeholder="Họ và tên" value="<?=$hoten?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="lop" placeholder="Lớp" value="<?=$lop?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="khoi" placeholder="Khối" value="<?=$khoi?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="taikhoan" placeholder="Tài khoản" value="<?=$taikhoan?>"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="matkhau" placeholder="Mật khẩu" value="<?=$matkhau?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="diachi" placeholder="Địa chỉ" value="<?=$diachi?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="email" placeholder="Email" value="<?=$email?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="ngaysinh" placeholder="Ngày sinh" value="<?=$ngaysinh?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="quequan" placeholder="Quê quán" value="<?=$quequan?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="gioitinh" placeholder="Giới tính" value="<?=$gioitinh?>"/>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success" onclick="back()">Trở lại</button>
                    <script>
                    	function back(){
                    		history.back();
                    	}
                    </script>
                    <button name="add" class="btn btn-success">Lưu</button>		
				</form>
			</div>
		</div>
	</div>
</body>
</html>