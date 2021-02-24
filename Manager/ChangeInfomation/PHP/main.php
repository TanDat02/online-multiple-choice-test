<meta charset = "UTF-8">
<?php
      $ma = $_POST["masv"];
      $ten = $_POST["tensv"];
      $class = $_POST["lopsv"];
      $block = $_POST["khoisv"];
      $address = $_POST["diachisv"];
      $email = $_POST["email"];
      $date = $_POST["ngaysinhsv"];
      $hometown = $_POST["quequansv"];
      $gender = $_POST["gioitinh"];
      $connect = mysqli_connect("localhost", "root", "", "thion");

      if (isset($_POST['update'])) {
        $query = "update hocsinh set hoTen = '".$ten."',  lop = '".$class."', khoi = '".$block."' , diaChi = '".$address."', Email = '".$email."',
        ngaySinh  = '".$date."', queQuan = '".$hometown."', gioitinh = '''.$gender.''' where mahs = '".$ma."'";
        $result = mysqli_query($connect, $query);
        if ($result) {
            echo "<script>alert('Cập nhật thông tin thành công!'); window.location='http://localhost:8081/ThiTN/ManagerStudent/index.php'</script>";
        } else {
            echo "<script>alert('Cập nhật thông tin thất bại!'); window.location='http://localhost:8081/ThiTN/ManagerStudent/ChangeInfomation/information.html'</script>";
        }
    }
?>