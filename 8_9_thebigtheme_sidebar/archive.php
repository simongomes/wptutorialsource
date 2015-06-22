<?php
get_header();

if (have_posts()) : ?>
    
        <h2><?php            
            if (is_category()) {
                echo "Category: "; single_cat_title();
            } elseif(is_tag()) {
                echo "Tag: "; single_tag_title();                
            } elseif(is_author()) {
                the_post();
                echo 'Author Archives: ' . get_the_author();                
            } elseif(is_day()) {
                echo "Daily Archives: " . get_the_date();
            } elseif(is_month()) {
                echo "Monthly Archive: " . get_the_date("F Y");
            } elseif(is_year()) {
                echo "Yearly Archive: " . get_the_date("Y");
            } else {
                echo "Archive:";
            }           
        ?></h2>
        <?php while (have_posts()) : the_post(); ?>
	
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="post-info">
                    Posted on <?php the_time("F jS, Y g:i a"); ?> | 
                    By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |
                    Posted in: <?php
                    $categories = get_the_category();
                    $separator = ", ";
                    $output = "";
                     
                    if($categories){
                       foreach ($categories as $cat) {
                           $output .= '<a href="' . get_category_link($cat->term_id) .'">' . $cat->cat_name . '</a>' . $separator; 
                       }                       
                       echo trim($output, $separator);
                    }?>
                    <?php the_tags(" | Tags: ", ", "); ?>
                    
                </p>
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
            echo '<p>No content found</p>';
	
	endif;
	
get_footer();
