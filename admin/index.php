<?php
include '../system/core.php'; 

//kiểm tra xem nếu chưa đăng nhập thì trở về trang đăng nhập
if ($_SESSION['dn_tendangnhap']!=$ad_password) {
	header("location: $home/admin/dangnhap.php");
	exit;
}

$title="Hoàng Yến | Admin Panel";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include 'font_end/head.php'; ?>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<!--Đầu web-->
			<header class="main-header">
				<?php include 'font_end/header.php'; ?>
			</header>
			<!--Menu bên trái web-->
			<aside class="main-sidebar">
				<?php include 'font_end/menu.php'; ?>
			</aside>
			<!--Thân web-->
			<div class="content-wrapper">
				<?php include 'font_end/index.php'; ?>
			</div>
			<!--Chân web-->
			<footer class="main-footer">
				<?php include 'font_end/footer.php'; ?>
			</footer>
		</div>
		<!-- Các thư viện Javascript xử lý fontend -->
		<!-- jQuery 2.2.3 -->
		<script src="<?php echo $home; ?>/style/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.7 -->
		<script src="<?php echo $home; ?>/style/admin/bootstrap/js/bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?php echo $home; ?>/style/admin/dist/js/app.min.js"></script>

	</body>
</html>