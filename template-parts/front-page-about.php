<section class="main-section about" id="about">
    <div class="main-section-title-container left">
        <div class="main-section-title">
            <div class="main-section-title-number">NO.3</div>
            <h1 class="main-section-title-text">组织介绍</h1>
        </div>
        <div class="about-member-count">
            <div class="about-member-count-rect"></div>
            <div class="about-member-count-content">
                从1919年到2017年总计<span class="about-member-count-number">191954</span>成员
            </div>
        </div>
    </div>
    <div class="about-block xjsu-introduce">
		<?php
		$the_query = new WP_Query( [
			'numberposts' => 1,
			'post_type'   => 'page',
			'pagename'    => 'about',
		] );
		if ( $the_query->have_posts() ) :
			$the_query->the_post();
			?>
            <h1 class="about-title"><span>学生会简介</span></h1>
            <div class="about-xjsu-introduce-body">
                <p class="about-xjsu-introduce-text"><?php echo get_the_excerpt(); ?></p>
                <div class="about-xjsu-introduce-more"><a href="<?php the_permalink(); ?>">MORE&gt;&gt;</a></div>
            </div>
			<?php
		endif;
		wp_reset_postdata();
		?>
    </div>
	<?php get_template_part( 'template-parts/front-page-about', 'presidium' ); ?>
	<?php get_template_part( 'template-parts/front-page-about', 'minister' ); ?>
</section>
