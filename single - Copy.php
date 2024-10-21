<?php get_header();?>

<!-- wraper_search_main -->
<div class="wraper_search_main">
	<div class="primaryContainer">
		<!-- row -->
		<div class="row search_main">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div class="blog_main_box">
				<?php while ( have_posts() ) : the_post();?>
				<!-- blog-article -->
				<article class="blog-article">
					<div class="holder">
						<div class="title">
							<h1><?php the_title();?></h1>
							<p class="meta">Posted By <?php the_author_posts_link();?> - Posted In <?php $categories = get_the_category(); echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';?></p>
						</div>
						<div class="date">
								<p><?php echo date('j');?> <?php echo date('M');?> <?php echo date('Y');?></p>
							</div>
						<div class="pic">
							<img src="<?php bloginfo('template_directory');?>/images/blog-article.jpg" alt="blank image" width="100" height="42">
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
				<!-- related-post-box -->
				<!---<div class="related-post-box">
					<h5 class="title">Related Article</h5>
					<ul>
						<?php
						$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 10, 'post__not_in' => array($post->ID) ) );
						if( $related ) foreach( $related as $post ) {
						setup_postdata($post); ?>
						<li><a href="<?php the_permalink();?>" rel="bookmark" title="<?php the_title();?>"><?php the_title();?></a>
						<?php the_post_thumbnail('full');?>
						<?php the_excerpt();?>
						</li>
						<?php }
						wp_reset_postdata(); ?>
					</ul> 
				</div>--->
				<!-- related-post-box -->
			</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
				<!-- sidebar -->
				<ul class="sidebar">
					<?php dynamic_sidebar('Post Sidebar');?>
				</ul>
				<!-- sidebar -->
			</div>
		</div>
		<!-- row -->
	</div>
</div>
<!-- wraper_search_main -->

<?php get_footer();?>