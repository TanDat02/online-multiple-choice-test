<?php
    include("connect.php");
    $idcauhoi = $_POST["idcauhoi"];
    if(isset($_POST["cancel"])){

        $sql = "delete from cauhoidethi where idcauhoi='".$idcauhoi."'";
        if(mysqli_query($conn, $sql)){
        	header('location:thread.php');
        }
        else{
            echo "<script>alert('FAIL! Xóa không thành công..'); window.location='http://localhost:8081/ThiTN/Teacher/questionlibrary.php'</script>";
       	}
    }
   	mysqli_close($conn);
?>