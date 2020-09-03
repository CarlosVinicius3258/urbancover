<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Urban by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head();?>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php">Urban <span>by TEMPLATED</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="generic.php">Generic</a></li>
					<li><a href="elements.php">Elements</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<?php $banner = get_field('banner');?>
		
			<section id="banner">
				<div class="inner">
					<header>
						<h1><?php echo $banner['title'];?></h1>
						<p><?php echo $banner['subtitle'];?></p>
					</header>
					<a href="<?php echo $banner['button_link'];?>" class="button big scrolly"><?php echo $banner['button_text'];?></a>
				</div>
			</section>
