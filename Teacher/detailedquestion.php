<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TRANG WEB THI TRẮC NGHIỆM</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="assets/AT-pro-logo.png"/>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="text/css" href="fontawesome-free/css/font.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fas fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item">
				<h2 class = "title">THI TRẮC NGHIỆM</h2>
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="./assets/pngtree-vector-users-icon-png-image_4144740 (1).jpg" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
						<li  class="dropdown-menu-item">
							<a href="inforteacher.php" class="dropdown-menu-link">
								<div>
									<i class="fas fa-user-tie"></i>
								</div>
								<span>Thông Tin</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="exit" class="dropdown-menu-link">
								<div>
									<i class="fas fa-sign-out-alt"></i>
								</div>
								<span>Thoát</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="sidebar">
		<ul class="sidebar-nav">
			<li class="sidebar-nav-item">
				<a href="createquestions.html" class="sidebar-nav-link">
					<div>
						<i class="fas fa-pencil-ruler"></i>
					</div>
					<span>
						 	Tạo Câu Hỏi
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item w3-teal">
				<a href="questionlibrary.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-book"></i>
					</div>
					<span>
						 	Thư Viện Câu Hỏi
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="checkthread.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-edit"></i>
					</div>
					<span>
						 	Tạo Đề
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="examinformation.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-poll-h"></i>
					</div>
					<span>
						 	Thông Tin Kỳ Thi
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="examresults.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-poll"></i>
					</div>
					<span>
						 	Kết Qủa Thi
					</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<div class="w3-bar w3-black">
		  <a href="home.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Trang chủ</a>
		  <a href="createexam.html" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Tạo kỳ thi</a>
		  <a href="exammanagement.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Quản lý kỳ thi</a>
		</div>

		<form class="w3-container w3-card-4" action="updatequestion.php" method="POST">
			<?php 
				include("connect.php");
				mysqli_query($conn, "set names utf8");
				$idcauhoi = $_POST["idcauhoi"];
				$_SESSION['idcauhoi']=$idcauhoi;
				if(isset($_POST["delete"])){
					require("deletequestion.php");
				}
				$sql = "select * from thuviencauhoi where idcauhoi='".$idcauhoi."'";
				$result = mysqli_query($conn, $sql);
				if($row = mysqli_fetch_array($result)){
			?>
					<p>	
					<div class="w3-row-padding">
					    <div class="w3-half"><b>Khối:</b>
					     	<select class="w3-select w3-border" style="width:39%" name="optionKhoiLop">
							    <?php 
									for ($i=10; $i <= 12 ; $i++) { 
								?>
								<option value="<?php echo $i; ?>" <?php if($i == $row['lop']){?>selected<?php } ?>><?php echo $i;?>									
								</option>
								<?php } ?>
						  	</select>
					   	</div>
					   	<div class="w3-half"><b>Môn Thi:</b>
					      	<select class="w3-select w3-border" style="width: 39%" name="optionIdMT" required>
							    <?php 
						  			$sql2 = "select * from monthi";
						  			$result2 = mysqli_query($conn, $sql2);
						  			while ($row2 = mysqli_fetch_array($result2)) {
						  		?>
								<option value="<?php echo $row2['idmon']; ?>" <?php if($row['idmon'] == $row2['idmon']){?>selected<?php } ?>>
									<?php echo $row2['tenmon'];?>									
								</option>
								<?php } ?>
						  	</select>
				      	</div>
				    </div>		
					</p>

					<div class="w3-row-padding">
						<div class="w3-half"><b>Câu Hỏi:</b>
							<textarea class="w3-input w3-border" style="width: 153%" rows="3" name="cauHoi" cols="70" required><?php echo $row['cauhoi'];?></textarea>
						</div>
					</div>

					<div class="w3-row w3-section">
					  	<div class="w3-col" style="width:50px"><strong>Câu đúng:</strong></div>
					    <div class="w3-rest"><strong>Lựa chọn:</strong></div>
					</div>	
					<div class="w3-row w3-section">
			  			<div class="w3-col" style="width:50px">
			  				<input class="w3-radio" type="radio" name="dapAn" value="1" <?php if($row['cautraloidung'] == $row['dapan1']){?>checked<?php } ?>>
			  			</div>
			    		<div class="w3-rest">
			      			<input class="w3-input w3-border" style="width: 74%" name="dapAn1" type="text" placeholder="Đáp án A" value="<?php echo $row['dapan1'];?>" required>
			    		</div>
					</div>
					<div class="w3-row w3-section">
			  			<div class="w3-col" style="width:50px">
			  				<input class="w3-radio" type="radio" name="dapAn" value="2" <?php if($row['cautraloidung'] == $row['dapan2']){?>checked<?php } ?>>
			  			</div>
			    		<div class="w3-rest">
			      			<input class="w3-input w3-border" style="width: 74%" name="dapAn2" type="text" placeholder="Đáp án B" value="<?php echo $row['dapan2'];?>" required>
			    		</div>
					</div>
					<div class="w3-row w3-section">
			  			<div class="w3-col" style="width:50px">
			  				<input class="w3-radio" type="radio" name="dapAn" value="3" <?php if($row['cautraloidung'] == $row['dapan3']){?>checked<?php } ?>>
			  			</div>
			    		<div class="w3-rest">
			      			<input class="w3-input w3-border" style="width: 74%" name="dapAn3" type="text" placeholder="Đáp án C" value="<?php echo $row['dapan3'];?>" required>
			    		</div>
					</div>
					<div class="w3-row w3-section">
			  			<div class="w3-col" style="width:50px">
			  				<input class="w3-radio" type="radio" name="dapAn" value="4" <?php if($row['cautraloidung'] == $row['dapan4']){?>checked<?php } ?>>
			  			</div>
			    		<div class="w3-rest">
			      			<input class="w3-input w3-border" style="width: 74%" name="dapAn4" type="text" placeholder="Đáp án D" value="<?php echo $row['dapan4'];?>" required>
			    		</div>
					</div>

					<p>
						<div class="w3-row-padding">
							<div class="w3-half">
								<textarea class="w3-input w3-border" style="width: 154%" rows="2" name="phanHoi" cols="70" placeholder="Nhập phản hồi"><?php echo $row['phanhoi'];?></textarea>
							</div>
						</div>
					</p>
					<p>
						&emsp;<button name="update" class="w3-btn w3-teal">Cập Nhật</button>
					</p>
		</form>
		<?php } ?>
  	</div>
	
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>
</html>