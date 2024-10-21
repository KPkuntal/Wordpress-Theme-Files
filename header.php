<?php global $theme_options;?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
 <!--META-->
<meta charset="utf-8">
<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
  <!--META-->
   
<!--PAGE TITLE-->
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?> </title>
  <!--PAGE TITLE-->

<!--FAB ICON-->

<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_options['fav-icon']['url'];?>">
  <!--FAB ICON-->

<!--STYLE-->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.12.3.min.js"></script>
	<link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_url' ); ?>/css/animate.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_url' ); ?>/css/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php bloginfo( 'template_url' ); ?>/css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!--STYLE-->
<?php wp_head(); ?>
<?php echo $theme_options['css-editer'];?>
 </head>
<body <?php body_class( 'home' ); ?>>

  <!-- scrollup -->
  <div class="scrollup"></div>
  <!-- scrollup -->
  
    <div  class="section header">
    <div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!-- logo -->
	<div class="logo">
	<a href="<?php echo home_url();?>"> 
	<img src="<?php echo $theme_options['header-logo']['url'];?>" alt="Logo" width="171" height="85">

	</a>
	</div>
<!-- logo -->
	<!-- phone -->					
	<div class="header-phone">
	<span>whatsapp us on</span>
	<strong><a href="tel:<?php echo $theme_options['phone-nu'];?>"><?php echo $theme_options['phone-nu'];?></a></strong>
	</div>
	<!-- phone -->	
	<!-- ICON -->	
<div class="top-icon">
<ul>
	<li><a href="<?php echo $theme_options['social-facebook'];?>"><i class="fa fa-facebook"></i></a></li>
	<li><a href="<?php echo $theme_options['social-twitter'];?>"><i class="fa fa-twitter"></i></a></li>
	<li><a href="<?php echo $theme_options['social-in'];?>"><i class="fa fa-linkedin"></i></a></li>
	<li><a href="<?php echo $theme_options['social-google'];?>"><i class="fa fa-google-plus"></i></a></li>
</ul>

	

</div>
<!-- ICON -->
<!-- MENU -->	
	<a href="#" id="pull">
		<div class="hamburger hamburger--spring">
		    <div class="hamburger-box">
		        <div class="hamburger-inner"></div>
		    </div>
		</div>
	</a>
<div class="nav">

  <ul id="menu-bg">

   	  <?php

	   $args = array(

		   'theme_location'	 => '',

		   'menu'				 => 'top-menu',

		   'container'			 => '',

		   'container_class'	 => '',

		   'container_id'		 => '',

		   'menu_class'		 => 'menu',

		   'menu_id'			 => 'menu-bg',

		   'echo'				 => true,

		   'fallback_cb'		 => 'wp_page_menu',

		   'before'			 => '',

		   'after'				 => '',

		   'link_before'		 => '',

		   'link_after'		 => '',

		   'items_wrap'		 => '%3$s',

		   'depth'				 => 0,

		   'walker'			 => '' );

	   ?>

	   <?php wp_nav_menu( $args ); ?> 
 </ul>

</div>
<!-- MENU -->	
</div>
	
	</div>

   </div>
    </div>
  
  


 

   <div class="section">

<?php
        //$f=is_front_page();
        //var_dump('debug', $f);
        ?>


  <?php if (is_front_page()) { ?>
  
<div class="home-banner">
<?php echo do_shortcode('[rev_slider alias="slider"]');?>
</div>



<?php }
else if ( is_home() || is_category() || is_archive() || is_search()) { ?>
<!---blog-baner--->
<?php }
elseif ( is_single() ) { ?>

<!---single---->



<!---blog-baner--->	

<?php  } else { ?>

    <?php
    //Default image source
    $templateDir = get_bloginfo('template_directory');
    $thumbimg = "{$templateDir}/images/inner-banner.jpg";

    $thumbid = get_post_thumbnail_id();

    if (!empty($thumbid)) {
        $thumbimg = wp_get_attachment_url($thumbid);
    }
    ?>


 <div class="inner-banners" style=" background:url('<?php echo $thumbimg; ?>');background-position: center center; background-repeat:no-repeat; background-size:cover;">

<div class="container">
<div class="row">

 <div class="col-lg-3 col-md-3 col-sm-12 colxs-12"></div>

 <div class="col-lg-6 col-md-6 col-sm-12 colxs-12">
<?php 

$image = get_field('image');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
<div class="header-right">
<strong><?php the_title();?></strong>
<p><?php the_field('banner_descriptio'); ?></p>

 </div>

</div>

<div class="col-lg-3 col-md-3 col-sm-12 colxs-12"></div>
</div>
</div>

</div>
<?php } ?>
       
</div>	
       
       


       
      