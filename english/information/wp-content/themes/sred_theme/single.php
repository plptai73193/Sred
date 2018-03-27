<?php
get_header();
while (have_posts()):
	the_post();
?>
<?php $cat = get_the_category(); $cat = $cat[0];?>

<div id="cover">
    <div class="container">
        <div class="desc">News</div>
        <h1 class="title">NEWS</h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="../../">HOME</a></li>
                <li><span>NEWS</span></li>
            </ul>
        </div>
    </div>
</div>
 <div id="content" class="container">
    <div class="box">
    	<div id="post-<?php the_ID(); ?>">
			<h3><?php the_title(); ?></h3>
			<span><?php echo get_the_date('Y.m.d'); ?></span>
			<div><?php echo $cat->cat_name;?></div>
			<p><?php the_content();?></p>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php
get_footer();

?>
