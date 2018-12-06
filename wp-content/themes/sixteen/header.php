<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sixteen
 */
?>
<?php get_template_part('modules/header/head'); ?>
<body <?php body_class(); ?>>
	<?php if ( get_header_image() ) : ?>
		<div id="header-image"></div>
	<?php endif; // End header image check. ?>
<div id="page" class="hfeed site">
    
    <div id="top-section">
	    <?php get_template_part('modules/navigation/mobile', 'menu'); ?>
	    
        <?php get_template_part('modules/header/masthead'); ?>

        <?php get_template_part('modules/navigation/main','menu'); ?>
		
		<?php get_template_part('slider', 'nivo'); ?>
		
		</div><!--#top-section-->
	
		<div id="content" class="site-content container">

            <?php get_template_part('framework/featured-components/post-large', 'boxes'); ?>

            <?php get_template_part('framework/featured-components/post', 'square'); ?>