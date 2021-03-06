<?php get_header(); ?>
<div class="page-content">
	<?php if (have_posts()): ?>
		<header class="page-header">
			<h1>
				<?php 
				_e( 'Category Archives :','gtheme' ); 
				single_cat_title(); 
				?>
			</h1>

			<?php 
			$term_description = term_description();
			if (!empty($term_description)) {
				echo '<div class="tax-description">';
				echo "$term_description";
				echo "</div>";
			} ?>
		</header>

		<?php while(have_posts()): the_post(); 
			get_template_part('content',get_post_format());
		endwhile;
		get_template_part( 'navigation' );
	else :
		get_template_part( 'content','none' );
	endif; ?>
</div> <!--page-content-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>