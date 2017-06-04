<?php 
include '../system/core.php'; 

$title="Danh sách sản phẩm đã mua";
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
						    

							<div class="in-check">
							    <ul class="unit">
							    	<li>#</li>
							        <li><span>Hình</span>
							        </li>
							        <li><span>Tên Sản Phẩm</span>
							        </li>
							        <li><span>Tiền</span>
							        </li>
							        <li><span>Số lượng</span>
							        </li>
							        <li><span></span></li>
							        <div class="clearfix"> </div>
							    </ul>
							    <?php
							    $cms = mysql_query("SELECT * FROM `cart` WHERE `maNV`='".$_SESSION['dn_tendangnhap']."'  ORDER BY `id` DESC ");
							    $i=1;
							    while ($cs = mysql_fetch_array($cms)) {
							    	$tiens=adddotstring($cs['tien']*1000);
							    	// biến lấy thông tin người dùng đã đăng ký từ data table thanhvien 
							    	$xu = mysql_fetch_array(mysql_query("SELECT * FROM `thanhvien` where `tenDangNhap`='".$_SESSION['dn_tendangnhap']."'"));
							    	// biến lấy thông sản phẩm theo ID dduwwocj lưu ở phần maSP của table
							    	$xsp = mysql_fetch_array(mysql_query("SELECT * FROM `sanpham` where `maSP`='".$cs['maSP']."'"));
							    	
							    ?>
							    <ul class="cart-header">
							        <a href="<?php echo $home; ?>/page/xoa_cart.php?id=<?php echo $cs['id']; ?>"><div class="close1"> </div>
							        <li class="ring-in">
							            <a href="single.html"><img style="height: 130px" src="<?php echo $home; ?>/style/images/HinhSP/<?php echo $xsp['anh']; ?>" class="img-responsive" alt="">
							            </a>
							        </li>
							        <li><span><?php echo $xsp['tenSP']; ?></span>
							        </li>
							        <li><span><?php echo $tiens; ?> VNĐ</span>
							        </li>
							        <li><span><?php echo $cs['soLuongSP']; ?></span>
							        </li>
							        <li> <b style="margin-top: 30px;" class="btn btn-danger" data-toggle="modal" data-target="#thanhtoan-<?php echo $cs['id']; ?>">Thanh Toán</b>
							        </li>
							        <div class="clearfix"> </div>
							    </ul>







							    <!--Click vào nút thanh toán hiển thị code này lên-->
							    <!--http://getbootstrap.com/javascript/#modals-examples-->
							    <div class="modal fade" id="thanhtoan-<?php echo $cs['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> //e ko hiểu :(
								    <div class="modal-dialog" role="document">
								        <div class="modal-content">
								            <div class="modal-header">
								                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
								                </button>
								                <h4 class="modal-title" id="myModalLabel">Nhập Thông Tin Thanh Toán</h4>
								            </div>
								            <form action="<?php echo $home; ?>/page/thanh_toan.php?id=<?php echo $cs['id']; ?>" method="POST">
									            <div class="modal-body">
									                <div class="input-group input-group-sm">
													    <span class="input-group-addon" id="sizing-addon3">Họ Và Tên</span>
													    <input type="text" class="form-control" name="ho_ten" value="<?php echo $xu['hoTen'] ?>">
													</div>
												</div>
												<div class="modal-body">
													<div class="input-group input-group-sm">
													    <span class="input-group-addon" id="sizing-addon3">Số Điện Thoại</span>
													    <input type="text" class="form-control" name="sdt" value="<?php echo $xu['dienThoai'] ?>">
													</div>
												</div>
												<div class="modal-body">
													<div class="input-group input-group-sm">
													    <span class="input-group-addon" id="sizing-addon3">Địa Chỉ</span>
													    <input type="text" class="form-control" name="dia_chi" value="<?php echo $xu['diaChi'] ?>">
													</div>
									            </div>
									            <div class="modal-body">
													<textarea class="form-control" rows="3" placeholder="Ghi chú"></textarea>
									            </div>
									            <div class="modal-footer">
									                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
									                <button type="submit" name="thanhtoan" class="btn btn-primary">Thanh Toán</button>
									            </div>
								            </form>
								        </div>
								    </div>
								</div>
							    <?php
							    $i++;
							    }
							    ?>
							</div>



						</div>
					</div>
				</div>
			</div>

		</div>

















		<?php include '../fontend/footer.php'; ?>
		
		<!--http://getbootstrap.com/getting-started/-->
		<!-- Thư viện bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!--Thư viện Jquery-->
		<script src="http://code.jquery.com/jquery-latest.js"></script>


	</body>
</html>