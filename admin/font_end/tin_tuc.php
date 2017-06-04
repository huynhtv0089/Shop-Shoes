<?php
include '../../system/core.php'; 
//kiểm tra xem nếu chưa đăng nhập thì trở về trang đăng nhập
if ($_SESSION['dn_tendangnhap']!=$ad_password) {
	header("location: $home/admin/dangnhap.php");
	exit;
}
$title="Tin Tức";
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
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-post"><i class="fa fa-pencil-square" aria-hidden="true"></i> Viết tin tức</button>
					</div>










					<div class="box box-primary">
					    <div class="box-header with-border">
					        <h3 class="box-title">Danh sách tin tức</h3>
					        <div class="box-tools pull-right">
					            <ul class="pagination pagination-sm no-margin pull-right">
					            </ul>
					        </div>
					        <!-- /.box-tools -->
					    </div>
					    <!-- /.box-header -->
					    <form action="http://chandraptuanphat.com/shop.php?view=news&amp;method=del-chk-post" method="POST">
					        <div class="box-body no-padding">
					            <div class="table-responsive mailbox-messages">

					                <table class="table table-hover table-bordered table-striped" id="myTable">
					                    <tbody>
					                    	<?php
						                	if (!$id) {
						                		$bv = mysql_query("SELECT * FROM `tintuc` ");
						                	} else {
						                		$bv = mysql_query("SELECT * FROM `tintuc` ");
						                	}
						                	
											$n=1;
											while ($b = mysql_fetch_array($bv)) {
												?>
							                    <tr>
							                        <td class="mailbox-subject" data-toggle="modal" data-target="#info-post-<?php echo $b['maTin'] ?>"><?php echo $b['tenTin']; ?></td>
							                        <td class="mailbox-subject"><b class="label label-primary" data-toggle="modal" data-target="#info-post-<?php echo $b['maTin'] ?>">Chỉnh sửa</b></td>
							                    </tr>
							                    <?php
							                    $n++;
						                	}
						                    ?>
					                    </tbody>
					                </table>
					            </div>
					        </div>

					    </form>
					</div>




					<?php
                	if (!$id) {
                		$bv = mysql_query("SELECT * FROM `tintuc` ");
                	} else {
                		$bv = mysql_query("SELECT * FROM `tintuc` ");
                	}
                	
					$n=1;
					while ($b = mysql_fetch_array($bv)) {
					?>
					<!--ADD post-->
					<div class="modal fade" id="info-post-<?php echo $b['maTin'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
					    <div class="modal-dialog" role="document">
					        <div class="modal-content">
					            
					        	<div class="box box-primary">
								    <div class="box-header with-border">
								        <h3 class="box-title">Chỉnh sửa tin tức</h3>
								    </div>
								    <form action="<?php echo $home; ?>/admin/back_end/tin_tuc.php" method="POST">
								    	<input type="hidden" name="maTin" value="<?php echo $b['maTin'] ?>">
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Tiêu đề</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="name" value="<?php echo $b['tenTin'] ?>">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Link hình</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="img" value="<?php echo $b['anhTin'] ?>">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								        	<label for="inputEmail3" class="col-sm-2 control-label">Nội Dung</label>
								        	<div class="col-sm-10">
						                        <textarea class="form-control" name="text" rows="3"><?php echo $b['moTaTin'] ?></textarea>
											</div>
				                        </div>
								        <div class="box-footer">
								            <button type="submit" class="btn btn-primary" data-dismiss="modal">Đóng</button>
								            <button type="submit" name="del_news" class="btn btn-primary pull-right">Xóa Tin</button>
								            <button type="submit" name="edit_news" class="btn btn-primary pull-right">Lưu</button>
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
								        <h3 class="box-title">Viết tin tức</h3>
								    </div>
								    <form action="<?php echo $home; ?>/admin/back_end/tin_tuc.php" method="POST">
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Tiêu đề</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="name">
								                </div>
								            </div>
								        </div>
								        <div class="box-body">
								            <div class="form-group">
								                <label for="inputEmail3" class="col-sm-2 control-label">Link hình</label>
								                <div class="col-sm-10">
								                    <input type="text" class="form-control" placeholder="" name="img">
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
								            <button type="submit" name="add_news" class="btn btn-primary pull-right">Lưu</button>
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