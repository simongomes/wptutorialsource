<?php	
get_header();
	
    // The Loop
    if( have_posts() ) :
	while( have_posts() ) : the_post(); ?>
		
            <article class="post">		
		<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-info">
                    <?php the_time("F jS, Y g:i a"); ?> | 
                    by <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
                    <?php the_author(); ?></a> | Posted in 
                    <?php 
                        $categories =  get_the_category(); 
                        $seperator = ", ";
                        $output = "";
					
                        foreach ( $categories as $category ) {
                            $output .= '<a href="'. get_category_link($category->cat_ID) .'">' . $category->cat_name .'</a>' . $seperator;
                        }
                        echo trim($output, $seperator);                                        
                    ?>
		</p>

		<p><?php the_content(); ?></p>
		</article>
					
    <?php endwhile;
    else :
        echo "No content found"; 

    endif;

get_footer();
?>