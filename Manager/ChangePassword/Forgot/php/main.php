<?php
    $ten = $_POST['tendn'];
    $mk = $_POST['mkc'];
    $mkmoi1 = $_POST['mkm1'];
    $mkmoi2 = $_POST['mkm2'];
    //ket noi
    $conn = mysqli_connect("localhost","root","","thion");
    //xay dung cau len truy van
    $kt = "select * from hocsinh where taikhoan ='".$ten."'";
    //thuc hien truy van
    $result = mysqli_query($conn,$kt) or die("không thể kết nối được");
    if($row=mysqli_fetch_array($result));
    {
       if($mk==$row['matkhau'])
       {
           if($mkmoi1 == $mkmoi2)
           {
               $doi = "update hocsinh set matkhau ='".$mkmoi1."' where taikhoan = '".$ten."'";
               mysqli_query($conn,$doi) or die ("không đổi được");
               echo "<script>alert('Đổi mật thành công!'); window.location='http://localhost:8081/ThiTN/ManagerStudent/index.php'</script>";
                    exit;
                    
           }
    else {
        echo "<script>alert('Đổi mật khẩu thất bại!'); window.location='http://localhost:8081/ThiTN/ManagerStudent/ChangePassword/Forgot/index.html'</script>";
    }       
        }
    }
?>