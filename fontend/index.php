<div class="shoes" style=" margin-top:-96px"> 
	<div class="container">



		<div class="product-one">
			<?php
			// muốn show ra 1 số sản phẩm nhất định : $sp = mysql_query("SELECT * FROM sanpham limit so_san_pham_muon_showw");
			$sp = mysql_query("SELECT * FROM sanpham  LIMIT 12"); // show hết sản phẩm
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
			<div class="col-md-3 product-left" style="margin-top: 10px;"> 
				<div class="p-one simpleCart_shelfItem">							
						<a href="<?php echo $home; ?>/page/ChiTietSanPham.php?maSP=<?php echo $row["maSP"]; ?>">
							<img height="250" src="<?php echo $home; ?>/style/images/HinhSP/<?php echo $anh; ?>" alt="" />
							<div class="mask">
								<span>Xem chi tiết</span>
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
</div>