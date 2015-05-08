<?php
/*
 * Template Name: Layout 1
 */

get_header();
	
    // The Loop
    if( have_posts() ) :
        while( have_posts() ) : the_post(); ?>

        <article class="post page">		
            <h2><?php the_title(); ?></h2>
                
            <!-- info-box -->
            <div class="info-box">
                <h4>Disclaimer Title</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae dolor ac diam sodales aliquet.</p>
            </div>
            <!-- /info-box -->

            <p><?php the_content(); ?></p>
        </article>

    <?php endwhile;
    else :
        echo "No content found"; 

    endif;

get_footer();

