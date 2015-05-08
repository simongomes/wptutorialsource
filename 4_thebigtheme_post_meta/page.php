<?php	
get_header();
	
	// The Loop
	if( have_posts() ) :
		while( have_posts() ) : the_post(); ?>
		
		<article class="post page">		
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
		</article>
					
	<?php endwhile;
	else :
		echo "No content found"; 
		
	endif;

get_footer();
