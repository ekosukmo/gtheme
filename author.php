<?php get_header(); ?>
<<<<<<< HEAD
<div class="page-content">
	<?php if (have_posts()): ?>
	<header class="page-header">
			<h1>
				<?php 
				the_post();// initialize posts
				_e( 'All posts By :','gtheme' ); echo get_the_author(); ?>
			</h1>
	<?php if (get_the_author_meta('description')): ?>
		<div class="author-description">
			<?php the_author_meta('description'); ?>
		</div><!--author-description-->
	<?php endif; ?>
	</header>

	<?php rewind_posts(); // rewind posts ?>

	<?php while (have_posts()) : the_post();
		get_template_part( 'content',get_post_format());
	endwhile;
	get_template_part( 'navigation' );
	else:
	get_template_part( 'content','none' );
	endif; ?>

</div><!--.page-content-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
=======

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
>>>>>>> 3de290d87353f0a9a26b0afac1055e0f2a5107fd
