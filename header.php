<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#1D1E22" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
	<?php echo carbon_get_theme_option('crb_google_analytics'); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header class="header w-full z-10">
		<div class="container">
      <div class="flex justify-between items-center">
        <div class="header-section">
          <div class="header-logo relative">
            <a href="<?php echo get_home_url(); ?>" class="absolute-link"></a>
            <picture><source media="(min-width: 768px)" srcset="images/logo_full_110_40.svg"><source media="(max-width: 767px)" srcset="images/logo_circle_40_40.svg"><img class="Header_headerLogoImage__kLdvl" alt="Weld" src="images/logo_circle_40_40.svg"></picture>
          </div>
          <div>
            Menu
          </div>
        </div>
      </div>
    </div>
	</header>