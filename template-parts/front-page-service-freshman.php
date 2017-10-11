<div class="service-tab freshman" id="freshman">
    <div class="main-section-list">
		<?php
		$the_query = new WP_Query( [
			'posts_per_page' => 6,
			'category_name'  => 'freshman',
		] );
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			?>
            <div class="main-section-list-block">
                <a href="<?php the_permalink(); ?>" target="_blank">
                    <div class="main-section-list-content">
                        <h1 class="service-tab-freshman-list-title"><span><?php the_title(); ?></span></h1>
                        <div class="service-tab-freshman-list-info"><?php echo mb_substr( get_the_excerpt(), 0, 25 ); ?></div>
                    </div>
                </a>
            </div>
			<?php
		endwhile;
		wp_reset_postdata();
		?>
    </div>
    <div class="service-tab-more">
        <a class="service-tab-more-button" href="<?php echo get_category_link( get_category_by_slug( 'freshman' ) ); ?>">
            <div class="service-tab-more-text">MORE</div>
        </a>
    </div>
</div>
