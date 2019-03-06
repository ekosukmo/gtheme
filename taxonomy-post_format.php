<?php get_header(); ?>
<div class="page-content">
	<?php if(have_posts()): ?>
	<header class="page-header">
	<h1>
		<?php 
		if (is_tax('post_format','post-format-aside')):
			_e('Asides','gtheme');
		elseif (is_tax('post_format','post-format-image')):
			_e('Images','gtheme');
		elseif (is_tax('post_format','post-format-video')):
			_e('Videos','gtheme');
		elseif (is_tax('post_format','post-format-quote')):
			_e('Quotes','gtheme');
		elseif (is_tax('post_format','post-format-link')):
			_e('Links','gtheme');
		elseif (is_tax('post_format','post-format-gallery')):
			_e('Galleries','gtheme');

		else:
			_e('Archives','gtheme');
		endif; ?>
	</h1>

	<?php $term_description=term_description(); 
	if (!empty($term_description)) {
		echo '<div class="tax-description">';
		echo $term_description;
		echo '</div>'; } ?>
	</header><!--page-header-->

<?php while(have_posts()):the_post(); 
	get_template_part( 'content',get_post_format()); 
	endwhile;
	get_template_part( 'navigation' );
	else:
	get_template_part( 'content','none' );
	endif; ?>
</div><!--page-content-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>