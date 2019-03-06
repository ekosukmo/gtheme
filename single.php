<?php get_header(); ?>

<div class="page-content">
	<?php 
	if(have_posts()): while(have_posts()):the_post();
		get_template_part( 'content', get_post_format());
	endwhile;

		get_template_part( 'navigation' );
		comments_template();

	else:

		get_template_part( 'content','none' );

	endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>


<div class="page-content">
	
	<?php if (have_posts()):
		while (have_posts()): the_post();
		get_template_part('content',get_post_format());
		endwhile;
		get_template_part('navigation');
	else:
		get_template_part('content', 'none');
	endif ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header() ?> 
