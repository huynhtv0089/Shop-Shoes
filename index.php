<?php 
include 'system/core.php'; 
$title="Trang Chủ";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include 'fontend/head.php'; ?>
	</head>
	<body>
		<?php include 'fontend/header.php'; ?>

		<?php include 'fontend/menu.php'; ?>

		<?php include 'fontend/slider.php'; ?>

		<?php include 'fontend/index.php'; ?>

		<?php include 'fontend/footer.php'; ?>

		<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
	</body>
</html>