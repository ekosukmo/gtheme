<?php if (post_password_required()) return; ?>
<div class="comments" id="comments-area">
	<?php if(have_comments()): ?>
		<h2 class="comments-title">
			<?php comments_number(); ?>
		</h2>

		<ol class="comments-list">
			<?php wp_list_comments(); ?>
		</ol>
		<nav class="nav nav-comments">
			<?php previous_comments_link(); ?>
			<?php next_comments_link(); ?>
		</nav>

		<?php if (!comments_open()) : ?>
			<p class="comments-none">
				<?php _e('Comments are Closed'); ?>
			</p>
		<?php endif; ?>
	<?php endif; ?>

	<?php comment_form(); ?>
</div><!--.comments #comments-area-->