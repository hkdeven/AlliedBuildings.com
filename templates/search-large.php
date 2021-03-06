<?php
/*
*	Template Search Masonry Large
*
* 	@version	1.0
* 	@author		Deven Blackburn
* 	@URI		https://github.com/hkdeven
*/
?>

<article id="grve-search-<?php the_ID(); ?><?php echo uniqid('-'); ?>" <?php post_class( 'grve-search-item grve-border' ); ?>>
	<div class="grve-post-content">
		<a href="<?php echo esc_url( get_permalink() ); ?>"><h4 class="grve-post-title"><?php the_title(); ?></h4></a>
		<div class="clear"></div>
		<?php echo blade_grve_excerpt( '60', 1 ); ?>
	</div>
</article>
