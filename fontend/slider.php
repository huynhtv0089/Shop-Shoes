<?php
// http://getbootstrap.com/javascript/#carousel
?>
<!--banner-starts-->
<div class="bnr" id="home">
	<div  id="top" class="callbacks_container">
		<ul class="rslides" id="slider4">
		    <li>
				<div class="banner-1"></div>
			</li>
			<li>
				<div class="banner-2"></div>
			</li>
			<li>
				<div class="banner-3"></div>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
<!--banner-ends--> 
<!--Slider-Starts-Here-->
<script src="<?php echo $home; ?>/style/js/responsiveslides.min.js"></script>
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
<!--End-slider-script-->
<marquee direction="left" behavior="alternate">
	<div class="pro_title" style="
    margin-top: 25px;" <p=""><font face="Monotype Corsiva" color="#550000" font="" size="6" <=""><p></p><img src="<?php echo $home; ?>/style/images/chay2.png"> "ONLINE SHOES uy tín và chất lượng... vui lòng khách đặt ... vừa lòng khách mang!"</font></div><font face="Monotype Corsiva" color="#550000" font="" size="6" <="">
</font></marquee>
<div class="pro_title"><img src="<?php echo $home; ?>/style/images/hd.png" width="50px" height="50px">THỜI GIAN HOẠT ĐỘNG VÀ CÁC DỊCH VỤ ĐỔI TRẢ HÀNG: 8H-22H </div>
<div>
<img src="<?php echo $home;?>/style/images/chinhsach.png" height="120"> </div>

