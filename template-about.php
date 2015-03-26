<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<?php the_post(); ?>

		<header class="valign-wrapper">
			<div class="container">
				<div class="row">
					<div class="col s12 m10 offset-m1 center-align">
					</div>
				</div>
			</div>
		</header>

		<section class="desc">

			<div class="container">

				<div class="row">
					
					<div class="col s12 m10 offset-m1 flow-text center-align">
						<?php the_content(); ?>
					</div>
				
				</div>
				
			</div>
			
		</section>

<?php get_footer(); ?>