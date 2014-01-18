<?php
/*
Template Name: Index Page
*/
?>
<?php get_header('home'); ?>
<section class="hero-home">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article id="post-<?php the_ID(); ?>">
			<header id="header">
				<h1><?php bloginfo('name'); ?></h1>
				<h2 class="description"><?php bloginfo('description'); ?></h2>
			</header>
			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

		</article>

		<?php endwhile; endif; ?>
		<?php get_sidebar(); ?>
		<div class="clearfix"></div>
</section>

<section class="posts-content">		
	<h2>Blog Posts <a href="blog" class="view-more-link">View all</a></h2>
		<?php query_posts('posts_per_page=3'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

				<?php include (TEMPLATEPATH . '/_/inc/meta-home.php' ); ?>

				<div class="entry">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<h2><a href="blog" class="view-more-link">But wait! There's more! View all posts</a></h2>

		<?php else : ?>

			<h2>No posts.</h2>

		<?php endif; ?>
</section>

<?php get_footer(); ?>
