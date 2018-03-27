<?php get_header(); ?>
<div id="cover">
            <div class="container">
                <div class="desc"><?php 
                        $en_title = get_post_meta($post->ID, 'en_title', true);
                            if ($en_title) { 
                             echo $en_title; 
                            } else { 
                        }
                    ?></div>
                <h1 class="title"><?php the_title(); ?></h1>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="https://www.sred.co.jp/english/">HOME</a></li>
                        <li><span><?php the_title(); ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
 <div id="content" class="container entry">
    <div class="box">
        <div id="post-<?php the_ID(); ?>">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>