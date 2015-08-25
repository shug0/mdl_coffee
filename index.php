<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<div class="mdl-grid">

	<?php query_posts( 'posts_per_page=9' ); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php if (has_post_thumbnail()){
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
			$url = $thumb['0'];
		 }
		 else {	$url = ''; } ?>

			<style>  
				#post-<?php the_ID(); ?> > .mdl-card__title {  background: url('<?php echo $url ?>') center / cover rgb(63,81,181); }
			</style>

			<div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
				<article <?php post_class('mdl-card mdl-shadow--2dp') ?> id="post-<?php the_ID(); ?>" >
				  <header class="mdl-card__title mdl-card--expand">
  				  	<div><?php the_time('j/m') ?></div>
				    <h2 class="mdl-card__title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				  </header>
				  <div class="mdl-card__supporting-text">
				    <?php the_excerpt(); ?> 
				  </div>
				  <footer class="mdl-card__actions mdl-card--border">
				    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="<?php the_permalink() ?>">
				      Voir plus
				    </a>
				  </footer>
				</article>
			</div>

		<?php endwhile; ?>
		
		<button id="posts_nav_link" class="mdl-button">
			<?php posts_nav_link(' | '); ?>
		</button>
	
	</div>




	<?php else : ?>
		<h2><?php _e('Nothing Found','html5reset'); ?></h2>
	<?php endif; ?>

<?php get_footer(); ?>
