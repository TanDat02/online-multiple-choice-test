<?php
  session_start();
  $ten = $_POST['user'];
  $pass = $_POST['pass'];
  //Tạo kết nối đến CSDL
  $conn = mysqli_connect("localhost","root","","thion"); 
  //Câu truy vấn
  $kt = "select * from hocsinh where taikhoan= '".$ten."'";   
  $result = mysqli_query($conn,$kt) or die ("Không thể kết nối được !");

  $kt1= "select * from giaovien where taikhoan= '".$ten."'";
  $result1 = mysqli_query($conn,$kt1) or die ("Không thể kết nối được !");

  $kt2= "select * from admin where taikhoan= '".$ten."'";
  $result2 = mysqli_query($conn,$kt2) or die ("Không thể kết nối được !");

  if($row = mysqli_fetch_array($result))
  {
    if($ten == $row['taikhoan'])
    {
      if($pass == $row['matkhau'])
      {
        $_SESSION['ten'] = $_POST['pass'];
        header('location:http://localhost:8081/ThiTN/Manager/index.php');
        $_SESSION['taikhoan'] = $ten;
        $_SESSION['hoTen'] = $row['hoTen'];
        $_SESSION['khoi'] = $row['khoi'];
        $_SESSION['mahs'] = $_row['mahs'];
        echo "Xin chào " . $ten . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
        die();
      }
      else
      {
        echo "<script>alert('Mật khẩu không hợp lệ!'); 
              window.location='http://localhost:8081/ThiTN/Manager/Logins/Login/index.html'</script>";
      }
    }
  }    
  if($row1 = mysqli_fetch_array($result1))
  {
    if($ten == $row1['taikhoan'])
    {
      if($pass == $row1['matkhau'])
      {
        $_SESSION['magv'] = $row1['magv'];
        header('location:http://localhost:8081/ThiTN/Teacher/home.php');
      }
      else
      {
        echo "<script>alert('Mật khẩu không hợp lệ!'); 
              window.location='http://localhost:8081/ThiTN/Manager/Logins/Login/index.html'</script>";
      }
    }
  }
  if($row2 = mysqli_fetch_array($result2))
  {
    if($ten == $row2['taikhoan'])
    {
      if($pass == $row2['matkhau'])
      {
        $_SESSION['taikhoan'] = $row2['taikhoan'];
        header('location:http://localhost:8081/ThiTN/Admin/admin/qlgv/gv.php');
      }
      else
      {
        echo "<script>alert('Mật khẩu không hợp lệ!'); 
              window.location='http://localhost:8081/ThiTN/Manager/Logins/Login/index.html'</script>";
      }
    }
  }
  else if ($row1 = mysqli_fetch_array($result1)) 
  {
    if($ten == $row1['taikhoan'])
    {
      if($pas == $row1['matkhau'])
      {
        //Hiển thị nội dung thông tin trong sesction
        //Kiểm tra có tồn tại không trước khi nó chuyển trang 
        $_SESSION['ten'] = $_POST['pass'];
        //Hiển thị tên người dùng
        //Sử dụng header location để điều hướng trang và chuyển trang
        header('location:http://localhost:8081/ThiTN/Manager/index.php');
        $_SESSION['taikhoan'] = $ten;
        echo "Xin chào " . $ten . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
        die();
      }
      else
      {
        echo "<script>alert('Mật khẩu không hợp lệ!'); 
              window.location='http://localhost:8081/ThiTN/Manager/Logins/Login/index.html'</script>";
      }
    }   
  }
  else 
  {
    echo "<script>alert('Tên đăng nhập không hợp lệ!'); 
          window.location='http://localhost:8081/ThiTN/Manager/Logins/Login/index.html'</script>";
  }
?>