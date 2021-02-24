<?php
require_once ('dbhelp.php');

$magv = $hoten = $gioitinh = $sodienthoai = $quequan = $trinhdo =
$idmon = $lop = $email = $taikhoan = $matkhau = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['magv'])) {
		$magv = $_POST['magv'];
	}

	if (isset($_POST['hoten'])) {
		$hoten = $_POST['hoten'];
	}

	if (isset($_POST['gioitinh'])) {
		$gioitinh = $_POST['gioitinh'];
	}

	if (isset($_POST['sodienthoai'])) {
		$sodienthoai = $_POST['sodienthoai'];
	}

	if (isset($_POST['quequan'])) {
		$quequan = $_POST['quequan'];
	}

	if (isset($_POST['trinhdo'])) {
		$trinhdo = $_POST['trinhdo'];
	}

	if (isset($_POST['idmon'])) {
		$idmon = $_POST['idmon'];
	}

	if (isset($_POST['lop'])) {
		$lop = $_POST['lop'];
	}

	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}

	if (isset($_POST['taikhoan'])) {
		$taikhoan = $_POST['taikhoan'];
	}

	if (isset($_POST['matkhau'])) {
		$matkhau = $_POST['matkhau'];
	}

	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}

	$magv = str_replace('\'', '\\\'', $magv);
	$hoten      = str_replace('\'', '\\\'', $hoten);
	$gioitinh  = str_replace('\'', '\\\'', $gioitinh);
	$sodienthoai       = str_replace('\'', '\\\'', $sodienthoai);
	$quequan = str_replace('\'', '\\\'', $quequan);
	$trinhdo      = str_replace('\'', '\\\'', $trinhdo);
	$idmon  = str_replace('\'', '\\\'', $idmon);
	$lop       = str_replace('\'', '\\\'', $lop);
	$email      = str_replace('\'', '\\\'', $email);
	$taikhoan  = str_replace('\'', '\\\'', $taikhoan);
	$matkhau       = str_replace('\'', '\\\'', $matkhau);
	if ($s_id != '') {
		//update
		$sql = "update giaovien set magv = '$magv', hoTen = '$hoten', gioitinh = '$gioitinh' , sodienthoai = '$sodienthoai', quequan = '$quequan', trinhdo = '$trinhdo', idmon = '$idmon', lop = '$lop', email = '$email', taikhoan = '$taikhoan', matkhau = '$matkhau' where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into giaovien (magv, hoTen, gioitinh, sodienthoai, quequan, trinhdo, idmon, lop, email, taikhoan, matkhau) value ('$magv', '$hoten', '$gioitinh', '$sodienthoai', '$quequan', '$trinhdo', '$idmon', '$lop', '$email', '$taikhoan', '$matkhau')";
	}

	// echo $sql;

	execute($sql);

	header('Location: gv.php');
	die();
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from giaovien where id = '.$id;
	$giaovienList = executeResult($sql);
	if ($giaovienList != null && count($giaovienList) > 0) {
		$gv        = $giaovienList[0];
		$magv = $gv['magv'];
		$hoten      = $gv['hoTen'];
		$gioitinh  = $gv['gioitinh'];
		$sodienthoai = $gv['sodienthoai'];
		$quequan      = $gv['quequan'];
		$trinhdo  = $gv['trinhdo'];
		$idmon      = $gv['idmon'];
		$lop  = $gv['lop'];
		$email = $gv['email'];
		$taikhoan = $gv['taikhoan'];
		$matkhau  = $gv['matkhau'];
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
				<h2 class="text-center">Thông tin giáo viên</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            	<input type="number" name="id" value="<?=$id?>" style="display: none;">
                                <input type="text" class="form-control" id="" name="magv" placeholder="Mã giáo viên" value="<?=$magv?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="hoten" placeholder="Họ và tên" value="<?=$hoten?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="gioitinh" placeholder="Giới tính" value="<?=$gioitinh?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="sodienthoai" placeholder="SĐT" value="<?=$sodienthoai?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="quequan" placeholder="Quê quán" value="<?=$quequan?>"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="trinhdo" placeholder="Trình độ" value="<?=$trinhdo?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="idmon" placeholder="ID môn" value="<?=$idmon?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="lop" placeholder="Lớp" value="<?=$lop?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="email" placeholder="Email" value="<?=$email?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="taikhoan" placeholder="Tài khoản" value="<?=$taikhoan?>"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="matkhau" placeholder="Mật khẩu" value="<?=$matkhau?>"/>
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