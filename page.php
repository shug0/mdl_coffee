<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="mdl-grid">

			<article <?php post_class('mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col') ?> id="post-<?php the_ID(); ?>">

				<?php if (has_post_thumbnail()){
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
					$url = $thumb['0'];	 } 
					else {	$url = ''; }
				?>
				

				<header style="background: url('<?php echo $url ?>') center / cover rgb(63,81,181)">
					<h1 class="entry-title"><?php the_title(); ?></h1>					
				</header>


				<div class="entry-content">
					
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
					
					<?php the_tags( __('Tags: ','html5reset'), ', ', ''); ?>
				
					<?php posted_on(); ?>

				</div>
				
				<?php edit_post_link(__('Edit this entry','html5reset'),'','.'); ?>
				

			<?php // comments_template(); ?>

			</article>

			<?php endwhile; endif; ?>

			<?php post_navigation(); ?>

		</div>

<?php get_footer(); ?>