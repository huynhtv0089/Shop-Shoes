<?php
//code xử lý ẩn lỗi khi chạy code phát sinh
//http://johncms.com/downloads/?act=load_file&id=72
// giải nén ra nằm trong thư mục : \johncms-622\incfiles\core.php
ini_set('display_errors', 'Off');
// gọi file config ra
include('config.php');
/// CODE connect đến sql
//http://www.qhonline.info/php-can-ban/31/bai-10--ket-hop-php-va-mysql-trong-ung-dung-website.html
$conn2=mysql_connect($db_host, $db_user,$db_password) or die("can't connect database");
mysql_select_db($db_database,$conn2);
@mysql_query("SET NAMES 'utf8'", $conn2); /// fixx lỗi font chữ việt

// gọi session_start()
session_start();


////kiểm tra xem đã đăng nhập hay chưa
$num_rows1234 = mysql_result(mysql_query("SELECT COUNT(*) FROM thanhvien WHERE tenDangNhap = '".$_SESSION['dn_tendangnhap']."' "), 0);


// 
if ($num_rows1234!=0) { // nếu đăng nhập rồi thì biến $is_login tồn tại (true)
	$is_login=true;
} else { // nếu chưa login thì $is_login không tồn tại (false)
	$is_login=false;
}



// HÀM phân hàng chục trăm
function adddotstring($strNum) {
    $len = strlen($strNum);
    $counter = 3;
    $result = "";
    while ($len - $counter >= 0)
    {
        $con = substr($strNum, $len - $counter , 3);
        $result = '.'.$con.$result;
        $counter+= 3;
    }
    $con = substr($strNum, 0 , 3 - ($counter - $len) );
    $result = $con.$result;
    if(substr($result,0,1)=='.'){
        $result=substr($result,1,$len+1);   
    }
    return $result;
}

?>
