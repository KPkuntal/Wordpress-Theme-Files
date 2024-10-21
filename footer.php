<?php global $theme_options;?>

 <?php if (is_front_page()) { ?>

<div class="section post-section">
<div class="container">

<div class="blog-home-page">
<div class="row">

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="heading-bg">
			<h3>BLOG POST</h3>
			<p>Our blog is a treasure of knowledge which will not only help you out in winning money but also teach you out with things to follow and avoid while gambling online.</p>
		</div>
	</div>
</div>
	<!-- blog-box -->
	<div class="row">
	<!-- blog_main -->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="blog element-two owl-carousel owl-theme"> 
			<?php
				global $wp_query, $meta ,$paged ,$post;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args['paged'] = $paged;
				$temp = $wp_query;
				$args = array (
				'post_type' => 'post',
				'cat' => $_GET['catid'],
				'paged' => $paged,
				'orderby' => 'ID',
				'order' => 'ASC',
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ):
				while ($my_query->have_posts()) : $my_query->the_post();
			?>
		
		<!-- blog-box-item -->
		<article class="blog-item">
			<div class="holder">
				<div class="pic">
					<img src="<?php echo get_template_directory_uri();?>/images/empty-image-100x61.png" alt="Blank Image" width="100" height="61">
					<a class="holder" href="<?php the_permalink();?>" style="background-image:url(<?php the_post_thumbnail_url('large');?>);"></a>
				</div>
				<div class="data">
					<div class="title matchHeight">
						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
					</div>
				<?php the_excerpt();?>
				<div class="more">
					<a class="btn" href="<?php the_permalink();?>"> <span> Read More </span> <i class="fa fa-long-arrow-right"></i></a>
				</div>
				</div>
			</div>
		</article>
		<!-- blog-box-item -->
	
		<?php endwhile; ?>
		<?php endif; ?>
	</div> 
</div>
<!-- blog-box -->
</div>
<!-- blog_main -->
</div>
</div>
</div>
 
<div class="section testimonials-section">
<div class="container">
	<div class="row">
	<div class="heading-bg">
		<h3>Testimonials</h3>
		<p>Don’t take our word, listen what our clients say</p>
	</div>
	</div>
</div>
<!--POST SLIDER-->

 <div class="client owl-carousel owl-theme"> 
		 
	

		 <?php

		 $args = array( 
		 'post_type' => 'slide', 
		 'posts_per_page' => -1, 
		 'orderby' => 'menu_order', 
		 'order' => 'ASC' 
		 );

		 query_posts( $args );

		 while ( have_posts() ) : the_post();

		  ?> 

  		

  		 <div class="testimonial-item">
  		 <div class="holder">
  		 <div class="pic"> 
  		 <?php the_post_thumbnail( 'full' ); ?>
  		 <i class="fa fa-quote-right" aria-hidden="true"></i>
  		  </div>
		<div class="data">
		<blockquote>
		<div class="fild-top-part-left">
		<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<p><?php the_field('text-fild'); ?></p>   

</div>
<div class="stra-rating-right" >
		<?php if( get_field('rating') ) {
		$starNumber = get_field('rating');

		for($x=1;$x<=$starNumber;$x++) {
		echo '<i class="fa fa-star"></i>';
		}
		if (strpos($starNumber,'.')) {
		echo '<i class="fa fa-star-half-o"></i>';
		$x++;
		}
		while ($x<=5) {
		echo '<i class="fa fa-star-o"></i>';
		$x++;
		}
		//echo '(';
		//<p> the_field('rating'); </p>
		//echo ')';
		}
		?>
	</div>

<div class="full-text-box"><?php the_content(); ?>  </div>  
</blockquote>
</div>
</div>
</div>
 <?php endwhile; // end of the loop. ?>
</div>

<!--POST SLIDER-->

</div>

<?php } else if ( is_home() || is_category() || is_archive() || is_search()) { ?>

<?php } elseif ( is_single() ) { ?>

<?php  } else { ?>


<?php } ?>

<footer class="footer">

<div class="container">
	<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="footer-holder">
		<?php dynamic_sidebar( 'footer-one' ); ?>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
	<div class="footer-holder">
		<?php dynamic_sidebar( 'footer-two' ); ?>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
	<div class="footer-holder">
		<?php dynamic_sidebar( 'footer-three' ); ?>
		</div>
	</div>
	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
	<div class="footer-holder">
		<?php dynamic_sidebar( 'footer-four' ); ?>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<div class="footer-holder">
		<?php dynamic_sidebar( 'footer-five' ); ?>
		<!-- ICON -->	
				<div class="footer-socil">
				<ul>
	<li><a href="<?php echo $theme_options['social-facebook'];?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/face.png" alt="Facebook" width="26" height="26"></a></li>
	<li><a href="<?php echo $theme_options['social-whatsapp'];?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/wp.png" alt="wh" width="26" height="26"></a></li>
		<li><a href="<?php echo $theme_options['social-mail'];?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/mail.png" alt="wh" width="26" height="26"></a></li>
			<li><a href="<?php echo $theme_options['social-circle'];?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/ch.png" alt="wh" width="26" height="26"></a></li>
				<li><a href="<?php echo $theme_options['social-skype'];?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/sky.png" alt="wh" width="26" height="26"></a></li>

				</ul>
				</div>
		<!-- ICON -->
		<!-- ICON -->	
	<div class="footer-pay-card">
	<ul>
	<li><img src="<?php bloginfo( 'template_url' ); ?>/images/p1.png" alt="card" width="48" height="31"></li>
	<li><img src="<?php bloginfo( 'template_url' ); ?>/images/p2.png" alt="card" width="48" height="31"></li>
	<li><img src="<?php bloginfo( 'template_url' ); ?>/images/p3.png" alt="card" width="48" height="31"></li>
	<li><img src="<?php bloginfo( 'template_url' ); ?>/images/p4.png" alt="card" width="48" height="31"></li>
	</ul>
	</div>
		<!-- ICON -->
		</div>
	</div>
     	


  
</div>
</div>
   

</footer>
<div class="section footer-buttom">
<div class="container">
	<div class="row">
	<div class="copy"><?php echo $theme_options['footer-copyright'];?> &Iota; <a href="#">Sitemap</a></div>
	<div class="nav-right-bottom">
  <ul>

   	  <?php

	   $args = array(

		   'theme_location'	 => '',

		   'menu'				 => 'footer-buttom',

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
	
</div>
</div>
</div>


<script>
	var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }
</script>
<script type="text/javascript">
jQuery(document).ready(function(e){
	
	//Clien slider

  	jQuery(".client").owlCarousel({
 
	stagePadding:200,
	center: true,
	loop:true,
	 autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
	margin:40,
	items:1,
	lazyLoad: true,
	nav:true,
  responsive:{
        0:{
            items:1,
            stagePadding: 0
        },
        600:{
            items:1,
            stagePadding: 100
        },
        1000:{
            items:1,
            stagePadding: 200
        },
        1200:{
            items:1,
            stagePadding: 400
        },
        1400:{
            items:1,
            stagePadding: 400
        },
        1600:{
            items:1,
            stagePadding: 400
        },
        1800:{
            items:1,
            stagePadding: 400
        }
    }
 
  });
 
//Clien slider
  
//Redux slider
	
jQuery(".element-two").owlCarousel({
loop:true,
    margin:10,
    nav:true,
    animateOut: 'fadeOut',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
 
});

jQuery('.owl-carousel').find('.owl-nav,.owl-dots').removeClass('disabled');
jQuery('.owl-carousel').on('changed.owl.carousel', function(event) {
	jQuery(this).find('.owl-nav,.owl-dots').removeClass('disabled');
});
  
//Redux slider
  
//menu

var pull = jQuery('#pull');

menu = jQuery('#menu-bg');

menuHeight	= menu.height();



jQuery(pull).on('click', function(e) {

e.preventDefault();

menu.slideToggle(1000);



});



jQuery(window).resize(function(){

var w = $(window).width();

if(w > 320 && menu.is(':hidden')) {

menu.removeAttr('style');

}



});


//menu

//scroll top

jQuery(window).scroll(function(){
   		if (jQuery(this).scrollTop()>100){
   			jQuery(".scrollup").addClass("active");
      	}else{
        	jQuery(".scrollup").removeClass("active");
    	}
 	});
	jQuery(".scrollup").click(function(){
   		jQuery("html, body").animate({scrollTop:0},600);
  		return false;
	});
	
//scroll top
// TOOLTIP
jQuery("[data-toggle='tooltip']").tooltip();
    
// TOOLTIP

jQuery('.one-column a[href*="#"]:not([href="#"]),.arrow-down a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

//machheight
jQuery(".matchHeight").matchHeight(); 

jQuery('.grid').masonry({
 itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
  percentPosition: true
});

});



</script>


<?php wp_footer(); ?>


</body>

</html>