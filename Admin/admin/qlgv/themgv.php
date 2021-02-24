 <?php
 $conn = mysqli_connect('localhost', 'root','', 'thion');
	if(isset($_POST['add'])){
		$magv = $_POST['magv'];
		$hoten = $_POST['hoten'];
		$gioitinh = $_POST['gioitinh'];
		$sodienthoai = $_POST['sodienthoai'];
		$quequan = $_POST['quequan'];
		$trinhdo = $_POST['trinhdo'];
		$idmon = $_POST['idmon'];
		$lop = $_POST['lop'];
		$email = $_POST['email'];
		$taikhoan = $_POST['taikhoan'];
		$matkhau = $_POST['matkhau'];	
		$sql = "select * from giaovien where magv='$magv'";
		$query = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($query);
		if($num == 0){

			$sql2 = "INSERT INTO giaovien (magv, hoTen, gioitinh, sodienthoai, quequan, trinhdo, idmon, lop, email, taikhoan, matkhau) VALUES ('$magv', '$hoten', '$gioitinh', '$sodienthoai', '$quequan', '$trinhdo', '$idmon', '$lop', '$email', '$taikhoan', '$matkhau')";
			$them = mysqli_query($conn, $sql2);
			if($them){
				echo "<script>alert('Thêm thành công!'); window.location='http://localhost:8081/ThiTN/Admin/admin/qlgv/gv.php'</script>";
			} else{
				echo "<script>alert('Thêm thất bại!'); </script>";	
			}

		} else{
			echo "<script>alert('Mã đã tồn tại!'); window.location='http://localhost:8081/ThiTN/Admin/admin/qlgv/gv.php'</script>";
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông tin giáo viên</title>
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
				<form action="" method="post">
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            	<label>Mã giáo viên</label>
                                <input type="text" required="true" class="form-control" id="" name="magv" placeholder="Mã giáo viên" value=""/>
                            </div>
                            <div class="form-group">
                            	<label>Họ và tên</label>
                                <input type="text" required="true" class="form-control" id="" name="hoten" placeholder="Họ và tên" value=""/>
                            </div>
                            <div class="form-group">
                            	<label>Giới tính</label>
                                <input type="text" required="true" class="form-control" id="" name="gioitinh" placeholder="Giới tính" value=""/>
                            </div>
                            <div class="form-group">
                            	<label>Số điện thoại</label>
                                <input type="text" required="true" class="form-control" id="" name="sodienthoai" placeholder="SĐT" value=""/>
                            </div>
                            <div class="form-group">
                            	<label>Quê quán</label>
                                <input type="text" required="true" class="form-control" id="" name="quequan" placeholder="Quê quán" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            	<label>Trình độ</label>
                                <input type="text" required="true" class="form-control" id="" name="trinhdo" placeholder="Trình độ" value=""/>
                            </div>
                            <div class="form-group">
                            	<label>ID môn</label>
                                <input type="text" required="true" class="form-control" id="" name="idmon" placeholder="ID môn" value=""/>
                            </div>
                            <div class="form-group">
                            	<label>Lớp</label>
                                <input type="text" required="true" class="form-control" id="" name="lop" placeholder="Lớp" value=""/>
                            </div>
                            <div class="form-group">
                            	<label>Email</label>
                                <input type="text" required="true" class="form-control" id="" name="email" placeholder="Email" value=""/>
                            </div>
                            <div class="form-group">
                            	<label>Tài khoản</label>
                                <input type="text" required="true" class="form-control" id="" name="taikhoan" placeholder="Tài khoản" value=""/>
                            </div>
                            <div class="form-group">
                            	<label>Mật khẩu</label>
                                <input type="text" required="true" class="form-control" id="" name="matkhau" placeholder="Mật khẩu" value=""/>
                            </div>
                        </div>
                    </div>
                    <script>
                    	function back(){
                    		history.back();
                    	}
                    </script>
                    <button name="add" class="btn btn-success">Thêm</button>				
				</form>
			</div>
		</div>
	</div>
</body>
</html>