<section class="main-section push" id="push">
    <div class="main-section-title-container right">
        <div class="main-section-title">
            <div class="main-section-title-number">NO.2</div>
            <h1 class="main-section-title-text">精品推送</h1>
        </div>
    </div>
    <div class="main-section-body-photo-card">
        <div class="main-section-photo-card-container">
			<?php
			$the_query = new WP_Query( [
				'posts_per_page' => 3,
				'category_name'  => 'push',
			] );
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				?>
                <div class="main-section-photo-card-block">
                    <a href="<?php the_permalink(); ?>" target="_blank">
                        <div class="main-section-photo-card-image-container">
                            <img class="main-section-photo-card-image" src="<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail_url();
							} else {
								echo get_theme_file_uri( 'assets/images/push/1.png' );
							}
							?>" alt="精品推送标题图">
                        </div>
                        <div class="main-section-photo-card-detail">
                            <h1 class="main-section-photo-card-title"><?php the_title(); ?></h1>
                            <div class="main-section-photo-card-info-container">
                                <div class="main-section-photo-card-info time"><span class="main-section-photo-card-info-text"><?php echo get_the_date(); ?></span></div>
                                <div class="main-section-photo-card-info visit-count"><span class="main-section-photo-card-info-text"><?php the_views(); ?></span></div>
                            </div>
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
