<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title><?php the_title();?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head();?>
	</head>
	<body>

		<!-- Header -->
			<?php 
				$args = array(
					'theme_location' => 'primary',
					'menu_class' => 'menu',
					'container_class' => '',
					'menu' => '',
					'container' => 'menu',
					'container_class' => '',
					'container_id' => 'menu',
					'menu_class' => '',
					'menu_id' => 'menu'
				);?>
				<?php wp_nav_menu($args); ?>


		
