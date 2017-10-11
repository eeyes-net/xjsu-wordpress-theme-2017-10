<div class="service-tab perspective" id="perspective">
    <div class="main-section-list">
		<?php
		$the_query = new WP_Query( [
			'posts_per_page' => 6,
			'category_name'  => 'perspective',
		] );
		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			?>
            <div class="main-section-list-block">
                <a href="<?php the_permalink(); ?>" target="_blank">
                    <div class="main-section-list-content">
                        <h1 class="main-section-list-title"><?php the_title(); ?></h1>
                        <div class="main-section-list-info"><?php echo get_the_date(); ?></div>
                    </div>
                </a>
            </div>
			<?php
		endwhile;
		wp_reset_postdata();
		?>
    </div>
    <div class="service-tab-more">
        <a class="service-tab-more-button" href="<?php echo get_category_link( get_category_by_slug( 'perspective' ) ); ?>">
            <div class="service-tab-more-text">MORE</div>
        </a>
    </div>
</div>
