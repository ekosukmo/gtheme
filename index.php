<?php get_header(); ?>
<<<<<<< HEAD
<div class="page-content">

<?php 
	if(have_posts()) : while(have_posts()) : the_post(); 
		get_template_part( 'content',get_post_format());
	endwhile;
		get_template_part( 'navigation' );
	else:
		get_template_part( 'content','none' );
	endif; ?>

</div> <!--page-content-->

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
>>>>>>> 3de290d87353f0a9a26b0afac1055e0f2a5107fd
<?php get_sidebar(); ?>
<?php get_footer(); ?>
