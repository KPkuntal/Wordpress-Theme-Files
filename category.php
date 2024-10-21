<?php
get_header(); ?>
<?php  wp_reset_query();  ?>


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
            	<?php the_post_thumbnail(); ?>
            	
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
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h2>BLOGS CATEGORY</h2></div>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
			
				<div class="blog_main_box">
<?php if ( have_posts() ) : ?>

<?php
// Start the Loop.
while ( have_posts() ) : the_post();
$url1 = wp_get_attachment_url( get_post_thumbnail_id(get_the_id()) );
$thumb_id1 = get_post_thumbnail_id(get_the_id());	            
$alt1 = get_post_meta($thumb_id1, '_wp_attachment_image_alt', true);
?>
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
<?php endwhile;?> 
<div class="pagination">
<?php 
if (function_exists("pagination")) {
pagination($my_query->max_num_pages);} 
?>
<?php
endif; 
?>
</div>






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


<?php get_footer(); ?>



