<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>


	<div class="mdl-grid">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php  
		if (has_post_thumbnail()){
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
			$url = $thumb['0'];
		 }
		 else {	$url = ''; }
	?>

			<!-- Square card -->
			<style>
			  #post-<?php the_ID(); ?> > .mdl-card__title {
			    color: #fff;
			    color: #fff;
    			height: 176px;	
			    background: url('<?php echo $url ?>') center / cover #46B6AC;
			  }
			</style>

			<article <?php post_class('mdl-card mdl-shadow--2dp  mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--12-col-phone') ?> id="post-<?php the_ID(); ?>" >
			  <div class="mdl-card__title mdl-card--expand">
			    <h2 class="mdl-card__title-text"><?php the_title(); ?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
			  	<?php posted_on(); ?>
			    <?php the_excerpt(); ?> 
			    <footer class="postmetadata">
					<?php the_tags(__('Tags: ','html5reset'), ', ', '<br />'); ?>
					<?php _e('Posted in','html5reset'); ?> <?php the_category(', ') ?> | 
					<?php comments_popup_link(__('No Comments &#187;','html5reset'), __('1 Comment &#187;','html5reset'), __('% Comments &#187;','html5reset')); ?>
				</footer>
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
			    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php the_permalink() ?>">
			      View Updates
			    </a>
			  </div>
			</article>


	<?php endwhile; ?>
	
	</div>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_footer(); ?>
