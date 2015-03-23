				
<?php
$query = new WP_Query('cat_name=portfolio&order=DESC&orderby=date&posts_per_page=6');
$count = 0;
while ($query->have_posts()) : $query->the_post();

<?php if ($count == 0) : ?>

	<div class="row">
		
<?php endif; // $count == 0 ?>


<?php $count++; ?>

<?php if ($count == 3) : $count = 0; ?>

	</div>
		
<?php endif; // $count == 0 ?>

<?php endwhile; // have_posts ?>

