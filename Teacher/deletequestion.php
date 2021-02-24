<?php
    include("connect.php");
    $sql = "delete from thuviencauhoi where idcauhoi='".$_SESSION['idcauhoi']."'";
    if(mysqli_query($conn, $sql)){
		echo "<script>alert('Xóa câu hỏi thành công.'); window.location='http://localhost:8081/ThiTN/Teacher/questionlibrary.php'</script>";
    }
    else{
		echo "<script>alert('FAIL! Xóa không thành công.'); window.location='http://localhost:8081/ThiTN/Teacher/questionlibrary.php'</script>";
   	}
   	mysqli_close($conn);
?>