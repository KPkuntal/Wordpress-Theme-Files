<?php get_header();?>

<!-- wraper_search_main -->
<div class="wraper_search_main achive-page">
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div class="blog_main_box">
				<!-- search_main_body -->
				<div class="search_main_body">
					<?php if (have_posts()) : ?>
					<!-- search_main_body_title -->
					<div class="search_main_body_title">
						<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
						<?php /* If this is a category archive */ if (is_category()) { ?>
						<h1><?php single_cat_title(); ?></h1>
						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<h1>Archive for <?php the_time('F, Y'); ?></h1>
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<h1>Archive for <?php the_time('Y'); ?></h1>
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<h1>Author Archive</h1>
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<h1>Blog Archives</h1>
						<?php } ?>
					</div>
					<!-- search_main_body_title -->
					<!-- blog_main_box -->
					<div class="blog_main_box">
						<?php while (have_posts()) : the_post(); ?>
						<!-- blog-article -->
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
						<!-- blog-article -->
						<?php endwhile; ?>
					</div>
					<!-- search_main_body_list -->
					<!-- search_main_body_pagination -->
					<div class="post-nex">
						<div class="alignleft"><?php next_posts_link('<i class="fa fa-long-arrow-left"></i><span>Back to blog</span>');?></div>
						<div class="alignright"><?php previous_posts_link('<span>Next Post</span> <i class="fa fa-long-arrow-right"></i>');?></div>
					</div>
					<!-- search_main_body_pagination -->
					<?php else :
					if ( is_category() ) { // If this is a category archive
					printf("<div class='search_main_body_list'><article class='item'><h3>Sorry, but there aren't any posts in the %s category yet.</h3></article></div>", single_cat_title('',false));
					} else if ( is_date() ) { // If this is a date archive
					echo("<div class='search_main_body_list'><article class='item'><h3>Sorry, but there aren't any posts with this date.</h3></article></div>");
					} else if ( is_author() ) { // If this is a category archive
					$userdata = get_userdatabylogin(get_query_var('author_name'));
					printf("<div class='search_main_body_list'><article class='item'><h3>Sorry, but there aren't any posts by %s yet.</h3></article></div>", $userdata->display_name);
					} else {
					echo("<div class='search_main_body_list'><article class='item'><h3>No posts found.</h3></article></div>");
					}
					get_search_form();
					endif;?>
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