<?php
get_header(); 
wp_reset_query();
?>
<?php
while ( have_posts() ) : the_post();
?>
<div class="middle-conter">
<div class="container">
<div class="row">
<?php the_content(); ?>
</div>
</div>
</div>
<?php 
endwhile;
?>						
<?php get_footer(); ?>
