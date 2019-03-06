<<<<<<< HEAD
<?php
/*Displaying archives pages*/
  ?>
<?php get_header(); ?>
	<div class="page-content">
		<?php if (have_posts()) : ?>
		<header class="page-header">
			<h1><?php 
				if (is_day()) :
					_e('Daily Archives: ', 'gthemes');
					the_time('l, F j, Y');		
				elseif (is_month()) :
					_e('Monthly Archives: ', 'gthemes');
					the_time('F Y');		
				elseif (is_year()) :
					_e('Yearly Archives: ', 'gthemes');
					the_time('Y');		
				else :
					_e('Archives', 'gthemes');				
				endif; 
				?>
			</h1>
		</header>

		<?php while (have_posts()) : the_post(); 
			get_template_part('content', get_post_format());
			endwhile;	
			get_template_part('navigation');
		else :
			get_template_part('content', 'none');	
		endif; ?>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
=======
<?php get_header(); ?>

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
