<?php
require_once ('dbhelp.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lí Học sinh</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost:8081/ThiTN/Manager/Logins/Login/index.html"><span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-1 sidenav">
    <p><a href="http://localhost:8081/ThiTN/Admin/admin/qlgv/gv.php">Giáo viên</a></p>
    <p><a href="http://localhost:8081/ThiTN/Admin/admin/qlhs/hs.php">Học sinh</a></p>
    </div>
    <div class="col-sm-10 text-left"> 
      <h1>QUẢN LÍ HỌC SINH</h1>
      <hr>
      <form class="form-inline my-2 my-lg-0" method="get">
          <!-- <input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên"> -->
          <!-- <input class="form-control mr-sm-2" type="text" name="s" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên"> -->
      </form>
      <div class="panel-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>STT</th>
              <th>Mã học sinh</th>
              <th>Họ và tên</th>
              <th>Lớp</th>
              <th>Khối</th>
              <th>Tài khoản</th>
              <th>Mật khẩu</th>
              <th>Địa chỉ</th>
              <th>Email</th>
              <th>Ngày sinh</th>
              <th>Quên quán</th>
              <th>Giới tính</th>
              <th width="60px"></th>
              <th width="60px"></th>
            </tr>
          </thead>
          <tbody>
<?php
if (isset($_GET['s']) && $_GET['s'] != '') {
  $sql = 'select * from hocsinh where hoTen like "%'.$_GET['s'].'%"';
} else {
  $sql = 'select * from hocsinh';
}

$hocsinhList = executeResult($sql);

$index = 1;
foreach ($hocsinhList as $hocsinh) {
  echo '<tr>
      <td>'.($index++).'</td>
      <td>'.$hocsinh['mahs'].'</td>
      <td>'.$hocsinh['hoTen'].'</td>
      <td>'.$hocsinh['lop'].'</td>
      <td>'.$hocsinh['khoi'].'</td>
      <td>'.$hocsinh['taikhoan'].'</td>
      <td>'.$hocsinh['matkhau'].'</td>
      <td>'.$hocsinh['diaChi'].'</td>
      <td>'.$hocsinh['Email'].'</td>
      <td>'.$hocsinh['ngaySinh'].'</td>
      <td>'.$hocsinh['queQuan'].'</td>
      <td>'.$hocsinh['gioitinh'].'</td>
      <td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$hocsinh['id'].'","_self")\'>Sửa</button></td>
      <td><button class="btn btn-danger" onclick="deleteStudent('.$hocsinh['id'].')">Xóa</button></td>
    </tr>';
}
?>
          </tbody>
        </table>
        <button class="btn btn-success" onclick="window.open('themhs.php', '_self')">Thêm học sinh</button>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function deleteStudent(id) {
      option = confirm('Bạn có muốn xoá học sinh này không')
      if(!option) {
        return;
      }

      console.log(id)
      $.post('delete_student.php', {
        'id': id
      }, function(data) {
        alert(data)
        location.reload()
      })
    }
  </script>
</div>
</body>
</html>
