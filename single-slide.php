<?php

 get_header();  ?>

<!-- wraper_search_main -->
<div class="wraper_search_main">
	<div class="container">
		<!-- row -->
		<div class="row search_main">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="blog_main_box" >
				<?php while ( have_posts() ) : the_post();?>
				<!-- blog-article -->
				<article class="blog-article">
					<div class="holder-clients">
						<div class="title">
							<h3><?php the_title();?></h3>
							<p><?php the_field('text-fild'); ?></p>   
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
						</div>
						
						<div class="pic">
							
							<div class="holder">
								<?php the_post_thumbnail('full');?>
							</div>
							
						</div>
						<div class="home-welcome-text">
							<?php the_content();?>
						</div>


					</div>
				</article>
				<!-- blog-article -->
				</div>
				<?php endwhile;?>
				
			</div>
			
		</div>
		<!-- row -->
	</div>
</div>
<!-- wraper_search_main -->

<?php get_footer();?>