<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,700i,800|Raleway:400,500,600,600i,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom.css"/>
</head>

<body <?php body_class(); ?>>

<section class="top-header">
<div class="container-fluid ccf">
<div class="row">
<div class="col-md-12">
<!--<a class="call-us" href="#"><i class="fa fa-phone" aria-hidden="true"></i> 1-780-293-1870</a>
<ul class="social-media">
<li><a href="#"><img src="<?php //bloginfo('template_directory'); ?>/images/facebook.png"/></a></li>
<li><a href="#"><img src="<?php //bloginfo('template_directory'); ?>/images/twitter.png"/></a></li>
<li><a href="#"><img src="<?php //bloginfo('template_directory'); ?>/images/instagram.png"/></a></li>
<li><a href="#"><img src="<?php //bloginfo('template_directory'); ?>/images/linkedin.png"/></a></li>
</ul>-->
<?php dynamic_sidebar('top-header'); ?>
</div>
</div>
</div>
</section>
 
<header class="header-section">
<div class="container-fluid ccf">
<div class="row">
<nav class="navbar navbar-expand-lg">
  <div class="navbar-brand"><?php echo get_custom_logo('custom-logo'); ?></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php 
	wp_nav_menu(array(
	'menu' => 'primary',
	'menu_class' => 'navbar-nav',
	'menu_id' => 'main-menu',
	));
	?>
  
  
    <!--<ul class="navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">UF locates</a></li>
      <li><a href="#">UF Mapping</a></li>
      <li><a href="#">Pipeline Inspection</a></li>
      <li><a href="#">3D as-built scanning</a></li>
      <li><a href="#">Articles</a></li>
    </ul>-->
  </div>
</nav>
</div>
</div>
</header>