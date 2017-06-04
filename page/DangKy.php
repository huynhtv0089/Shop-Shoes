<?php 
include '../system/core.php'; 

$title="Đăng Ký";
?>

<?php
$tendangnhap=$matkhau=$nhaplaimatkhau=$hoten=$ngaysinh=$diachi=$dienthoai=$email=$gioitinh_nu =$gioitinh_nam = $thongbaoloi=$thongbaoloi1="";
if (isset($_POST["submit_dangky"])) 
{
	$tendangnhap=$_POST["tendangnhap"];
	$matkhau=$_POST["matkhau"];
	$nhaplaimatkhau=$_POST["nhaplaimatkhau"];
	$hoten=$_POST['hoten'];
	$ngaysinh=$_POST["ngaysinh"];
	$diachi=$_POST["diachi"];
	$dienthoai=$_POST["dienthoai"];
	$email=$_POST["email"];

	if (isset($_POST['gioitinh_nam'])) 
	{
  		$gioitinh = "Nam";
	}
	if (isset($_POST['gioitinh_nu'])) 
	{
  		$gioitinh = "Nữ";
	}
	if ($matkhau != $nhaplaimatkhau) 
	{
		$thongbaoloi1 = "Mật khẩu nhập lại không trùng khớp.";
	}

	//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($tendangnhap == "" || $matkhau == "" || $nhaplaimatkhau == "" || $hoten == "" || $ngaysinh == "" || $diachi == "" || $dienthoai == "" || $email == "" || ($matkhau != $nhaplaimatkhau) ) 
		{
			$thongbaoloi =  "bạn vui lòng nhập đầy đủ thông tin";
		}
		else
		{
			


			mysql_query("INSERT INTO `thanhvien` SET 
		    	`tenDangNhap` = '".$tendangnhap."',
		    	`matKhau` = '".$matkhau."',
		    	`hoTen` = '".$hoten."',
		    	`ngaySinh` = '".$ngaysinh."',
		    	`gioiTinh` = '".$gioitinh."',
		    	`diaChi` = '".$diachi."',
		    	`dienThoai` = '".$dienthoai."',
		    	`Email` = '".$email."'
		    ");


			$message =  "chúc mừng bạn đã đăng ký thành công";
			echo "<script type='text/javascript'LANGUAGE='JavaScript'>alert('$message'); window.location.href='DangKy.php';</script>";
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
						<li><a href="<?php echo $url_home; ?>">Home</a></li>
						<li class="active">Đăng Ký</li>
					</ol>
				</div>
			</div>
		</div>


		
		<div class="product">
			<div class="container">
				<div class="product-main">
					<div class="row">
						<div class="col-md-5 account-left">
						    <form action="" method="post">
							    <div class="account-top heading">
							        <h3>Đăng ký tài khoản</h3>
							    </div>
							    <div class="address">
							        <span>Tên đăng nhập</span>
							        <input id="tendangnhap" type="text" name="tendangnhap" required="">
							    </div>
							    <div class="address">
							        <span class="text-danger" id="thongbao" ></span>
							    </div>
							    <div class="address">
							        <span>Mật Khẩu</span>
							        <input style="border: 1px solid #242424;outline: none;width: 100%;font-size: 14px;padding: 10px 10px;" id="matkhau" type="password" name="matkhau" required="" >
							    </div>
							    <div class="address">
							        <span>Nhập lại mật khẩu</span>
							        <input id="nhaplaimatkhau" type="password" name="nhaplaimatkhau" required="" style="border: 1px solid #242424;outline: none;width: 100%;font-size: 14px;padding: 10px 10px;">
							    </div>
							    <div class="address">
							        <span>Họ tên</span>
							        <input id="hoten" type="text" name="hoten" required="">
							    </div>
							    <div class="address">
							        <span>Ngày Sinh</span>
							        <input id="ngaysinh" type="date" name="ngaysinh" required="" style="border: 1px solid #242424;outline: none;width: 100%;font-size: 14px;padding: 10px 10px;">
							    </div>
							    <div class="address">
							        <span>Giới tính</span>
							        <input name="gioitinh_nam" type="radio" value="1">Nam
							        <input name="gioitinh_nu" type="radio" value="0">Nữ
							    </div>
							    <div class="address">
							        <span>Địa chỉ</span>
							        <input id="diachi" type="text" name="diachi" required="">
							    </div>
							    <div class="address">
							        <span>Điện thoại</span>
							        <input id="dienthoai" type="text" name="dienthoai" maxlength="11" required="">
							    </div>
							    <div class="address">
							        <span>Email</span>
							        <input id="email" type="email" name="email" required="" style="border: 1px solid #242424;outline: none;width: 100%;font-size: 14px;padding: 10px 10px;">
							    </div>
							    <div class="address">
							        <span class="text-danger" id="thongbao" ></span>
							    </div>
							    <div class="address new">
							        <input id="dangky" type="submit" name="submit_dangky" value="Đăng ký">
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