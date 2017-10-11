<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1366">
    <meta name="description" content="西安交通大学学生会官方网站">
    <meta name="author" content="Ganlv,eeyes.net">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>

<body>
    <nav class="nav">
        <div class="nav-bg">
            <div class="nav-bg-tech"></div>
            <div class="nav-bg-link"></div>
        </div>
        <div class="nav-container">
            <a href="<?php echo get_home_url(); ?>">
                <div class="nav-logo">
                    <img class="nav-logo-image" src="<?php echo get_theme_file_uri( 'assets/images/logo-xjsu.png' ); ?>" alt="西安交通大学学生会logo">
                </div>
            </a>
            <div class="nav-tech">
                <span class="nav-tech-span">技术支持</span>
                <span class="nav-tech-span"><a target="_blank" href="http://www.eeyes.net/"><img src="<?php echo get_theme_file_uri( 'assets/images/logo-eeyes.png' ); ?>" alt="e瞳网logo"></a></span>
                <span class="nav-tech-span"><a target="_blank" href="http://eux.eeyes.net/"><img src="<?php echo get_theme_file_uri( 'assets/images/logo-eux.png' ); ?>" alt="EUX logo"></a></span>
            </div>
            <div class="nav-link">
                <ul class="nav-link-ul">
					<?php $category = get_category_by_slug( 'news' ); ?>
                    <li class="nav-link-li"><a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name; ?></a></li>
					<?php $category = get_category_by_slug( 'push' ); ?>
                    <li class="nav-link-li"><a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name; ?></a></li>
					<?php
					$the_query = new WP_Query( [
						'numberposts' => 1,
						'post_type'   => 'page',
						'pagename'    => 'about',
					] );
					if ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>
                        <li class="nav-link-li"><a href="<?php the_permalink(); ?>">组织简介</a></li>
						<?php
					endif;
					wp_reset_postdata();
					?>
					<?php $category = get_category_by_slug( 'activity' ); ?>
                    <li class="nav-link-li"><a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name; ?></a></li>
					<?php $category = get_category_by_slug( 'service' ); ?>
                    <li class="nav-link-li"><a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name; ?></a></li>
                    <li class="nav-link-li"><a class="active" href="<?php echo get_home_url( null, '#contact' ); ?>">联系我们</a></li>
                </ul>
            </div>
        </div>
    </nav>
