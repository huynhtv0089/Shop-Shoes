<?php 
include '../system/core.php'; 
$title="Sản Phẩm";
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


		<div class="product">
			<div class="container">
				<div class="product-main">
					<!-- Ph?n danh sách sp -->
					<div class="col-md-9 p-left">
						<div class="product-one">
							<?php
							// muốn show ra 1 số sản phẩm nhất định : $sp = mysql_query("SELECT * FROM sanpham limit so_san_pham_muon_showw");
							$sp = mysql_query("SELECT * FROM sanpham "); // show hết sản phẩm
						    $i=1;
					        while ($row = mysql_fetch_array($sp)) {
					        $maSP = $row["maSP"];
							$tenSP = $row["tenSP"];
							$soLuong = $row["soLuong"];
							$anh = $row["anh"];
							$donGia = $row["donGia"];
							$thongTin = $row["thongTin"];
							$trangThai = $row["trangThai"];
							$mamaLoaiSPSP = $row["maLoaiSP"];
							?>
							<div class="col-md-4 product-left" style="margin-top: 10px;"> 
								<div class="p-one simpleCart_shelfItem">							
										<a href="<?php echo $home; ?>/page/ChiTietSanPham.php?maSP=<?php echo $row["maSP"]; ?>">
											<img height="250" src="<?php echo $home; ?>/style/images/HinhSP/<?php echo $anh; ?>" alt="" />
											<div class="mask">
												<span>Xem Chi tiết</span>
											</div>
										</a>
									<h4><?php echo $row["tenSP"]; ?></h4>
									<p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $row["donGia"]; ?> Ð</span></a></p>
								
								</div>
							</div>
							<?php
							}
							?>
							<div class="clearfix"> </div>
						</div>

					</div>
					<div class="col-md-3 p-right single-right">
					    <h3>Loại sản phẩm</h3>
					    <ul class="product-categories">
					        <li><a href="DanhMucSanPham.php?loaisp=2">Giày nam</a>
					        </li>
					        <li><a href="DanhMucSanPham.php?loaisp=1">Giày nữ</a>
					        </li>
					        <li><a href="DanhMucSanPham.php?loaisp=3">Giày bé</a>
					        </li>

					    </ul>

					    <h3>Giá</h3>
					    <ul class="product-categories p1">
					        <li><a href="DanhMucSanPham_DG.php?gia=500">Dưới 500.000 VND </a>
					        </li>
					        <li><a href="DanhMucSanPham_DG.php?gia=1000">Dưới 1.000.000 VND </a>
					        </li>
					        <li><a href="DanhMucSanPham_DG.php?gia=1500">Dưới 1.500.000 VND </a>
					        </li>
					        <li><a href="DanhMucSanPham_DG.php?gia=2000">Dưới 2.000.000 VND </a>
					        </li>
					    </ul>
					</div>
				</div>
			</div>
		</div>















		<?php include '../fontend/footer.php'; ?>
	</body>
</html>