<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
  <?php wp_head(); ?>


	<?php $ss_uri = get_stylesheet_directory_uri();  ?>

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo $ss_uri; ?>/assets/img/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo $ss_uri; ?>/assets/img/favicon/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="<?php echo $ss_uri; ?>/assets/img/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo $ss_uri; ?>/assets/img/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo $ss_uri; ?>/assets/img/favicon/favicon-16x16.png" sizes="16x16">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ss_uri; ?>/assets/img/favicon/apple-touch-icon-180x180.png">
	
	<link rel="manifest" href="<?php echo $ss_uri; ?>/assets/img/favicon/manifest.json">

	<link rel="shortcut icon" href="<?php echo $ss_uri; ?>/assets/img/favicon/favicon.ico">

	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="<?php echo $ss_uri; ?>/assets/img/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="<?php echo $ss_uri; ?>/assets/img/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">


</head>
