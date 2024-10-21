<?php

 get_header();  ?>

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
				
				<div class="barda-cambars"> You are here : <?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?></div>
		<!-- row -->
		<div class="row search_main">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div class="blog_main_box">
				<?php while ( have_posts() ) : the_post();?>
				<!-- blog-article -->
				<article class="blog-article">
					<div class="singel-holder">
						<div class="title">
							
					<div class="cat"> 
							<?php $categories = get_the_category(); echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';?>
								
							</div>
							<h1><?php the_title();?></h1>
						</div>
						<div class="home-welcome-text">
							<?php the_content();?>
						</div>
						
						<div class="athor">
						 <?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
                            <img src="<?php echo $avatar; ?>" alt="">
                        <?php else: ?>
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/no-image-default.jpg" alt="Avatar">
                        <?php endif; ?>
                        <div class="link-athotr">
						<?php the_author_posts_link();?>
						<p class="dates"><?php echo date('j');?> <?php echo date('M');?> <?php echo date('Y');?></p>
						</div>
						</div>
						<?php echo do_shortcode( ' [Fancy_Facebook_Comments] ' );?>
						
						
					</div>
				</article>
				<!-- blog-article -->
				</div>
				<?php endwhile;?>
					<div class="post-nex">
<?php previous_post_link('%link', '<i class="fa fa-long-arrow-left"></i><span>Back to blog</span> '); ?> 
 <?php next_post_link('%link', '<span>Next Post</span> <i class="fa fa-long-arrow-right"></i>'); ?>
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