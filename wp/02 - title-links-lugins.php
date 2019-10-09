<!-- pegando nome por tipo -->
<title>
<?php if (is_home()){
	bloginfo('name');
}elseif (is_category()){
	single_cat_title(); echo ' -  ' ; bloginfo('name');
}elseif (is_single()){
	single_post_title();
}elseif (is_page()){
	bloginfo('name'); echo ': '; single_post_title();
}else {
	wp_title('',true);
} ?>
</title>

<!-- head default wp -->
<?php wp_head(); ?>
</head>

<!-- footer default wp -->
<?php wp_footer(); ?>

<!-- diretorio -->
<?php bloginfo('template_directory'); ?>

<!-- correção do link para a home -->
<?php echo get_settings('home'); ?>

<!-- documentação -->
http://codex.wordpress.org/Conditional_Tags
http://codex.wordpress.org/Template_Tags
