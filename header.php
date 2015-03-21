<!DOCTYPE html>
<html lang="<?php bloginfo('lang'); ?>">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
		<title><?php wp_title('|'); ?></title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<section class="navbar">
			<div class="container">
				<div class="row">
					<div class="col m4"><a class="brand" href="<?php echo get_bloginfo('home_url'); ?>" title="Mark Walling" rel="homepage">Mark Walling</a></div>
					<div class="col m8"></div>
				</div>
			</div>
		</section>
		
		<header>
		</header>
		