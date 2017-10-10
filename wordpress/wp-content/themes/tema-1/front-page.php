<?php get_header(); ?>			
	<!-- Content -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section id="banner">
			<div class="content">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<?php the_content(); ?>
			</div>
			<?php if ( has_post_thumbnail() ) {
				$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
			?>
             <span class="image object">
				<img src="<?php echo $feat_image_url; ?>" />
			</span>
           	<?php } ?>
		</section>
		<?php endwhile; endif; ?>
	</div>
</div>
<?php get_sidebar(); ?>