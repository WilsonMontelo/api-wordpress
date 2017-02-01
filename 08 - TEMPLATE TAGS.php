<!-- SINGLE TAGS -->

<!-- LOOP inicio -->
<?php if (have_posts()): while (have_posts()) : the_post();?>

<!-- LOOP fim-->
<?php endwhile; else:?>
<?php endif;?>

<!-- TITULO -->
<?php the_title();?>

<!-- POST -->
<?php the_content();?>

<!-- LINKS INTERNOS -->
<?php bloginfo('url'); ?>

<!-- MORE -->
<?php the_exept();?>
<?php the_post_thumbnail( array(797, 338) ); ?>

<!-- TAGS com condição -->
<?php if (function_exists('the_tags'))the_tags();?>

<!-- PLUGIN DE RELACIONADOS
Contextual Related Posts -->

<!-- DESCRIÇÂO RESUMO 
Excerpt re-reloaded
-->
<?php the_excerpt_rereloaded(35);?>

<!-- IMAGEM DESTAQUE -->
<?php the_post_thumbnail('full', array('class' => '')); ?>

<!-- Comment form -->
<?php comments_template(); ?>

<!--PEGA DATA-->
<?php the_time('j M Y');?>

<!--INFORMA OS COMENTÁRIOS-->
<?php comments_popup_link('0 comentário','1 comentário','% Comentários'); ?>

<!-- CONSIÇÂO COM PLUGIN (wp views) -->
<?php if(function_exists('the_views')){the_views();}?>

AUTOR TAGS IN LOOP (DEVEM ESTAR DENTRO DO LOOP DO POST --><!-- 
<?php the_author();?>
<!-- AVATAR -->
<?php echo get_avatar(get_the_author_id(),80);?>
<!-- NOME -->
<?php the_author_firstname();?>
<!--SOBRE NOME-->
<?php the_author_lastname();?>
<!--DESCRIÇÃO-->
<?php the_author_description();?> 
<!--META PARA BLOG INTERNO-->
<?php the_author_posts_link();?>
<!--SITE DO AUTOR-->
<?php the_author_url(); ?>
<!--EMAIL DO AUTOR-->
<?php the_author_email(); ?>
<!--AUTOR NA PG BLOG FORA DE LOOP-->
<?php wp_title('',true); ?>


<?php
$key="img";
$img = get_post_meta($post->ID,$key,true);
if(isset($img) && $img >= '1'){ ?> 
<a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>">
<img src="<?php echo get_option('home');?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>"
title="<?php the_title();?>" alt="<?php the_title();?>" width="200px" height="100px"></a>
<?php }else{}?>