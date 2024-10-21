<?php if ( have_posts() ) { the_post(); rewind_posts(); } ?>
<?php if ('slide' == get_post_type()){ ?>
<?php include(TEMPLATEPATH . '/single-slide.php'); ?>
<?php } else{ ?>
<?php include(TEMPLATEPATH . '/single-blog.php'); ?>
<?php } ?>



