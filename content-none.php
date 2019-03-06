<article class="post-not-found">
	<header class="entry-header">
		<h1 class="entry-title"> <?php _e( 'Not Found','gtheme' ); ?> </h1>
	</header>

	<div class="entry-content">
		<?php if(is_search()): ?>
			<p><?php _e( 'Sorry, but nothing matched your search term. Please try again using different keywords','gtheme' ); ?></p>
		<?php else: ?>
			<p><?php _e( 'Sorry, the requested resources was not found on this server','gtheme' ); ?></p>
		<?php endif; ?>
	</div><!--entry-content-->

	<footer class="entry-footer">
		<?php get_search_form(); ?>
	</footer>
</article>