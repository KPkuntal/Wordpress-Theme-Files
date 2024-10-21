<?php /* Template Name: Contact Page */ ?>
 
<?php get_header(); ?>


<!-- wraper_search_main -->
<div class="wraper_search_main">
	<div class="container">

		<div class="row search_main">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div class="blog_main_box">
				
				<!-- blog-article -->
				<article class="blog-article">
				<div class="contact-holder">
				<h1><?php the_title();?></h1>
<?php the_field('page_description'); ?>
<div class="forms ">
<?php echo do_shortcode( '[contact-form-7 id="173" title="Contact form"]' );?>
	
</div>
			</div>
				</article>
				<!-- blog-article -->
				
				</div>
			
			
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<!-- sidebar -->
				<ul class="sidebar">
				<?php dynamic_sidebar('main-sidebar');?>
				</ul>
				<!-- sidebar -->
			</div>
		</div>
		<!-- row -->
	</div>
</div>
<!-- wraper_search_main -->



 

<?php get_footer(); ?>