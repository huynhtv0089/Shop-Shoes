<?php
//tổng số tiền 
$t=mysql_result(mysql_query("SELECT sum(tien) FROM `cart` WHERE `maNV`='".$_SESSION['dn_tendangnhap']."' "), 0);
//đếm
$c_r= mysql_result(mysql_query("SELECT COUNT(*) FROM cart WHERE maNV = '".$_SESSION['dn_tendangnhap']."' "), 0);
?>
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-4 top-header-left">
                <div class="search-bar">
                    <form action="<?php echo $url_home; ?>/page/TimKiemSanPham.php">
                        <input type="text" name="timkiem" value="" placeholder="Nhập tên sản phẩm...">
                        <input type="submit" value="">
                    </form>
                </div>
            </div>
            <div class="col-md-4 top-header-middle">
                <a href="<?php echo $url_home; ?>"><img src="<?php echo $home; ?>/style/images/logoyen.png" alt="" />
                </a>
            </div>
            <div class="col-md-4 top-header-right">
                <?php
                if ($is_login) { /// đăng nhập 

                
                ?>
                <div class="cart box_1">
                    <a href="<?php echo $home; ?>/page/list_cart.php">
                        <h3> <div class="total"><?php echo adddotstring($t*1000); ?> VND (<?php echo $c_r; ?> item)</div>
							<img src="<?php echo $home; ?>/style/images/cart-1.png" alt="" />
                        </h3>
					</a>
					<p><a href="<?php echo $url_home; ?>/page/DaangXuat.php" class="simpleCart_empty">Đăng Xuất</a></p>
					<div class="clearfix"> </div>
				</div>
                <?php
                } else { // chưa đăng nhập
                ?>
                <div class="cart box_1">
                    <a href="<?php echo $home; ?>/page/DangNhap.php">
                        <h3> <div class="total">Đăng Nhập</div>
                            <img src="<?php echo $home; ?>/style/images/login.png" style="width: 40px; height: 40px;" alt="" />
                        </h3>
                    </a>
                    
                    <div class="clearfix"> </div>
                </div>
                <?php
                }
                ?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>