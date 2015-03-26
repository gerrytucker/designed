<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

		<header class="valign-wrapper">
			<div class="container">
				<div class="row">
					<div class="col s10 offset-s1 center-align">
					</div>
				</div>
			</div>
		</header>
		
		<section class="jobs">

			<div class="container">

			<?php
				$count = 0;
				$query = new WP_Query('post_type=work&order=DESC&orderby=date&posts_per_page=6');
				while ($query->have_posts()) : $query->the_post();
			?>

				<div class="row">

					<div class="job col s12 m4">

						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('responsive-img')); ?></a>

					</div><!-- .job.col -->
					
				</div><!-- .row -->

			<?php endwhile; // have_posts ?>

			</div><!-- .container -->
			
		</section>

<?php get_footer(); ?>