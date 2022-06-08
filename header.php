<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#1D1E22" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="stylesheet" data-href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&amp;display=swap" data-optimized-fonts="true"/>
  <style data-href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap">
    @font-face{font-family:icomoon;src:url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/icomoon/icomoon.ttf?gzvdal') format("truetype"),url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/icomoon/icomoon.woff?gzvdal') format("woff"),url('<?php echo get_stylesheet_directory_uri(); ?>/fonts/icomoon/icomoon.svg?gzvdal#icomoon') format("svg");font-weight:400;font-style:normal;font-display:block}[class*=" icon-"],[class^=icon-]{font-family:icomoon!important;speak:never;font-style:normal;font-weight:400;-webkit-font-feature-settings:normal;-moz-font-feature-settings:normal;font-feature-settings:normal;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.icon-earth:before{content:""}.icon-plus:before{content:""}.icon-telegram:before{content:""}.icon-twitter:before{content:""}.icon-youtube:before{content:""}.icon-cross:before{content:""}.icon-instagram:before{content:""}.icon-linkedin:before{content:""}.icon-facebook:before{content:""}.icon-burger:before{content:""}.icon-arrow-down:before{content:""}.icon-medium:before{content:""}
  @font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-WYi1Uw.woff) format('woff')}@font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-B4i1Uw.woff) format('woff')}@font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYi1Uw.woff) format('woff')}@font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-4I-1Uw.woff) format('woff')}@font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nMrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nFrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nDrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0590-05FF,U+200C-2010,U+20AA,U+25CC,U+FB1D-FB4F}@font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nPrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Rubik';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nBrXyw023e.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nMrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nFrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nDrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0590-05FF,U+200C-2010,U+20AA,U+25CC,U+FB1D-FB4F}@font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nPrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Rubik';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nBrXyw023e.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nMrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nFrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nDrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0590-05FF,U+200C-2010,U+20AA,U+25CC,U+FB1D-FB4F}@font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nPrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Rubik';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nBrXyw023e.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nMrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nFrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nDrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0590-05FF,U+200C-2010,U+20AA,U+25CC,U+FB1D-FB4F}@font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nPrXyw023e1Ik.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Rubik';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/rubik/v20/iJWKBXyIfDnIV7nBrXyw023e.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}</style>

	<?php wp_head(); ?>
	<?php echo carbon_get_theme_option('crb_google_analytics'); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header class="header w-full z-10">
		<div class="container">
      <div class="flex justify-between items-center">
        <div class="header-section flex items-center">
          <div class="menu-trigger inline-flex lg:hidden modal-js" data-modal-click="menu">
            <span class="icon-burger"></span>
            <span class="hidden">Menu</span>
          </div>
          <div class="header-logo relative">
            <a href="<?php echo get_home_url(); ?>" class="absolute-link"></a>
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_full_110_40.svg">
              <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_circle_40_40.svg">
              <img class="header-logo-img" alt="Weld" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_circle_40_40.svg">
            </picture>
          </div>
          <div class="header-menu header-menu__primary hidden xl:flex">
            <?php wp_nav_menu([
              'theme_location' => 'header',
              'container' => 'div',
            ]); ?> 
          </div>
        </div>
        <div class="header-section flex items-center">
          <a href="https://weld.money/sign-in"><?php _e('Sign in', 'treba-wp'); ?></a>
          <a href="https://weld.money/getcard/" target="_blank" class="cardBtn hidden xl:inline-block"><span><?php _e('Get Card', 'treba-wp'); ?></span></a>
          <div class="hidden xl:block ml-8">
            <?php get_template_part('template-parts/components/lang'); ?>
          </div>
        </div>
      </div>
    </div>
	</header>