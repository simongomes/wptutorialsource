	<!-- site-footer -->
	<footer class="site-footer">
            <nav class="site-nav">
                <ul>
                    <?php wp_nav_menu( array( 'theme_location'  =>  'footer' ) ); ?>
                </ul>                                   
            </nav>
		
		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> </p>
		
	</footer>
	<!-- /site-footer -->
</div>
<?php wp_footer(); ?>
</body>
</html>