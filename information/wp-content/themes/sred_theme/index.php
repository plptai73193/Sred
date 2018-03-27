<?php
get_header();
?>
 <div id="content" class="container">
    <div class="box">
		<div id="post-<?php the_ID(); ?>" class="box">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>        
    </div>
</div>
<?php
get_footer();

?>
