<?php if (is_active_sidebar('sidebar')): ?>
	<div id="sidebar" class="widget-area">
		<?php dynamic_sidebar('sidebar'); ?>
	</div>

<?php else: ?>

	<div id="sidebar" class="widget-area">
	<?php if (has_nav_menu('sidebar')): ?>
		<div class="widget nav-sidebar">
					<h2>Sidebar Menu</h2>
					<?php wp_nav_menu( array(
						'theme_location'=>'secondary',
						'container'=> false
					) ); ?>
		</div><!--nav-sidebar-->
	<?php endif; ?>

<div class="widget widget_search">
	<h2>Search</h2>
	<?php get_search_form(); ?>
</div><!--widget_search-->

<div class="widget widget_pages">
	<h2>Pages</h2>
	<ul>
		<?php wp_list_pages(array(
			'title_li'=>'',
		    'depth'=>1
		)); ?>
	</ul>
</div> <!--.widget_pages-->

</div><!--#sidebar.sidebar-->

<?php endif; ?>
