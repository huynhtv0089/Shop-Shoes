<?php 
include '../system/core.php'; 

session_destroy();
header("location: ".$url_home."");
?>