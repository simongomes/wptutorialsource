<?php	
get_header();
	
    // The Loop
    if( have_posts() ) :
        while( have_posts() ) : the_post(); ?>

        <article class="post">		
                <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_content(); ?></p>
        </article>

    <?php endwhile;
    else :
        echo "No content found"; 

    endif;

get_footer();
?>