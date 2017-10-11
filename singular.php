<?php
wp_enqueue_style( 'xjsu-style-post', get_theme_file_uri( '/assets/css/post.css' ) );
get_header(); ?>
    <div class="post-nav-container">
        <div class="post-nav">
            <div class="post-nav-path-container">
                <a href="<?php echo get_home_url(); ?>">
                    <div class="post-nav-path home"><span class="post-nav-path-text">首页</span></div>
                </a>
				<?php if ( 'page' != get_post_type() ): ?>
					<?php $categories = get_the_category(); ?>
                    <a href="<?php echo get_category_link( $categories[0] ) ?>">
                        <div class="post-nav-path category"><span class="post-nav-path-text"><?php echo $categories[0]->name ?></span></div>
                    </a>
				<?php endif; ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="post-nav-path title"><span class="post-nav-path-text"><?php the_title(); ?></span></div>
                </a>
            </div>
        </div>
    </div>
<?php the_post(); ?>
    <div class="main">
        <div class="post-container">
            <div class="post-title-container">
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="post-title-info-container">
                    <div class="post-title-info author"><span class="post-title-info-text"><?php the_author(); ?></span></div>
                    <div class="post-title-info time"><span class="post-title-info-text"><?php echo get_the_time(); ?></span></div>
                    <div class="post-title-info visit-count"><span class="post-title-info-text"><?php the_views(); ?></span></div>
                </div>
            </div>
            <div class="post-body-container">
                <div class="post-body">
					<?php the_content(); ?>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
