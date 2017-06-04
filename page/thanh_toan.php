<?php 
include '../system/core.php'; 
/// đưa cái ?id= vào biến $id
$id=$_GET['id'];
$title="Cảm ơn bạn đã mua hàng";
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

							<div class="panel panel-primary">
								<div class="panel-heading">
									<h3 class="panel-title">Hệ Thống</h3>
								</div>
								<div class="panel-body">
									Bạn đã đặt hàng thành công!Chúng tôi sẽ liên hệ giao hàng theo thông tin đăng ký của bạn sớm nhất .
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include '../fontend/footer.php'; ?>
	</body>
</html>