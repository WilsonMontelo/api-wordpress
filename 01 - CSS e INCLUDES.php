<!-- CORRIGINDO THEMA PARA WORDPRESS-->

<!-- Correção do topo do CSS -->

/*
Theme Name: 
Theme URI: 
Description: 
Version: 1.0
Author: 
Author URL: 
Tags: 
*/

<!-- CORRIGINDO LINK PARA FOLHA DE ESTILO -->
<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
</style>

<!--PEGA HEADER E FOOTER-->
<?php get_header();?>
<?php get_footer();?>

<!--PEGA SIDEBAR-->
<?php get_sidebar();?>

<!--PEGA ARQUIVO EXTERNO -->
<?php include (TEMPLATEPATH . '/arquivo.php'); ?>

