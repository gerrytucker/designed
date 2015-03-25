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
					<div class="col s10 offset-s1 center-align">
					</div>
				</div>
			</div>
		</header>

		<section class="desc">

			<div class="container">

				<div class="row">
					
					<div class="col s10 offset-s1 flow-text center-align">
						<?php the_content(); ?>
					</div>
				
				</div>
				
			</div>

<?php get_footer(); ?>