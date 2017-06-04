<?php
include '../system/core.php';
if (isset($_GET['login'])) {
    if ($ad_password!=$_GET['password']) {
        die('đăng nhập thất bại <br><a href="'.$home.'/admin/dangnhap.php">Thử lại</a> ');
    }
    $_SESSION['dn_tendangnhap'] = $_GET['password'];
    header("location: $home/admin/index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hoàng Yến | Đăng Nhập Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo $home; ?>/style/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $home; ?>/style/admin/dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="<?php echo $home; ?>/style/admin/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo $home; ?>/style/admin/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="index2.html"><b>Hoàng Yến</b></a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">Admin</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="<?php echo $home; ?>/style/images/avatar.png" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form class="lockscreen-credentials">
                <div class="input-group">
                    <form method="POST">
                        <input type="password" name="password" class="form-control" placeholder="password">

                        <div class="input-group-btn">
                            <button type="submit" name="login" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                        </div>
                    </form>
                </div>
            </form>
            <!-- /.lockscreen credentials -->

        </div>
        <!-- /.lockscreen-item -->
        
        <div class="lockscreen-footer text-center">
            Copyright &copy; 2017 <b><a href="#" class="text-black">Hoàng Yến</a></b>
        </div>
    </div>
    <!-- /.center -->

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo $home; ?>/style/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo $home; ?>/style/admin/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>