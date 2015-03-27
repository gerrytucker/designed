<?php
/*
Template Name: Work
*/
?>

<?php get_header(); ?>

		<header class="valign-wrapper">
			<div class="container">
				<div class="row">
					<div class="col s12 m10 offset-m1 center-align">
					</div>
				</div>
			</div>
		</header>
		
		<section class="jobs">

			<div class="container">

			<?php
				$count = 0;
				$query = new WP_Query('post_type=portfolio&order=DESC&orderby=date&posts_per_page=-1');
				while ($query->have_posts()) : $query->the_post();
			?>

			<?php if ($count == 0) : ?>

				<div class="row">
					
			<?php endif; // $count == 0 ?>

				<div class="job col s12 m4">
				
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'responsive-img')); ?></a>
					
				</div><!-- .job.col -->
					
			<?php $count++; ?>

			<?php if ($count == 3) : $count = 0; ?>

				</div><!-- .row -->

			<?php endif; // $count == 0 ?>

			<?php endwhile; // have_posts ?>

			<?php if ($count < 3) : $count = 0; ?>

				</div><!-- .row -->

			<?php endif; // $count == 0 ?>

			</div><!-- .container -->
			
		</section>

<?php get_footer(); ?>