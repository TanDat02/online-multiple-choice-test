<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('dbhelp.php');
	$sql = 'delete from giaovien where id = '.$id;
	execute($sql);

	echo 'Xoá giáo viên thành công';
}