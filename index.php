<?php get_header();?>

<!-- wraper_search_main -->
<div class="wraper_search_main">
	<div class="container">
	
	
	<!-- related-post-box -->
				<div class="related-post-box">
			<div class="grid">
			<div class="grid-sizer"></div>
							<?php
        // the query
        $the_query = new WP_Query(array(
            'category_name' => 'vip-services',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'order' => 'ASC',
        ));
        ?>

        <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
             <div class="grid-item">
            <div class="post-cat">
            <a  href="<?php the_permalink();?>">
            	<?php the_post_thumbnail('full'); ?>
            	
            	</a>
            	<div class="post-meta-titel">
            <div class="cat-post"><?php the_category(); ?></div>
             <h4><a  href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>   
            	</div>
            </div>
            </div>
               
    <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
				
				</div>
		 </div>
				<!-- related-post-box -->
	
	
		<!-- row -->
		<div class="row search_main">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>LATEST BLOGS</h2></div>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
			
				<!-- blog_main_box -->
				<div class="blog_main_box">
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
					<!-- pagination -->
					<div class="pagination">
						<?php if (function_exists("pagination")) { pagination($my_query->max_num_pages);} ?>
						<?php endif; $wp_query = null; $wp_query = $temp; ?>
					</div>
					<!-- pagination -->
				</div>
				<!-- blog_main_box -->
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