<?php
include '../../system/core.php'; 
// xử lý add bài viết mới
if (isset($_POST['add_news'])) {
	$name=$_POST['name'];
	$text=$_POST['text'];
	$img=$_POST['img'];
	
	mysql_query("INSERT INTO `tintuc` SET 
    	`tenTin` = '".$name."',
    	`moTaTin` = '".$text."',
    	`anhTin` = '".$img."'
    ");
    header("location: $home/admin/font_end/tin_tuc.php");
}




// chinh sửa bài viết
if (isset($_POST['edit_news'])) {
	$matin=$_POST['maTin'];
	$name=$_POST['name'];
	$text=$_POST['text'];
	$img=$_POST['img'];
	
	mysql_query("UPDATE `tintuc` SET
    	`tenTin` = '".$name."',
    	`moTaTin` = '".$text."',
    	`anhTin` = '".$img."' 
    	where `maTin`='".$matin."'
    ");
    header("location: $home/admin/font_end/tin_tuc.php");
}



// xóa bài

if (isset($_POST['del_news'])) {
	$matin=$_POST['maTin'];

	
	mysql_query("DELETE FROM `tintuc` WHERE `maTin`='".$matin."'");
    header("location: $home/admin/font_end/tin_tuc.php");
}
?>