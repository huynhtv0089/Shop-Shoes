<?php 
include '../system/core.php'; 
$title="Tin tức";
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
						<li class="active">Tin tức</li>
					</ol>
				</div>
			</div>
		</div>


  </script>


		<div class="product">
			<div class="container">
				<div class="product-main">
					<!-- Ph?n danh sách sp -->
					<div class="col-md-12 p-left">
						<div class="product-one">
							<?php
							// muốn show ra 1 số sản phẩm nhất định : $sp = mysql_query("SELECT * FROM sanpham limit so_san_pham_muon_showw");
							$tt = mysql_query("SELECT * FROM tintuc "); // show hết sản phẩm
						    $i=1;
					        while ($row = mysql_fetch_array($tt)) {
					        	$matin = $row["maTin"];
								$tentin = $row["tenTin"];
								$anh = $row["anhTin"];
												        
							?>
							<!--
							<div class="col-md-4 product-left" style="margin-top: 10px;"> 
								<div class="p-one simpleCart_shelfItem">							
										<a href="<?php echo $home; ?>/page/ChiTiettt.php?maTin=<?php echo $row["maTin"]; ?>">
											<img height="250" src="<?php echo $home; ?>/style/images/HinhTT/<?php echo $anh; ?>" alt="" />
											<div class="mask">
												<span>Nhấp để xem tin</span>
											</div>
										</a>
									<h4><?php echo $row["tenTin"]; ?></h4>
									
								
								</div>
							</div>
							-->
							<div class="media">
							    <div class="media-left">
							        <a href="<?php echo $home; ?>/page/ChiTiettt.php?maTin=<?php echo $row["maTin"]; ?>"> <img class="media-object"  src="<?php echo $home; ?>/style/images/HinhTT/<?php echo $anh; ?>" style="width: 104px; height: 104px;"> </a>
							    </div>
							    <div class="media-body">
							    	
							        <a href="<?php echo $home; ?>/page/ChiTiettt.php?maTin=<?php echo $row["maTin"]; ?>"><h4 class="media-heading"><?php echo $row["tenTin"]; ?></h4></a>
							        <p>
							        	<?php echo substr($row["moTaTin"],0,400); ?>
							        </p>
							        
							    </div>
							</div>
							<?php
							}
							?>
							<div class="clearfix"> </div>
						</div>

					</div>

				</div>
			</div>
		</div>















		<?php include '../fontend/footer.php'; ?>
	</body>
</html>