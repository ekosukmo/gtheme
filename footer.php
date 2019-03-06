		
	</div><!--#main .site-main-->
<footer class="site-footer">
	<?php wp_nav_menu( array( 
		'theme_location' =>'footer',
		'menu_class'=>'nav-footer',
		'fallback_cb'=>false,
	) ); ?>

	<div class="site-info">
		<a href="https://wordpress.org"><?php _e( 'Powered by WordPress', 'gthemes'); ?></a>
	</div> <!--.site-info-->
</footer>
	</div> <!--#page .site-title-->
	
	<?php wp_footer(); ?>
</body>
</html>