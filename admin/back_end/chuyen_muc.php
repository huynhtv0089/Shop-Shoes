<?php
include '../../system/core.php'; 


if (isset($_POST['add_cat'])) {
	$name=$_POST['name'];
	$text=$_POST['text'];
	mysql_query("INSERT INTO `loaisp` SET 
    	`TenLoai` = '".$name."',
    	`MoTa` = '".$text."'
    ");
    header("location: $home/admin/font_end/chuyen_muc.php");
}


if (isset($_POST['edit_cat'])) {
	$maSP=$_POST['maLoaiSP'];
	$name=$_POST['name'];
	$text=$_POST['text'];
	mysql_query("UPDATE `loaisp` SET 
    	`TenLoai` = '".$name."',
    	`MoTa` = '".$text."'
    	where `maLoaiSP`='".$maSP."'
    ");
    header("location: $home/admin/font_end/chuyen_muc.php");
}

if (isset($_POST['del_cat'])) {
	$maSP=$_POST['maLoaiSP'];
	mysql_query("DELETE FROM `loaisp` WHERE `maLoaiSP`='".$maSP."'");
    header("location: $home/admin/font_end/chuyen_muc.php");
}


if (isset($_POST['add_post'])) {
    $tensp=$_POST['tenSP'];
    $soluong=$_POST['soLuong'];
    $anh=$_FILES['anh']['name'];
    $anh2=$_FILES['anh2']['name'];
    $anh3=$_FILES['anh3']['name'];
    $dongia=$_POST['donGia'];
    $trangthai=$_POST['trangThai'];
    $maloaisp=$_POST['maLoaiSP'];
    $thongtin=$_POST['thongTin'];

    mysql_query("INSERT INTO `sanpham` SET 
        `tenSP` = '".$tensp."',
        `soLuong` = '".$soluong."',
        `anh` = '".$anh."',
        `anh2` = '".$anh2."',
        `anh3` = '".$anh3."',
        `donGia` = '".$dongia."',
        `trangThai` = '".$trangthai."',
        `maLoaiSP` = '".$maloaisp."',
        `thongTin` = '".$thongtin."'
    ");

    @move_uploaded_file($_FILES['anh']['tmp_name'], $url_project . '/style/images/HinhSP/' . $anh);
    @move_uploaded_file($_FILES['anh2']['tmp_name'], $url_project . '/style/images/HinhSP/' . $anh2);
    @move_uploaded_file($_FILES['anh3']['tmp_name'], $url_project . '/style/images/HinhSP/' . $anh3);

    header("location: $home/admin/font_end/chuyen_muc.php?id=$maloaisp");
}


if (isset($_POST['edit_post'])) {
    $id=$_POST['id'];
    $tensp=$_POST['tenSP'];
    $soluong=$_POST['soLuong'];

    if(!empty($_FILES['anhEdit']['name'])) {
        $anh = $_FILES['anhEdit']['name'];
        @move_uploaded_file($_FILES['anhEdit']['tmp_name'], $url_project . '/style/images/HinhSP/' . $anh);
    }else $anh = $_POST['anh'];
    
    if(!empty($_FILES['anhEdit2']['name'])) {
        $anh2 = $_FILES['anhEdit2']['name'];
        @move_uploaded_file($_FILES['anhEdit2']['tmp_name'], $url_project . '/style/images/HinhSP/' . $anh2);
    }else $anh2 = $_POST['anh2'];

    if(!empty($_FILES['anhEdit3']['name'])) {
        $anh3 = $_FILES['anhEdit3']['name'];
        @move_uploaded_file($_FILES['anhEdit3']['tmp_name'], $url_project . '/style/images/HinhSP/' . $anh3);
    }else  $anh3 = $_POST['anh3'];

    $dongia=$_POST['donGia'];
    $trangthai=$_POST['trangThai'];
    $maloaisp=$_POST['maLoaiSP'];
    $thongtin=$_POST['thongTin'];

    mysql_query("UPDATE `sanpham` SET 
        `tenSP` = '".$tensp."',
        `soLuong` = '".$soluong."',
        `anh` = '".$anh."',
        `anh2` = '".$anh2."',
        `anh3` = '".$anh3."',
        `donGia` = '".$dongia."',
        `trangThai` = '".$trangthai."',
        `maLoaiSP` = '".$maloaisp."',
        `thongTin` = '".$thongtin."'
         where `maSP`='".$id."'
    ");

    header("location: $home/admin/font_end/chuyen_muc.php?id=$maloaisp");
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    // echo '<pre>';
    // print_r($_FILES);
    // echo '</pre>';
}




if (isset($_POST['del_post'])) {
    $id=$_POST['id'];
    
    mysql_query("DELETE FROM `sanpham` where `maSP`='".$id."'");

    header("location: $home/admin/font_end/chuyen_muc.php?id=$maloaisp");
}