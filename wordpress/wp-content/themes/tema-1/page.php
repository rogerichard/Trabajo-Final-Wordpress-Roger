<?php get_header(); ?>			
	<!-- Content -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section>
			<header class="main">
				<h1><?php the_title(); ?></h1>
			</header>
			<?php the_content(); ?>
		</section>
	<?php endwhile; endif; ?>
	</div>
</div>
<?php get_sidebar(); ?>