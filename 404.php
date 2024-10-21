<?php get_header();?>

<!-- main -->
<main class="main">
	<!-- wraper_error_main -->
	<div class="error-bg">
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<!-- error_main -->
					<div class="error_main">
						<img src="<?php echo $theme_options['error-img']['url'];?>" alt="404 Error" width="1500" height="778">
						<div class="error-text"><?php echo $theme_options['error-text'];?></div>
					
					</div>
					<!-- error_main -->
				</div>
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- wraper_error_main -->
</main>
<!-- main -->

<?php get_footer();?>