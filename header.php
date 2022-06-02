<?php
/**
 * The header for our theme.
 *
 * @package woostify
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head><?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-LQTEBZQFWK"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'G-LQTEBZQFWK');
	</script>
</head>

	<body <?php body_class(); ?>>
		<?php
		wp_body_open();

		do_action( 'woostify_theme_header' );
