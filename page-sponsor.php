<?php
/*
Template Name: Sponsor Page
*/
?>
<?php get_header(); ?>
<section class="sponsor-container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<section class="sponsor-container-full">
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</article>
			</section>
		
			<section class="sponsor-reasons">
				<article>
					<h3><?php the_field('reasons_to_support_tech_under_thirty_title'); ?></h3>
					<?php the_field('reasons_to_support_tech_under_thirty'); ?>
				</article>
			</section>
			
			<section class="sponsorship-levels">
				<article>
					<h3><?php the_field('sponsorship_levels_title'); ?></h3>
					<?php the_field('sponsorship_levels_list'); ?>
				</article>
			</section>
		<?php endwhile; endif; ?>
		<div class="clearfix"></div>
</section>

<?php get_footer(); ?>
