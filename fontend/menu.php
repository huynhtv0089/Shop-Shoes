<div class="header-bottom">
    <div class="container">
        <div class="top-nav">
            <ul class="memenu skyblue">
                <li class="active"><a href="<?php echo $home; ?>/">Trang chủ</a></li>
                <li class="active"><a href="<?php echo $home; ?>/page/sanpham.php">Sản phẩm</a></li>
                <li class="active"><a href="<?php echo $home; ?>/page/tintuc.php">Tin Tức</a></li>
                <?php
                if (!$is_login) { // nếu chưa đăng nhập thì hiển thị mục này
                ?>
                <li class="active"><a href="<?php echo $home; ?>/page/DangKy.php">Đăng Ký</a>
                </li>
                <?php
                }
                ?>

                <li class="grid"><a href="#"> Danh mục sản phẩm</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1 me-one">
                                <h4>Loại sản phẩm</h4>
                                <ul>
                                    <?php
                                    $alcm2 = mysql_query("SELECT * FROM `loaisp` ");
                                    while ($lcm2 = mysql_fetch_array($alcm2)) {
                                    ?>
                                    <li>
                                        <a href="<?php echo $home; ?>/page/DanhMucSanPham.php?loaisp=<?php echo $lcm2['maLoaiSP']; ?>">
                                            <?php echo $lcm2['TenLoai'] ?>
                                        </a>
                                    </li>
                                    <?php
                                    }
                                    ?>
                                    

                                </ul>
                            </div>
                            <div class="col1 me-one">
                                <h4>Giá</h4>
                                <ul>
                                    <li><a href="<?php echo $home; ?>/page/DanhMucSanPham_DG.php?gia=500">Dưới 500.000Đ </a>
                                    </li>
                                    <li><a href="<?php echo $home; ?>/page/DanhMucSanPham_DG.php?gia=1000">Dưới 1.000.000Đ </a>
                                    </li>
                                    <li><a href="<?php echo $home; ?>/page/DanhMucSanPham_DG.php?gia=1500">Dưới 1.500.000Đ </a>
                                    </li>
                                    <li><a href="<?php echo $home; ?>/page/DanhMucSanPham_DG.php?gia=2000">Dưới 2.000.000Đ </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>