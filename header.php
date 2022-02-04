<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php if (get_post_meta($post->ID, "title", true) != '') echo get_post_meta($post->ID, "title", true) . ' - ' . get_bloginfo('name');
            else echo get_the_title() . ' - ' . get_bloginfo('title'); ?></title>
    <meta name="description" content="<?php if (get_post_meta($post->ID, "description", true) != '') echo get_post_meta($post->ID, "description", true);
                                        else bloginfo('description'); ?>" />
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x316"
        href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/touch.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="preloadedImages"></div>
    <header class="header">
        <div class="header-fix">

<!-- Start of custom header (Medano Solution) -->
<div class="vc_container balance-header-section">
	<div class="vc_row balance-header-row">
		<div class="vc_col-sm-4">
			<div class="vc_column-inner">
				<div class="wpb_wrapper">
					<div class="balance-header-logo">
						<figure>
							<div class="vc_single_image-wrapper">
								<a href="/">
								<img class="vc_single_image-img " src="<?php echo get_template_directory_uri(); ?>/img/balance/balance-logo-header.png" alt="BALANCE Logo" title="BALANCE Logo">
								</a>
							</div>
						</figure>
					</div>
				</div>
			</div>
		</div>
		<div class="vc_col-sm-8">
			<div class="vc_column-inner">
				<div class="wpb_wrapper">
					<div class="vc_wp_custommenu balance-header-menu">
						<div class="widget widget_nav_menu">
							<div class="menu-main-menu-container">
								<ul id="menu-main-menu" class="menu">
									<li id="menu-item-269" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-269">
										<a href="/produkte/">Produkte</a>
									</li>
									<li id="menu-item-268" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-268">
										<a href="/standorte/">Standorte</a>
									</li>
									<li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-266">
										<a href="/aktuelles/">News</a>
									</li>
									<li id="menu-item-267" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-267">
										<a href="/jobs/">Jobs</a>
									</li>
									<li id="menu-item-270" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-270">
										<a href="#">Über uns</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End of custom header (Medano Solution) -->


        </div>
        <div id="mobile-menu">
            <div class="vc_container">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_row-fluid">

                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <?php if (is_active_sidebar('nav-language-switcher')) : ?>
                            <?php dynamic_sidebar('nav-language-switcher'); ?>
                            <?php endif; ?>
                            <?php wp_nav_menu(array('theme_location' => 'main', 'depth' => 1)); ?>
                            <?php wp_nav_menu(array('theme_location' => 'footer')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <a href="/kontakt" id="kontakt">Kontakt</a>
	<a href="/kontakt" id="kontakt-mobile">
		<img src="<?php echo get_template_directory_uri(); ?>/img/balance/kontakt-mobile.png" alt="BALANCE kontakt" title="BALANCE kontakt">
	</a>