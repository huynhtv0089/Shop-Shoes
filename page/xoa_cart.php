<?php 
include '../system/core.php';
$id=$_GET['id']; /// đưa cái ?id= vào biến $id
// thực hiện xoá cái $id đó 
mysql_query("DELETE FROM `cart` WHERE `id` = '$id'");
// code chuyển trang của php
header("location: $url_home/page/list_cart.php");