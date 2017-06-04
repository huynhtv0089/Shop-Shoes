<?php 
include '../system/core.php'; 
$maloaisp = "";
$maloaisp = $_REQUEST['maTin'];
$row=mysql_fetch_array(mysql_query("SELECT * FROM `tintuc` WHERE maTin = '".$maloaisp."'"));
$title=$row['tenTin'];
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
						<li class="active">Tin Tức</li>
						<li class="active"><?php echo $row['tenTin']; ?></li>
					</ol>
				</div>
			</div>
		</div>


		
		


		<!--start-single-->
		<div class="single contact">
			<div class="container">
				<div class="single-main">
				<div class="alert alert-info" role="alert"><?php echo $row['tenTin']; ?></div>
				<!--<center><img src="<?php echo $home; ?>/style/images/HinhTT/<?php echo $row['anhTin']; ?>"></center>-->
				<?php echo $row['moTaTin']; ?>
				</div>
			</div>
		</div>
		<!--end-single-->









		<?php include '../fontend/footer.php'; ?>
	</body>
</html>