<?php get_header(); ?>
<section class="posts-content">	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h3 class="entry-title"><?php the_title(); ?></h3><?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?> <a href="http://techunderthirty.com/blog-posts/" class="view-more-link">Back to all Blog Posts</a>

			<div class="entry-content">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>
			

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</article>

	<?php endwhile; endif; ?>
	
</section>

<?php get_footer(); ?>