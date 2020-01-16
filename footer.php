<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<footer class="pt-70 text-center text-white footer-section" style="
		background: url(<?php bloginfo('template_directory'); ?>/images/footer_bg.jpg);
		background-size: cover;
		background-position: center;
	">
<div class="container-fluid ccf">
<div class="row">
<?php dynamic_sidebar('footer'); ?>
</div>
<div class="row">
<div class="col-md-12 copyright">
<?php dynamic_sidebar('Copyright'); ?><!--<p>© Company On-Site Surveys Inc. 2018</p>-->
</div>
</div>
<!--<div class="row">
	<div class="col-md-4 footer-block">
	<h2>SERVICES</h2>
	<ul>
	<li><a href="#"> Subdivision Applications and Surveys</a></li>
	<li><a href="#">Rural and Urban Municipal Surveys</a></li>
	<li><a href="#">Boundary and Fence Line Surveys </a></li>
	<li><a href="#">Topographic Surveys </a></li>
	<li><a href="#">Rural Real Property Reports </a></li>
	<li><a href="#">Roads and Rights-of-Way </a></li>
	<li><a href="#">Crown land dispositions </a></li>
	</ul>
	</div>
	<div class="col-md-4 footer-block">
	<h2>CONTACT</h2>
	<h4>Dwayne Edmundson, Owner</h4>
	<ul>
	<li><a href="#"> Alberta Land Surveyor</a></li>
	<li><a href="#">780.293.1870</a></li>
	<li><a href="#">dwayne@onsitesurveys.ca</a></li>
	</ul>
	<h4>Travis Young, Owner</h4>
	<ul>
	<li><a href="#">Operations</a></li>
	<li><a href="#">780.919.1433</a></li>
	<li><a href="#">travis@onsitesurveys.ca</a></li>
	</ul>	
	</div>
	<div class="col-md-4 footer-block">
	<h2>MEMBERSHIP</h2>
	<p>On-Site Surveys Inc. is<br>
	a registered member<br>
	of the Alberta Land<br>
	Surveyor’s Association<br>
	(Permit to practice P312)</p>
	<img src="<?php bloginfo('template_directory'); ?>/images/alverta_logo.jpg"/>
	</div>
</div>
-->

</div>
</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/slick.min.js"></script>
    <script>
$('.home-slider1').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.client-slider1').slick({
  dots: true,
  arrows: false,
  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
</script> 
	<?php wp_footer(); ?>
  </body>
</html>

