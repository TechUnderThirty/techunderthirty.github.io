<?php
/*
Template Name: About Page
*/
?>
<?php get_header(); ?>
<section class="about-container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</article>
		
			<section class="authorboxes">
				<h3><?php the_field('organizers_list_title'); ?></h3>
				<?php

				// Get the authors from the database ordered by user nicename
					global $wpdb;
					$query = "SELECT ID, user_nicename from $wpdb->users ORDER BY user_nicename";
					$author_ids = $wpdb->get_results($query);

				// Loop through each author
					foreach($author_ids as $author) :

					// Get user data
						$user = get_userdata($author->ID);

					// If user level is above 0 or login name is "admin", display profile
						if($user->user_level > 0 || $user->user_login == 'admin') :

						// Get link to author page
							$user_link = get_author_posts_url($user->ID);

						// Set default avatar (values = default, wavatar, identicon, monsterid)
							$avatar = 'identicon';
				?>

				<article class="author-info">
						<a href="<?php echo $user->user_url; ?>" title="Visit <?php echo $user->display_name; ?>'s website" class="avatar">
							<?php echo get_avatar($user->user_email, '256', $avatar); ?>
						</a>
						<h4>
							<?php if($user->user_url) : ?>
								<a href="<?php echo $user->user_url; ?>" title="Visit <?php echo $user->display_name; ?>'s website">
							<?php endif; ?>
								<?php echo $user->display_name; ?>
							<?php if($user->user_url) : ?>
								</a>
							<?php endif; ?>
						</h4>
						<?php if($user->twitter) : ?>
							<a href="http://twitter.com/<?php echo $user->twitter; ?>" title="Visit <?php echo $user->display_name; ?>'s Twitter account" class="twitter">
							    @<?php echo $user->twitter; ?>
							</a>
						<?php endif; ?>
						<p class="author-description"><?php echo $user->description; ?></p>
				</article> <!-- end post -->
				<?php endif; ?>
			<?php endforeach; ?>
			</section>
			
			<section class="volunteers">
				<article>
					<h3><?php the_field('additional_information_title'); ?></h3>
					<?php the_field('additional_information'); ?>
				</article>
			</section>
		<?php endwhile; endif; ?>
		<div class="clearfix"></div>
</section>

<?php get_footer(); ?>
