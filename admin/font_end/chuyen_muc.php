<?php
include '../../system/core.php'; 
//kiểm tra xem nếu chưa đăng nhập thì trở về trang đăng nhập
if ($_SESSION['dn_tendangnhap']!=$ad_password) {
	header("location: $home/admin/dangnhap.php");
	exit;
}
$title="Chuyên mục và sản phẩm";
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include 'head.php'; ?>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<!--Đầu web-->
			<header class="main-header">
				<?php include 'header.php'; ?>
			</header>
			<!--Menu bên trái web-->
			<aside class="main-sidebar">
				<?php include 'menu.php'; ?>
			</aside>
			<!--Thân web-->
			<div class="content-wrapper">
				<!--Code hiển thị quản lý tin tức ở đây-->
				<section class="content">
					<div class="box-body">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-cat"><i class="fa fa-navicon" aria-hidden="true"></i> Tạo chuyên mục</button>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-post"><i class="fa fa-pencil-square" aria-hidden="true"></i> Thêm Sản Phẩm</button>
					</div>








					<div class="row">
						<div class="col-md-4">
							<?php 
							if (isset($id)) {  
								$xcm = mysql_fetch_assoc(mysql_query("SELECT * FROM `loaisp` WHERE `maLoaiSP` = '$id' LIMIT 1"));
							?>

							<div class="box box-primary">
							    <div class="box-header ui-sortable-handle" style="cursor: move;">
							        <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
							        <h3 class="box-title">Chỉnh sửa chuyên mục</h3>
							        <div class="box-tools pull-right">
							            <button class="btn btn-box-tool"><i class="fa fa-plus"></i>
							            </button>
							        </div>
							    </div>
							    <form action="<?php echo $home; ?>/admin/back_end/chuyen_muc.php" method="POST">
							        <input type="hidden" name="maLoaiSP" value="<?php echo $id; ?>">
							        <div class="box-body">
							            <div class="input-group">
							                <span class="input-group-btn">
														        <button class="btn btn-primary" type="button">Tiều đề</button>
														    </span>
							                <input type="text" class="form-control" name="name" value="<?php echo $xcm['TenLoai']; ?>">
							            </div>
							        </div>
							        <div class="box-body">
							            <label>Miêu tả</label>
							            <textarea name="text" class="form-control" rows="3"><?php echo $xcm['MoTa']; ?></textarea>
							        </div>
							        <div class="box-footer">
							            <button type="submit" name="del_cat" class="btn btn-primary pull-left">Xóa</button>
							            <button type="submit" name="edit_cat" class="btn btn-primary pull-right">Chỉnh sửa</button>
							        </div>
							    </form>
							</div>


							<?php }  ?>



								<div class="box box-solid">
								    <div class="box-header with-border">
								        <h3 class="box-title">Chuyên mục</h3>
								    </div>
								    <div class="box-body no-padding">
								        <ul class="nav nav-pills nav-stacked">
								        	<?php
								        	
											$cm = mysql_query("SELECT * FROM `loaisp` ");
											$n=1;
											while ($c = mysql_fetch_array($cm)) {
											?>
									            <li <?php if ($id==$c['maLoaiSP']) { echo 'class="active"'; } ?>>

									            	<a href="<?php echo $home; ?>/admin/font_end/chuyen_muc.php?id=<?php echo $c['maLoaiSP']; ?>">
									            		<i class="fa fa-folder-o" aria-hidden="true"></i> 
									            		<?php echo $c['TenLoai'] ?> 
									            	</a>
									            </li>
									            <?php
												$n++;
									           }
											?>
									    </ul>
								    </div>
								    <!-- /.box-body -->
								</div>

						</div>
						<div class="col-md-8">

							<div class="box box-primary">
							    <div class="box-header with-border">
							        <h3 class="box-title">Danh sách sản phẩm</h3>
							        <div class="box-tools pull-right">
							            <ul class="pagination pagination-sm no-margin pull-right">
							            </ul>
							        </div>
							        <!-- /.box-tools -->
							    </div>
							    <!-- /.box-header -->
							    
							        <div class="box-body no-padding">
							            <div class="table-responsive mailbox-messages">

							                <table class="table table-hover table-bordered table-striped" id="myTable">
							                    <tbody>
							                    	<?php
								                	if (!$id) {
								                		$bv = mysql_query("SELECT * FROM `sanpham` ");
								                	} else {
								                		$bv = mysql_query("SELECT * FROM `sanpham` where `maLoaiSP`='".$id."'");
								                	}
								                	
													$n=1;
													while ($b = mysql_fetch_array($bv)) {
														?>
									                    <tr>
									                        <td class="mailbox-subject" data-toggle="modal" data-target="#info-post-<?php echo $b['maSP'] ?>"><?php echo $b['tenSP']; ?></td>
									                        <td class="mailbox-subject"><b class="label label-primary" data-toggle="modal" data-target="#info-post-<?php echo $b['maSP'] ?>">Chỉnh sửa</b></td>
									                    </tr>
									                    <?php
									                    $n++;
								                	}
								                    ?>
							                    </tbody>
							                </table>
							            </div>
							        </div>

							    
							</div>
						</div>
						
					</div>




					<?php
                	if (!$id) {
                		$bv = mysql_query("SELECT * FROM `sanpham` ");
                	} else {
                		$bv = mysql_query("SELECT * FROM `sanpham` where `maLoaiSP`='".$id."'");
                	}
                	
					$n=1;
					while ($b = mysql_fetch_array($bv)) {
					?>
					<!--ADD post-->
					<div class="modal fade" id="info-post-<?php echo $b['maSP'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					    <div class="modal-dialog" role="document">
					        <div class="modal-content">
					            
					        	<div class="box box-primary">
								    <div class="box-header with-border">
								        <h3 class="box-title">Chỉnh sửa bài viết</h3>
								    </div>
								    <form action="<?php echo $home; ?>/admin/back_end/chuyen_muc.php" method="POST" enctype="multipart/form-data">
								    	<input type="hidden" name="id" value="<?php echo $b['maSP'] ?>">
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Tên sản phẩm</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="tenSP" value="<?php echo $b['tenSP']; ?>">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Số lượng</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="soLuong" value="<?php echo $b['soLuong']; ?>">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Link hình 1</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="anh" value="<?php echo $b['anh']; ?>">
								                    <input type="file" name="anhEdit">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Link hình 2</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="anh2" value="<?php echo $b['anh2']; ?>">
								                    <input type="file" name="anhEdit2">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Link hình 3</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="anh3" value="<?php echo $b['anh3']; ?>">
								                    <input type="file" name="anhEdit3">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Đơn Giá</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="donGia" value="<?php echo $b['donGia']; ?>">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Trạng Thái</label>
								                <div class="col-sm-10">
								                    <div class="btn-group" data-toggle="buttons">
													    <label class="btn btn-primary <?php if ($b['trangThai']=="còn hàng") { echo 'active'; } ?>">
													        <input type="radio" name="trangThai" id="option1" autocomplete="off" <?php if ($b['trangThai']=="còn hàng") { echo 'checked=""'; } ?> value="còn hàng"> Còn Hàng
													    </label>
													    <label class="btn btn-primary <?php if ($b['trangThai']=="hết hàng") { echo 'active'; } ?>">
													        <input type="radio" name="trangThai" id="option2" autocomplete="off" <?php if ($b['trangThai']=="hết hàng") { echo 'checked=""'; } ?> value="hhết hàng"> Hết Hàng
													    </label>
													</div>
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Chuyên Mục</label>
								                <div class="col-sm-10">
								                    <select name="maLoaiSP" class="form-control">
								                    	<option value="0">Chọn chuyên mục</option>
								                    	<?php
								                    	$alcm = mysql_query("SELECT * FROM `loaisp` ");
														while ($lcm = mysql_fetch_array($alcm)) {
								                    	?>
													    <option value="<?php echo $lcm['maLoaiSP']; ?>" <?php if ($b['maLoaiSP']==$lcm['maLoaiSP']) { echo 'selected="selected"'; } ?> ><?php echo $lcm['TenLoai']; ?></option>
													    <?php
														}
													    ?>
													</select>
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								        	<label for="inputEmail3" class="col-sm-2 control-label">Thông Tin</label>
								        	<div class="col-sm-10">
						                        <textarea class="form-control" name="thongTin" rows="3"><?php echo $b['thongTin']; ?></textarea>
											</div>
				                        </div>
								        <div class="box-footer">
								            <button type="submit" class="btn btn-primary" data-dismiss="modal">Đóng</button>
								            <button type="submit" name="del_post" class="btn btn-primary pull-right">xóa</button>
								            <button type="submit" name="edit_post" class="btn btn-primary pull-right">Lưu</button>
								        </div>
								    </form>
								</div>

					        </div>
					    </div>
					</div>
					<?php
					}
					?>






					<!--ADD post-->
					<div class="modal fade" id="add-post" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					    <div class="modal-dialog" role="document">
					        <div class="modal-content">
					            
					        	<div class="box box-primary">
								    <div class="box-header with-border">
								        <h3 class="box-title">Viết Bài</h3>
								    </div>
								    <form action="<?php echo $home; ?>/admin/back_end/chuyen_muc.php" method="POST" enctype="multipart/form-data">
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Tên sản phẩm</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="tenSP">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Số lượng</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="soLuong">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Link hình 1</label>
								                <div class="col-sm-10">
								                    <input type="file" name="anh">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Link hình 2</label>
								                <div class="col-sm-10">
								                    <input type="file" name="anh2">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Link hình 3</label>
								                <div class="col-sm-10">
								                    <input type="file" name="anh3">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Đơn Giá</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="donGia">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Trạng Thái</label>
								                <div class="col-sm-10">
								                    <div class="btn-group" data-toggle="buttons">
													    <label class="btn btn-primary active">
													        <input type="radio" name="trangThai" id="option1" autocomplete="off" checked value="còn hàng"> Còn Hàng
													    </label>
													    <label class="btn btn-primary">
													        <input type="radio" name="trangThai" id="option2" autocomplete="off" value="hết hàng"> Hết Hàng
													    </label>
													</div>
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Chuyên Mục</label>
								                <div class="col-sm-10">
								                    <select name="maLoaiSP" class="form-control">
								                    	<option value="0">Chọn chuyên mục</option>
								                    	<?php
								                    	$alcm = mysql_query("SELECT * FROM `loaisp` ");
														while ($lcm = mysql_fetch_array($alcm)) {
								                    	?>
													    <option value="<?php echo $lcm['maLoaiSP']; ?>"><?php echo $lcm['TenLoai']; ?></option>
													    <?php
														}
													    ?>
													</select>
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								        	<label for="inputEmail3" class="col-sm-2 control-label">Thông Tin</label>
								        	<div class="col-sm-10">
						                        <textarea class="form-control" name="thongTin" rows="3"></textarea>
											</div>
				                        </div>
								        <div class="box-footer">
								            <button type="submit" class="btn btn-primary" data-dismiss="modal">Đóng</button>
								            <button type="submit" name="add_post" class="btn btn-primary pull-right">Lưu</button>
								        </div>
								    </form>
								</div>

					        </div>
					    </div>
					</div>











					<!--ADD Categories-->
					<div class="modal fade" id="add-cat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					    <div class="modal-dialog" role="document">
					        <div class="modal-content">
					            
					        	<div class="box box-primary">
								    <div class="box-header with-border">
								        <h3 class="box-title">Tạo chuyên mục</h3>
								    </div>
								    <form action="<?php echo $home; ?>/admin/back_end/chuyen_muc.php" method="POST">
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Tên </label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="tiêu đề chuyên mục" name="name">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								        	<label for="inputEmail3" class="col-sm-2 control-label">Nội Dung</label>
								        	<div class="col-sm-10">
						                        <textarea class="form-control" name="text" rows="3"></textarea>
											</div>
				                        </div>
								        <div class="box-footer">
								            <button type="submit" class="btn btn-primary" data-dismiss="modal">Đóng</button>
								            <button type="submit" name="add_cat" class="btn btn-primary pull-right">Lưu</button>
								        </div>
								    </form>
								</div>

					        </div>
					    </div>
					</div>



				</section>
			</div>
			<!--Chân web-->
			<footer class="main-footer">
				<?php include 'footer.php'; ?>
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