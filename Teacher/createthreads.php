<?php session_start(); ?>
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

	<style>
		body {
  margin: 0;
  min-width: 250px;
}

/* Include the padding and border in an element's total width and height */
* {
  box-sizing: border-box;
}

/* Remove margins and padding from the list */
ul {
  margin: 0;
  padding: 0;
}

/* Style the list items */
.ulli{
  cursor: pointer;
  position: relative;
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
}

/* Set all odd list items to a different color (zebra-stripes) */
ul li:nth-child(odd) {
  background: #f9f9f9;
}

/* Darker background-color on hover */
ul li:hover {
  background: #ddd;
}

/* When clicked on, add a background color and strike out text */
ul li.checked {
  background: #888;
  color: #fff;
  
}

/* Add a "checked" mark when clicked on */
ul li.checked::before {
  content: '';
  position: absolute;
  border-color: #fff;
  border-style: solid;
  border-width: 0 2px 2px 0;
  top: 10px;
  left: 16px;
  transform: rotate(45deg);
  height: 15px;
  width: 7px;
}



/* Style the input */
input {
  margin: 0;
  border: none;
  border-radius: 0;
  width: 75%;
  padding: 10px;
  float: left;
  font-size: 16px;
}

/* Style the "Add" button */
.addBtn {
  padding: 10px;
  width: 25%;
  background: #d9d9d9;
  color: #555;
  float: left;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 0;
}

.addBtn:hover {
  background-color: #bbb;
}


form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
	</style>
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
							<a href="exit.php" class="dropdown-menu-link">
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
			<li class="sidebar-nav-item">
				<a href="questionlibrary.php" class="sidebar-nav-link">
					<div>
						<i class="fas fa-book"></i>
					</div>
					<span>
						 	Thư Viện Câu Hỏi
					</span>
				</a>
			</li>
			<li class="sidebar-nav-item w3-teal">
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

		<p>
		<form class="example" style="margin:auto;max-width:300px">
		  <input type="text" placeholder="Tìm kiếm câu hỏi.." name="s">
		  <button name="btnsearch"><i class="fa fa-search"></i></button>
		</form>
		</p>

		<table class="w3-table-all w3-margin-top w3-card-4" id="myTable">
		    <thead>
		        <tr>
		            <th>Id</th>
		            <th>Môn</th>
		            <th>Lớp</th>
		            <th>Câu hỏi</th>
		            <th>Đáp án đúng</th>
		            <th style="font-size: 1.5em;"><i class="fas fa-clipboard-check"></i></th>
		        </tr>
		    </thead>
		    <tbody>
		    	<?php 
			        include("connect.php");
			        mysqli_set_charset($conn, "utf8");
			        $i=-1;

			        $sql3 = "select * from dethi where idkythi='".$_SESSION['idkythi']."'";
			        $result3 = mysqli_query($conn, $sql3);
					
			        //Lay cac thong tin cua ky thi
					$sql2 = "select * from kythi where idkythi = '".$_SESSION['idkythi']."'";
					$result2 = mysqli_query($conn, $sql2);
					$row2 = mysqli_fetch_array($result2);

					//Lay thong tin cac hoi dua vao mon va lop cua kythi trong thuviencauhoi
					if((isset($_GET['s']) && $_GET['s'] != '') || isset($_GET['btnsearch'])){
						$sql = "select * from thuviencauhoi where idmon='".$row2['idmon']."' and lop='".$row2['khoi']."' and cauhoi like '%".$_GET['s']."%'";
					} else{
						$sql = "select * from thuviencauhoi where idmon='".$row2['idmon']."' and lop='".$row2['khoi']."'";
					}

					$result = mysqli_query($conn, $sql);
				?>		            	
				<form action="maincreatethread.php" method="POST">	
				<?php	
		        	while ($row = mysqli_fetch_array($result))
		        	{
		        		$i++;
		        ?>
		            <tr>
		                <td style="width: 7%">
		                	<input type="text" style="width: 80%" name="idcauhoi" readonly value="<?php echo $row['idcauhoi']; ?>">
		                </td>
		                <?php $sql1 = "select * from monthi where idmon = '".$row['idmon']."'";
		               	$result1 =mysqli_query($conn, $sql1);
		        		if ($row1 = mysqli_fetch_array($result1)){
		            	?>
		                <td style="width: 10%"><?php echo $row1['tenmon']; ?></td>
		            	<?php }?>
		                <td style="width: 5%"><?php echo $row['lop']; ?></td>
		                <td style="width: 45%"><?php echo $row['cauhoi']; ?></td>
		                <td style="width: 25%"><?php echo $row['dapandung']; ?></td>
		                <td>
		                	<input class="w3-check" type="checkbox" name="<?php echo $i; ?>" value="<?php echo $row['idcauhoi'];?>" >
		                </td>
		            </tr>
		        <?php  
		        	} 
		        	$_SESSION['socau']=$i;
		        ?>
		        	<tr>
		        		<?php if(mysqli_fetch_array($result3)){?>
		                <button name="addquestion" class="w3-button w3-border w3-teal">
		                	<i class="fas fa-clipboard-list"></i>&nbsp;Thêm Câu
		                </button>
		            <?php } else{?>
		                <button name="createthread" class="w3-button w3-border w3-teal">
		                	<i class="fas fa-clipboard-list"></i>&nbsp;Tạo Đề
		                </button>
		            <?php } ?>
		            </tr>
		        <?php 
		        	mysqli_close($conn);
		        ?>
		        </form>
		    </tbody>
		</table>
		<!-- <ul id="myUL">
		  <li>Hit the gym</li>
		  <li class="checked">Pay bills</li>
		  <li>Meet George</li>
		  <li>Buy eggs</li>
		  <li>Read a book</li>
		  <li>Organize office</li>
		</ul>
		<script>
		// Add a "checked" symbol when clicking on a list item
		var list = document.querySelector('ul');
		list.addEventListener('click', function(ev) {
		  if (ev.target.tagName === 'LI') {
		    ev.target.classList.toggle('checked');
		  }
		}, false);

		// Create a new list item when clicking on the "Add" button
		function newElement() {
		  var li = document.createElement("li");
		  var inputValue = document.getElementById("myInput").value;
		  var t = document.createTextNode(inputValue);
		  li.appendChild(t);
		  if (inputValue === '') {
		    alert("You must write something!");
		  } else {
		    document.getElementById("myUL").appendChild(li);
		  }
		  document.getElementById("myInput").value = "";

		  var span = document.createElement("SPAN");
		  var txt = document.createTextNode("\u00D7");
		  span.className = "close";
		  span.appendChild(txt);
		  li.appendChild(span);

		  for (i = 0; i < close.length; i++) {
		    close[i].onclick = function() {
		      var div = this.parentElement;
		      div.style.display = "none";
		    }
		  }
		}
	</script> -->

  	</div>
	
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	
	<!-- end import script -->
</body>
</html>