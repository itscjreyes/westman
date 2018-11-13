<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>

<?php if( get_field('body_class') ): ?> 
<body class="<?php the_field('body_class'); ?>">
<?php endif; ?>

<header>
	<div class="topBar">
		<div class="container">
			<div class="row-fluid">
				<div class="span4 socialLinks">
					<a href="https://www.facebook.com/Westman-Editorial-195926647158139"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/WestmanEdit"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/company/westman-editorial"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="span8">
					<a href="tel:6479668463" class="contactPhone"><i class="fa fa-phone"></i>647.966.8463</a>
				</div>
			</div> <!-- .row-fluid -->
		</div> <!-- .container -->
	</div> <!-- .topBar -->

	<div class="mainNav">
		<div class="container">
			<div class="row-fluid">
				<div class="span3">
					<a href="/"><img src="https://www.westmaneditorial.com/hubfs/Logo/WestmanLogo.png?t=1525970425256" alt="Logo" class="logo"></a>
				</div>
				<div class="span9">
					<div class="nav widget-type-menu custom-menu-primary">
						<div class="cell-wrapper layout-widget-wrapper">
            <span id="hs_cos_wrapper_module_1480706280274916" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_menu" style="" data-hs-cos-general-type="widget" data-hs-cos-type="menu"><div id="hs_menu_wrapper_module_1480706280274916" class="hs-menu-wrapper active-branch flyouts hs-menu-flow-horizontal" role="navigation" data-sitemap-name="default">
			<ul>
			<li class="hs-menu-item hs-menu-depth-1"><a href="/what-we-do">What We Do</a></li>
			<li class="hs-menu-item hs-menu-depth-1"><a href="/about-us">About Us</a></li>
			<li class="hs-menu-item hs-menu-depth-1"><a href="/writing-jobs">Writing Jobs</a></li>
			<li class="hs-menu-item hs-menu-depth-1"><a href="/blog">Blog</a></li>
			<li class="hs-menu-item hs-menu-depth-1"><a href="/contact">Contact</a></li>
			<li class="hs-menu-item hs-menu-depth-1"><a href="/get-a-quote">Get a Quote</a></li>
			</ul>
			</div></span>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- .container -->
	</div> <!-- .mainNav -->
</header>