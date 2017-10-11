<div class="about-block minister">
    <h1 class="about-title"><span>部门介绍</span></h1>
    <div class="about-minister-body">
        <table class="about-minister-table" cellpadding="0" cellspacing="0">
            <tbody>
                <tr>
					<?php
					$the_query = new WP_Query( [
						'posts_per_page'   => - 1,
						'category_name' => 'minister',
					] );
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>
                        <td>
                            <a href="<?php the_permalink(); ?>" target="_blank">
                                <div class="about-minister-card">
                                    <img class="about-minister-image" src="<?php
                                    if ( has_post_thumbnail() ) {
	                                    the_post_thumbnail_url();
                                    } else {
	                                    echo get_theme_file_uri( 'assets/images/minister/socialvolunteer.png' );
                                    }
                                    ?>" alt="部门图片">
                                    <h1 class="about-minister-name"><?php the_title(); ?></h1>
                                </div>
                            </a>
                        </td>
						<?php
					endwhile;
					wp_reset_postdata();
					?>
                </tr>
            </tbody>
        </table>
        <!-- TODO -->
    </div>
</div>
