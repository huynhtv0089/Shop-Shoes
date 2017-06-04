<?php 
include '../system/core.php'; 

$title="Đăng Nhập";
?>

<?php
if (isset($_POST["dangnhap"])) 
 {

  $dn_tendangnhap = $dn_matkhau = "";
  // lấy thông tin người dùng
   $dn_tendangnhap = $_POST["dn_tendangnhap"];
   $dn_matkhau = $_POST["dn_matkhau"];
   //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
   //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
   $dn_tendangnhap = strip_tags($dn_tendangnhap);
   $dn_tendangnhap = addslashes($dn_tendangnhap);
   $dn_matkhau = strip_tags($dn_matkhau);
   $dn_matkhau= addslashes($dn_matkhau);

   if ($dn_tendangnhap == "" || $dn_matkhau =="") 
   {
   echo "<font color =red > VUI LÒNG NHẬP ĐẦY ĐỦ CÁC TRƯỜNG!";
   }
   else
   {

     $num_rows = mysql_result(mysql_query("SELECT COUNT(*) FROM thanhvien WHERE tenDangNhap = '$dn_tendangnhap' and matKhau = '$dn_matkhau'  "), 0);

     if ($num_rows<1) 
     {
     echo "tên đăng nhập hoặc mật khẩu không đúng ! ".$num_rows."";
     }
     else
     {
     //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
     $_SESSION['dn_tendangnhap'] = $dn_tendangnhap;
      // Thực thi hành động sau khi lưu thông tin vào session
      // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
      echo "<script type='text/javascript'LANGUAGE='JavaScript'> window.location.href='$home/index.php';</script>";
     }
   }
 }
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include '../fontend/head.php'; ?>
	</head>
	<body>
		<?php include '../fontend/header.php'; ?>

		<?php include '../fontend/menu.php'; ?>

		

		<div class="breadcrumbs">
			<div class="container">
				<div class="breadcrumbs-main">
					<ol class="breadcrumb">
						<li><a href="<?php echo $url_home; ?>">Trang chủ</a></li>
						<li class="active">Đăng Nhập</li>
					</ol>
				</div>
			</div>
		</div>


		
		<div class="product">
			<div class="container">
				<div class="product-main">
					<div class="row">
						<div class="col-md-12 account-left">
						    <form action="" method="POST">
						        <div class="account-top heading">
						            <h3>Đăng Nhập</h3>
						        </div>
						        <div class="address">
						            <span>Tên đăng nhập</span>
						            <input type="text" name="dn_tendangnhap">
						        </div>
						        <div class="address">
						            <span>Mật khẩu</span>
						            <input type="password" name="dn_matkhau">
						        </div>
						        <div class="address">
						            <!--<a class="forgot" href="#">Forgot Your Password?</a>-->
						            <input name="dangnhap" type="submit" value="Login">
						        </div>
						    </form>
						</div>
					</div>
				</div>
			</div>

		</div>












		<?php include '../fontend/footer.php'; ?>
	</body>
</html>