<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>  

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="outer" id="top">
		<?php do_action('cpotheme_before_wrapper'); ?>
		<div class="wrapper">
			<div id="topbar" class="topbar secondary-color-bg dark">
				<div class="container">
					<?php do_action('cpotheme_top'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<header id="header" class="header <?php if(cpotheme_get_option('header_opaque')) echo ' header-opaque'; ?>">
				<div class="header-wrapper">
					<div class="container">
						<?php do_action('cpotheme_header'); ?>
						<div class='clear'></div>
					</div>
				</div>
			</header>
			<?php do_action('cpotheme_before_main'); ?>
			<div class="clear"></div>