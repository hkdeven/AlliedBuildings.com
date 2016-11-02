<?php
/*
Template Name: Page without Side Bar
*/
?>
<?php get_header(); ?>

<?php the_post(); ?>
		<!-- CONTENT -->
		<div id="grve-content" class="clearfix">
			<div class="grve-content-wrapper">
				<!-- MAIN CONTENT -->
				<div id="grve-main-content">
					<div class="grve-main-content-wrapper clearfix">

						<!-- PAGE CONTENT -->
						<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php get_footer();

//Omit closing PHP tag to avoid accidental whitespace output errors.
