<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme-Stylistic
 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Basic Page Needs ================================================== -->
  <title></title>
  <meta name="description" content="">

<!-- BOOTSTRAP CSS ================================================== -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- CSS 1 ================================================== -->
<?php require_once('inc_custom/header-links.php') ?>

<!-- JS ================================================== -->
<?php require_once('inc_custom/header-scripts.php') ?>

<!-- META -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<meta content="3d0061fda8a85774dd8911cd82c41335" name="shopify-checkout-api-token">
<meta content="/2393483/digital_wallets/dialog" id="shopify-digital-wallet" name="shopify-digital-wallet">

<!-- SHOPIFY ================================================== -->
<?php require_once('inc_custom/header-scripts-shopify.php') ?>

<!-- CSS 2 ================================================== -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

<link href="/next" rel="next">
<link href="/prev" rel="prev">

<?php wp_head(); ?>

</head>