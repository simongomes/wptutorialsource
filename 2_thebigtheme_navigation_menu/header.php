<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php bloginfo('name'); ?></title>
        <!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="all" /> -->

        <?php wp_head(); ?>
    </head>
	
<body <?php body_class(); ?>>
	
    <div class="container">
        <!-- site-header -->
        <header class="site-header">			
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                <h5><?php bloginfo('description') ?></h5>

                <nav class="site-nav main-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </nav>

        </header>
        <!-- /site-header -->