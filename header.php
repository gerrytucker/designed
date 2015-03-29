<!DOCTYPE html>
<html lang="<?php bloginfo('lang'); ?>">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<section class="navbar">
			<div class="container">
				<div class="row">
					<div class="col m4">
						<a class="brand" href="<?php echo get_bloginfo('url'); ?>" title="Mark Walling" rel="homepage">Mark Walling</a>
					</div>
					<div class="col m8">
						<ul class="inline-list right">
							<?php wp_list_pages('sort_column=ID&title_li='); ?>
							<?php wp_list_categories('hide_empty=0&depth=1&hierarchical=0&title_li='); ?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
