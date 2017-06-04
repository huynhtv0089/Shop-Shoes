<?php 
include '../system/core.php'; 
$maloaisp = "";
$maloaisp = $_REQUEST['maSP'];
$row=mysql_fetch_array(mysql_query("SELECT * FROM sanpham WHERE maSP = '".$maloaisp."'"));
$title=$row['tenSP'];
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
						<li class="active">Sản Phẩm</li>
					</ol>
				</div>
			</div>
		</div>


		
		


		<!--start-single-->
		<div class="single contact">
			<div class="container">
				<div class="single-main">
				<?php
					
					$maSP = $row["maSP"];
					$tenSP = $row["tenSP"];
					$soLuong = $row["soLuong"];
					$anh = $row["anh"];
					$anh2 = $row["anh2"];
					$anh3 = $row["anh3"];
					$donGia = $row["donGia"];
					$thongTin = $row["thongTin"];
					$trangThai = $row["trangThai"];
					$maLoaiSP = $row["maLoaiSP"];
					$i++;

					?>
					<div class="col-md-9 single-main-left">
					<div class="sngl-top">
						<div class="col-md-5 single-top-left">	
							<div class="flexslider">
								<ul class="slides">
									<li data-thumb="<?php echo $home; ?>/style/images/HinhSP/<?php echo $anh; ?>">
										<img src= "<?php echo $home; ?>/style/images/HinhSP/<?php echo $anh; ?>" />
									</li>
									<li data-thumb="<?php echo $home; ?>/style/images/HinhSP/<?php echo $anh2; ?>">
										<img src= "<?php echo $home; ?>/style/images/HinhSP/<?php echo $anh2; ?>" />
									</li>
									<li data-thumb="<?php echo $home; ?>/style/images/HinhSP/<?php echo $anh3; ?>">
										<img src= "<?php echo $home; ?>/style/images/HinhSP/<?php echo $anh3; ?>" />
									</li>
								</ul>
							</div>
							<!-- FlexSlider -->
							<script defer src="<?php echo $home; ?>/style/js/jquery.flexslider.js"></script>
							<link rel="stylesheet" href="<?php echo $home; ?>/style/css/flexslider.css" type="text/css" media="screen" />


								<script>
							// Can also be used with $(document).ready()
							$(window).load(function() {
							  $('.flexslider').flexslider({
							    animation: "slide",
							    controlNav: "thumbnails"
							  });
							});
							</script>
					</div>	
				
					<div class="col-md-7 single-top-right">
						<form action="<?php echo $home; ?>/page/cart-add.php" method="POST">
							<input type="hidden" name="idsp" value="<?php echo $row["maSP"]; ?>">
							<input type="hidden" name="tien" value="<?php echo $row["donGia"]; ?>">
							<div class="details-left-info simpleCart_shelfItem">
								<h3><?php echo $row["tenSP"]; ?></h3>
								<p class="availability">Trạng thái: <span class="color"><?php echo $row["trangThai"]; ?></span></p>
								<div class="price_single">
									<span class="actual item_price"><?php echo $row["donGia"].'    VND'; ?></span>
								</div>
								<h2 class="quick">Mô tả sản phẩm:</h2>
								<p class="quick_desc"> <?php echo $row["thongTin"]; ?></p>
								<ul class="product-qty">
									<span>size:</span>
									<select name="size">
										<option value="36">36</option>
										<option value="37">37</option>
										<option value="38">38</option>
										<option value="39">39</option>
										<option value="40">40</option>
										<option value="41">41</option>
									</select>
								</ul>
								<div class="quantity_box">
									<ul class="product-qty">
										<span>Số lượng:</span>
										<select name="soLuongSP">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
										</select>
									</ul>
								</div>
						<div class="clearfix"> </div>
						<div class="single-but item_add">
							<?php
							if (!$is_login) {
							?>
								<a class="btn btn-success" href="<?php echo $home; ?>/page/DangNhap.php">Đăng Nhập Mua Sản Phẩm</a>
							<?php
							} else {
							?>
								<input type="submit" name="add" value="Thêm giỏ hàng"/>
							<?php
							}
							?>
						</div>
					</div>
				</form>
			</div>
			<div class="clearfix"></div>
		
			
			</div>
						<div class="latest products">
							<div class="product-one">
							<?php
							$sp = mysql_query("SELECT * FROM sanpham WHERE maLoaiSP = '".$maLoaiSP."' AND maSP > '".$maloaisp."' limit 3");
							while ($rowloai = mysql_fetch_array($sp)) {
								$maSPcungloai = $rowloai["maSP"];
								$tenSPcungloai = $rowloai["tenSP"];
								$soLuongcungloai = $rowloai["soLuong"];
								$anhcungloai = $rowloai["anh"];
								$donGiacungloai = $rowloai["donGia"];
								$thongTincungloai = $rowloai["thongTin"];
								$trangThaicungloai = $rowloai["trangThai"];
								$mamaLoaiSPSPcungloai = $rowloai["maLoaiSP"];
								$i1++;

							?>
								<div class="col-md-4 product-left single-left"> 
									<div class="p-one simpleCart_shelfItem">
									<a href="<?php echo $home; ?>/page/ChiTietSanPham.php?maSP=<?php echo $rowloai["maSP"]; ?> ">
										<img src="<?php echo $home; ?>/style/images/HinhSP/<?php echo $anhcungloai; ?>" alt="" />
										<div class="mask mask1">
											<span>Xem sản phẩm</span>
										</div>
									</a>
										<h4><?php echo $rowloai["tenSP"]; ?></h4>
										<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $rowloai["donGia"].'    VND'; ?></span></a></p>
									</div>
								</div>
							<?php  
							
							}
							?>
								<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
						<!-- Ph?n danh m?c -->
					<div class="col-md-3 p-right single-right">
						<h3>Loại sản phẩm</h3>
							<ul class="product-categories">
								<li><a href="DanhMucSanPham.php?loaisp=2">Giày Nam</a></li>
								<li><a href="DanhMucSanPham.php?loaisp=1">Giày Nữ</a></li>
								<li><a href="DanhMucSanPham.php?loaisp=3">Giày bé</a></li>
								
							</ul>
							
							<h3>Giá</h3>
							<ul class="product-categories p1">
								<li><a href="DanhMucSanPham_DG.php?gia=500">Dưới 500.000 VND </a></li>
								<li><a href="DanhMucSanPham_DG.php?gia=1000">Dưới 1.000.000 VND </a></li>
								<li><a href="DanhMucSanPham_DG.php?gia=1500">Dưới 1.500.000 VND </a></li>
								<li><a href="DanhMucSanPham_DG.php?gia=2000">Dưới 2.000.000 VND </a></li>
							</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--end-single-->









		<?php include '../fontend/footer.php'; ?>
	</body>
</html>