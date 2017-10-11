<section class="main-section news" id="news">
    <div class="main-section-title-container left">
        <div class="main-section-title">
            <div class="main-section-title-number">NO.1</div>
            <h1 class="main-section-title-text">新闻公告</h1>
        </div>
    </div>
    <div class="news-section-body">
        <div class="news-container main-section-list">
			<?php
			$the_query = new WP_Query( [
				'posts_per_page' => 6,
				'category_name'  => 'news',
			] );
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>
                <div class="main-section-list-block">
                    <a href="<?php the_permalink(); ?>" target="_blank">
                        <div class="main-section-list-content">
                            <h1 class="main-section-list-title"><?php the_title(); ?></h1>
                            <div class="main-section-list-info"><?php the_date(); ?></div>
                        </div>
                    </a>
                </div>
				<?php
			endwhile;
			wp_reset_postdata();
			?>
        </div>
    </div>
    <div class="main-section-button-group">
        <div class="main-section-shift-button-container">
            <button class="main-section-shift-button pre"><img class="main-section-shift-button-image" src="<?php echo get_theme_file_uri( 'assets/images/list-page-pre.png' ); ?>" alt="上一页"></button>
        </div>
        <div class="main-section-ordered-button-container">
            <ol class="main-section-ordered-button-ol">
                <li class="main-section-ordered-button-li">
                    <button class="main-section-ordered-button">1</button>
                </li>
                <li class="main-section-ordered-button-li">
                    <button class="main-section-ordered-button active">2</button>
                </li>
                <li class="main-section-ordered-button-li">
                    <button class="main-section-ordered-button">3</button>
                </li>
            </ol>
        </div>
        <div class="main-section-shift-button-container">
            <button class="main-section-shift-button next"><img class="main-section-shift-button-image" src="<?php echo get_theme_file_uri( 'assets/images/list-page-next.png' ); ?>" alt="下一页"></button>
        </div>
    </div>
</section>
