<!-- SINGLE TAGS -->

<!-- loop inicio -->
<?php if (have_posts()): while (have_posts()) : the_post();?>

<!-- loop end -->
<?php endwhile; else:?>
<?php endif;?>

<!-- titulo -->
<?php the_title();?>

<!-- post -->
<?php the_content();?>

<!-- link externos -->
<?php bloginfo('url'); ?>

<!-- more -->
<?php the_exept();?>
<?php the_post_thumbnail( array(797, 338) ); ?>

<!-- tags com condição -->
<?php if (function_exists('the_tags'))the_tags();?>

<!-- plugin de relacionados
Contextual Related Posts -->

<!-- descrição resumo 
Excerpt re-reloaded
-->
<?php the_excerpt_rereloaded(35);?>

<!-- imagem destaque -->
<?php the_post_thumbnail('full', array('class' => '')); ?>

<!-- Comment form -->
<?php comments_template(); ?>

<!-- pega data -->
<?php the_time('j M Y');?>

<!-- informa os comentários -->
<?php comments_popup_link('0 comentário','1 comentário','% Comentários'); ?>

<!-- consição do plugin (wp views) -->
<?php if(function_exists('the_views')){the_views();}?>

<!-- autot tags in loop (DEVEM ESTAR DENTRO DO LOOP DO POST) --> 
<?php the_author();?>
<!-- avatar -->
<?php echo get_avatar(get_the_author_id(),80);?>
<!-- nome -->
<?php the_author_firstname();?>
<!-- sobrenome -->
<?php the_author_lastname();?>
<!-- descrição -->
<?php the_author_description();?> 
<!-- meta para o blog interno -->
<?php the_author_posts_link();?>
<!-- site do autor -->
<?php the_author_url(); ?>
<!-- email do autor -->
<?php the_author_email(); ?>
<!-- autor da pagina blog fora do loop -->
<?php wp_title('',true); ?>


<?php
$key="img";
$img = get_post_meta($post->ID,$key,true);
if(isset($img) && $img >= '1'){ ?> 
<a href="<?php the_Permalink()?>" title="<?php the_title();?>" alt="<?php the_title();?>">
<img src="<?php echo get_option('home');?>/<?php $key="img";echo get_post_meta($post->ID,$key,true);?>"
title="<?php the_title();?>" alt="<?php the_title();?>" width="200px" height="100px"></a>
<?php }else{}?>