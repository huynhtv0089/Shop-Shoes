<?php 
include '../system/core.php'; 
if (isset($_POST['add'])) {
	//khi mua được chọn số sản phẩm nên mình phải x số tiền đó vs số sản phẩm muốn mua
	// $_POST['soLuongSP'] là số sản phẩm
	// $_POST['tien'] là  giá tiền của sản phẩm
	// nếu $_POST['soLuongSP'] < 1 thì mình sét nó == 1 tránh trường hợp bug hack các kiểu qua the html 
	if ($_POST['soLuongSP']<1) {
		$soluong=1;
	} else {
		$soluong=$_POST['soLuongSP'];
	}
	// nhân nó 
	$tien=$soluong*$_POST['tien'];
    mysql_query("INSERT INTO `cart` SET 
    	`maSP` = '".$_POST['idsp']."',
    	`maNV` = '".$_SESSION['dn_tendangnhap']."',
    	`soLuongSP` = '".$_POST['soLuongSP']."',
    	`size` = '".$_POST['size']."',
    	`tien` = $tien
    ");
	header("location: /page/ChiTietSanPham.php?maSP=".$_POST['idsp']."");
	header("location: $home/page/list_cart.php");
}