<?php
get_header();
?>
<?php $cat = get_the_category(); $cat = $cat[0];?>
<div id="cover">
    <div class="container">
        <div class="desc">News</div>
        <h1 class="title">NEWS</h1>
        <div class="breadcrumb">
            <ul>
                <li><a href="https://www.sred.co.jp">ホーム</a></li>
                <li><a href="https://www.sred.co.jp/information/">NEWS</a></li>
                <li><span><?php echo $cat->cat_name;?></span></li>
            </ul>
        </div>
    </div>
</div>
 <div id="content" class="container">
    <div class="box">
		<section id="updates">
			<h3 class="sct-title"><?php echo $cat->cat_name;?></h3>
			<div class="list">
			
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="item" >
					<div class="temp">
						<span class="date date-news">
							<span class="date-info"><?php echo get_the_date('Y.m.d'); ?></span>
							<a title="<?php echo $cat->cat_name;?>" href="<?php $category_link = get_category_link($cat->cat_ID); echo esc_url( $category_link ); ?>" class="label label-blue"><?php echo $cat->cat_name;?></a>
						</span>
						<h5 class="title"><?php $title= $post->post_title; echo $title; ?></h5>	
						<div class="clearfix"></div>
						<div class="news-excerpt">
							<?php 
							    echo get_the_excerpt();
							?>
						</div>
					</div>
					<span class="arrow"></span>
				</div>

				<?php endwhile; endif; ?>
			</div>
			<?php wp_pagenavi(); ?>
		</section>	
	</div>
</div>
<?php
get_footer();

?>
