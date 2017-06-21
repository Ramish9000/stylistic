<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Theme-Stylistic
 */

get_header(); ?>

<body class="gridlock index">

	<!-- MENU -->
	<?php require_once('templates/menu.php') ?>

	<div class="page-wrap">

		<!-- TOP MENU -->
		<!-- <?php get_sidebar(); ?> -->
		<?php require_once('page-header.php') ?>

		<!-- SLIDES ================================================== -->
		<?php require_once('templates/slides.php') ?>

		<!-- TOP 2 PREVIEW =========================================== -->
		<?php require_once('templates/top-2-preview.php') ?>

		<!-- ROW LIST ================================================= -->
		<?php require_once('templates/row-list.php') ?>

		<!-- LOADING SIGN ============================================= -->
		<div class="load-wait">
			<i class="icon-spinner icon-spin icon-large"></i>
		</div>
		<div id="insta-feed"></div>

	</div>

	<!-- FOOTER ============================================= -->
	<?php get_footer(); ?>

</body>
</html>