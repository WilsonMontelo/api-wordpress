/*
Theme Name: 
Theme URI: 
Description: 
Version: 1.0
Author: 
Author URL: 
Tags: 
*/

<!-- css -->
<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
</style>

<!-- header e footer default wp -->
<?php get_header();?>
<?php get_footer();?>

<!-- sidebar default wp -->
<?php get_sidebar();?>

<!--pega arquivo externo -->
<?php include (TEMPLATEPATH . '/arquivo.php'); ?>

