<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Minimalist_blog_template
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="wrapper">
		<aside class="header-toggle unprintable" id="header-toggle" title="Show the menu" onclick="$('#header').show();$('#header-toggle').hide();">&#9776;</aside>
		<header class="header" id="header">
				<div class="face">
						<a href="/about-me.html" style="position:relative;">
								<img src="<?= get_template_directory_uri() . '/assets/images/profile.png'?>" class="photo" alt="Kirill Yurgulskiy"/>
						</a>
				</div>
				<h4 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</h4>
				<nav>
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-socials',
									'menu_id'        => 'socials-menu',
									'menu_class'		 => 'menu social notranslate'
								)
							);	

							wp_nav_menu(
								array(
									'theme_location' => 'menu-header',
									'menu_id'        => 'primary-menu',
									'menu_class'		 => 'menu'
								)
							);						
						?>
				</nav>
				<div class="search">
						<form method="get" action="https://www.google.com/search"
							itemprop="potentialAction"
							itemscope=""
							itemtype="http://schema.org/SearchAction">
							<!--
							<meta itemprop="target" content="https://www.google.com/search?q={q}"/>
							<input name="sitesearch" value="ykv1024.com" type="hidden"/>
							<input itemprop="query-input" type="text" id="search-query" class="field field-text" required="required" onfocus="$('.google').css('visibility', 'visible');" name="q" placeholder="Search..." autocomplete="off"/>
							-->
						</form>

						<form id="search-field"
							method="get"
							action="https://www.google.com/search"
							itemprop="potentialAction"
							itemscope=""
							itemtype="http://schema.org/SearchAction">
							<meta itemprop="target" content="https://www.google.com/search?q={q}"/>
							<input name="sitesearch" value="ykv1024.com" type="hidden"/>
  						<input type="checkbox" id="show-search-field" />
  						<label for="show-search-field"><span>Search...</span></label>
							<span>
								<input itemprop="query-input" type="text" id="search-query" placeholder="Search.." required="required" autocomplete="off"/>
								<button type="submit" form="search-field" title="Submit">&nbsp;</button>
							</span>
						</form>						
				</div>
				<div class="hot">
						<ul></ul>
				</div>
		</header>
	</div>