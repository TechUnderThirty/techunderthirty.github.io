<?php get_header(); ?>
<section class="posts-content">	
	<h2>All Blog Posts <a href="<?php echo get_option('home'); ?>" class="view-more-link">Back to home</a></h2>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

			<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

		</article>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
</section>

<?php get_footer(); ?>
