<?php get_header();?>

<!-- wraper_search_main -->
<div class="wraper_search_main achive-page">
	<div class="container">
		<!-- row -->
		<div class="row search_main">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>SEARCH RESULTS</h2></div>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
	
				<div class="blog_main_box">
				<!-- search_main_body -->
				<div class="search_main_body">
					<?php if (have_posts()) : ?>
					<!-- search_main_body_title -->
					
					<!-- search_main_body_title -->
					<!-- search_main_body_list -->
					<div class="blog_main_box">
						<?php while (have_posts()) : the_post(); ?>
						<!-- item -->
						<article class="blog-article">
						<div class="holder">
						<div class="post-image matchHeight" style="background-image:url(<?php the_post_thumbnail_url('large');?>);">
						<div class="post-image-sm hidden-lg hidden-md visible-sm visible-xs"><?php the_post_thumbnail('large');?></div>
									
						</div>
							
							<div class="post-holder-right matchHeight">
							<div class="cat"> 
							<?php $categories = get_the_category(); echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';?>
								
							</div>
							<div class="date">
									<p><?php echo date('j');?> <?php echo date('M');?> <?php echo date('Y');?></p>
								</div>
								<div class="title">
								<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
								
								</p>
							</div>
							<div class="home-welcome-text">
								<?php the_excerpt();?>
								<a class="lik-reade" href="<?php the_permalink();?>">continue reading</a>
							</div>
							<p class="meta">Author <?php the_author_posts_link();?> </p>
							</div>
							
							
						
							
							
						</div>
					</article>
						<!-- item -->
						<?php endwhile; ?>
					</div>
					<!-- search_main_body_list -->
					<!-- search_main_body_pagination -->
					<div class="post-nex">
						<div class="alignleft"><?php next_posts_link('<i class="fa fa-long-arrow-left"></i><span>Back to blog</span>');?></div>
						<div class="alignright"><?php previous_posts_link('<span>Next Post</span> <i class="fa fa-long-arrow-right"></i>');?></div>
					</div>
					<!-- search_main_body_pagination -->
					<?php else : ?>
					<!-- search_main_body_noresult -->
					<div class="search_main_body_noresult">
						<h1>Oh No! No posts found. Try a different search!</h1>
					</div>
					<!-- search_main_body_noresult -->
					<?php endif; ?>
				</div>
				<!-- search_main_body -->
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

<?php get_footer();?>