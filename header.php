<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
		<div class="wrap">
			<?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
			<<?php echo $html_tag; ?> class="header__logo">
				<a href="<?php echo esc_url(home_url()); ?>">
					<img src="<?php echo esc_url(get_theme_file_uri('img/logo.svg')); ?>" alt="My Work">
				</a>
			</<?php echo $html_tag; ?>>
			<nav>
				<ul class="header__items">
					<li class="header__item"><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
					<li class="header__item"><a href="<?php echo esc_url(home_url('/category/works/')); ?>">Works</a></li>
					<li class="header__item"><a href="<?php echo esc_url(home_url('/category/news')); ?>">News</a></li>
					<li class="header__item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
					<li class="header__item insta"><a href=""><img src="img/icon-instagram.png" alt=""></a></li>
				</ul>
			</nav>
		</div>
	</header>