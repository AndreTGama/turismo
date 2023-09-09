<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Encontre as melhores casas para alugar e passeios de escuna em Paraty. Explore as belezas naturais desta cidade histórica no litoral do Rio de Janeiro.">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/index.css" />
</head>

<body>
	<nav>
		<div id="navbar">
			<?php
			wp_nav_menu(
				array(
					'menu' => 'menu-navbar-left',
					'menu_class' => 'menu'
				)
			);
			?>
			<a href="#home">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo da empres" />
			</a>
			<?php
			wp_nav_menu(
				array(
					'menu' => 'menu-navbar-right',
					'menu_class' => 'menu'
				)
			);
			?>
		</div>
		<div id="navbar-responsive" class="navbar">
			<div class="nav-container">
				<input class="checkbox" type="checkbox" name="" id="" />
				<div class="hamburger-lines">
					<span class="line line1"></span>
					<span class="line line2"></span>
					<span class="line line3"></span>
				</div>
				<div class="logo">
					<a class="img-log" href="#home">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo da empres" />
					</a>
				</div>
				<div class="menu-items">
					<li><a href="#">Home</a></li>
					<li><a href="#">about</a></li>
					<li><a href="#">blogs</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">contact</a></li>
				</div>
			</div>
		</div>
	</nav>
	</nav>