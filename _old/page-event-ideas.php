<?php
/*
Template Name: Event Ideas Page
*/
?>
	
<?php get_header(); ?>
<section class="posts-content">	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><?php the_title(); ?> <a href="<?php echo get_option('home'); ?>" class="view-more-link">Back to home</a></h2>
			
		<article class="post" id="post-<?php the_ID(); ?>">


			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</article>
		

		<?php endwhile; endif; ?>

</section>
<?php get_footer(); ?>
