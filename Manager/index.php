<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Học Sinh</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
			<!-- <li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li> -->
			<li class="nav-item dropdown">
				<a class="nav-link">
					<!-- <i class="fas fa-bell dropdown-toggle" data-toggle="notification-menu"></i> -->
					<!-- <span class="navbar-badge">15</span> -->
				</a>
				<ul id="notification-menu" class="dropdown-menu notification-menu">
					<div class="dropdown-menu-header">
						<span>
							Notifications
						</span>
					</div>
					<div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-gift"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
						<li class="dropdown-menu-item">
							<a href="#" class="dropdown-menu-link">
								<div>
									<i class="fas fa-tasks"></i>
								</div>
								<span>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									<br>
									<span>
										15/07/2020
									</span>
								</span>
							</a>
						</li>
					</div>
					<div class="dropdown-menu-footer">
						<span>
							View all notifications
						</span>
					</div>
				</ul>
			</li>
			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
						<div>
							<span>
									<p   class="dropdown-toggle" data-toggle="user-menu">
									<?php 
												if(isset($_SESSION['hoTen']) && $_SESSION['hoTen'] && $_SESSION['taikhoan']){
													echo 'Xin chào : '.$_SESSION['hoTen']. " [ ". $_SESSION['taikhoan']." ] ";
													
											}
											else{
												echo 'Bạn chưa đăng nhập';
											}
									?>
							</span>
						</div>
					<ul id="user-menu" class="dropdown-menu">
						<li  class="dropdown-menu-item">
							<a href="./InformationStudent/Information/index.php" class="dropdown-menu-link">
								<div>
									<i class="fas fa-user"></i>
								</div>
								<span>Thông tin cá nhân</span>
							</a>
					
						<li  class="dropdown-menu-item">
							<a href="/ThiTN/Manager/ChangePassword/Forgot/index.html" class="dropdown-menu-link">
								<div>
									<i class="fas fa-unlock-alt"></i>
								</div>
								<span>Đổi mật khẩu</span>
							</a>
						</li>
						<li  class="dropdown-menu-item">
							<a href="http://localhost:8081/ThiTN/Manager/Logins/Login/index.html" class="dropdown-menu-link">
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
				<a href="./ChangeInfomation/information.html" class="sidebar-nav-link">
					<div>
						<i class="fas fa-user"></i>
					</div>
					<span>
						Cập nhật thông tin			
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="http://localhost:8081/ThiTN/Quiz/kythi.php" class="sidebar-nav-link ">
					<div>
					<i class="fas fa-chalkboard-teacher"></i>
					</div>
					<span>
						Làm bài thi
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item">
				<a href="http://localhost:8081/ThiTN/Manager/Thongtinbailam/index.php" class="sidebar-nav-link ">
					<div>
					<i class="fas fa-user-graduate"></i>
					</div>
					<span>
						Thông tin bài làm
					</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<div class="row">
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-user"></i>
					</p>
					<h3>Quy định chung</h3>
					<p>Mỗi học sinh đăng nhập bằng chính tài khoản của mình.</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3>Hướng dẫn</h3>
					<p>Học sinh đăng nhập bằng tài khoản và mật khẩu để tiến hành thi.</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="far fa-bell"></i>
					</p>
					<h3>Thông báo chung</h3>
					<p>Học sinh theo dõi bảng thông báo để cập nhật thời gian thi chính xác</p>
				</div>
			</div>
			<div class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-danger">
					<p>
						<i class="fas fa-address-card"></i>
					</p>
					<h3>Thông tin liên hệ</h3>
					<p>Mọi chi tiết xin liên hệ Email: thptngomay@edu.com</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
					
						<h3>
							Thông báo lịch thi
						</h3>
						
					
					</div>
					
					<div class="card-content">
						<table>
						
							<thead>
								<tr>
									<th>Môn Thi</th>
									<th>Ngày diễn ra thi</th>
									<th>Thời lượng thi</th>
								</tr>
							</thead>
							<?php
							$conn = mysqli_connect("localhost", "root", "" , "thion");
							$sql = "select * from kythi";
							$result = mysqli_query($conn, $sql);
							mysqli_query($conn, "set names utf8");
											while($row = mysqli_fetch_array($result))
							{                        
					?>
					
							<tbody>
								<tr>
									<td text-align = "center"><?php echo $row['idkythi'];?></td>
									<td text-align = "center"><?php echo $row['thoiluong'];?> phút</td>
									<td text-align = "center"><?php echo $row['ngaythi'];?></td>
									<td>
										<span class="dot">
											
										</span>
									</td>
								</tr>
								
							</tbody>
							<?php } ?>
						</table>				
					</div>				
				</div>
			</div>
			
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>
</html>