<?php get_header(); ?>

<div class="page-content">
	<?php if (have_posts()): ?>
		<header class="page-header">
			<h1><?php _e('Search Result for :','gtheme');  
			echo get_search_query(); ?> </h1>
		</header> <!--page-header-->

	<?php while(have_posts()): the_post(); 
		get_template_part( 'content',get_post_format());
		endwhile;
		get_template_part( 'navigation' );
		else:
		get_template_part( 'content','none' );
		endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>