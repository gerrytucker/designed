<?php get_header(); ?>

		<header class="valign-wrapper">
			<div class="container">
				<div class="row">
					<div class="col s10 offset-s1 center-align">
						<p>Hi there, my name is</p>
						<h1>Mark Walling</h1>
						<p>A Balding Designer</p>
					</div>
				</div>
			</div>
		</header>
		
		<section class="portfolio">

			<div class="container">

			<?php
				$query = new WP_Query('cat_name=portfolio&order=DESC&orderby=date&posts_per_page=6');
				while ($query->have_posts()) : $query->the_post();
			?>

			<?php if ($count == 0) : ?>

				<div class="row">

			<?php endif; // $count == 0 ?>

				<div class="work col s12 m4">
				
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('responsive-img')); ?></a>
					
				</div>
					
			<?php $count++; ?>

			<?php if ($count == 3) : $count = 0; ?>

				</div>

			<?php endif; // $count == 0 ?>

			<?php endwhile; // have_posts ?>

			</div>
			
		</section>

<?php get_footer(); ?>