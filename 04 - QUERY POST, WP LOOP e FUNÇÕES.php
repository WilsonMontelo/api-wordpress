<!--QUERY POST -->
<!-- Excluir cat &cat= - ID -->
<!-- Apenas de uma cat $cat= ID-->
<!-- INICIO DO POST LIMIT showposts = 1 =  -->
<!-- LIMIT offset= 1 -->
<!-- CATEGORY NAME = category_name=Vídeo Aulas -->
<?php query_posts('showposts=1&cat=-1, -335');?>

<!-- ABRE O LOOP -->
<?php if (have_posts()): while (have_posts()) : the_post();?>

<!--FECHA O LOOP -->
<?php endwhile; else:?>
<?php endif;?>

<!-- IR PARA A PAGINA -->
<?php the_permalink(); ?>

<!--PEGA O LINK DO POST -->
<?php the_Permalink()?>

<!--PEGA URL DO POST-->
<?php bloginfo('url'); ?>/

<!-- PEGA O TITULO DO POST -->
<?php the_title();?>

<!--PEGA DATA-->
<?php the_time('j M Y');?>

<!--INFORMA OS COMENTÁRIOS-->
<?php comments_popup_link('0 comentário','1 comentário','% Comentários'); ?>

<!-- CONSIÇÂO COM PLUGIN (wp views) -->
<?php if(function_exists('the_views')){the_views();}?>

<!-- CRIA UM CAMPO PERSONALIZADO -->
<?php $key="VARIAVEL";echo get_post_meta($post->ID,$key,true);?>

<!-- LIMITA PALAVRAS (Baixe o plugin The Excerpt re-reloaded)-->
<?php the_excerpt_rereloaded(NÚMERO DE LETRAS);?>

<!-- LOOP PADRÃO POST-->
<?php 
$args = array('post_type' => 'post', 'category_name'=>'blog', 'numberposts' => 2);
$my_post_cat = get_posts( $args );
?>

<?php if ( $my_post_cat ) : foreach( $my_post_cat as $post ) : setup_postdata( $post );?>

<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<?php endforeach; ?>
<?php else: ?>
	<p>Nenhum conteúdo foi inserido.</p>
<?php endif; ?>

<!-- LOOP PADRÃO PAGINA-->
<?php 
$args = array('post_type' => 'page', 'pagename'=>'blog');
$my_post_cat = get_posts( $args );
?>

<?php if ( $my_post_cat ) : foreach( $my_post_cat as $post ) : setup_postdata( $post );?>

<h2><?php the_title(); ?></h2>
<?php the_content(); ?>

<?php endforeach; ?>
<?php else: ?>
	<p>Nenhum conteúdo foi inserido.</p>
<?php endif; ?>

<!-- LOOP PADRÃO WORDPRESS -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title() ?></h1>
<?php the_content(); ?>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<!-- QUERY POST -->

<?php query_posts(array('home_category' => 'home', 'showposts' => 2));

	if(have_posts()):
	while ($wp_query -> have_posts()) : $wp_query -> the_post(); 			
?>			
	<?php the_content(); ?>

<?php endwhile; endif; ?>
<!-- CONTADOR DE CARACTERES -->
<?php 
	query_posts(array('type_post' => 'post', 'cat=3,1' , 'showposts' => 4,  'paged'=>$paged));

	if(have_posts()):
	while ($wp_query -> have_posts()) : $wp_query -> the_post();

    // aqui eu pego o conteúdo do post
    $conteudo_do_post = get_the_content(); 
    //aqui eu defino a quantidade de caracter que vai ser exibido
    $caracteres = '370'; 
?>	

   <?php  echo '<p>' . trim_letras( $conteudo_do_post, $caracteres ) . '</p>'; 	?>
<?php endwhile; endif; ?>

<!-- LISTANDO CATEGORIA -->
<ul>
	<?php
	 global $post;
	 $myposts = get_posts('numberposts=5&category=blog');
	 foreach($myposts as $post) :
	 ?>
	    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	 <?php endforeach; ?>
</ul>

<!--Thumbnail-->

<?php the_post_thumbnail('full', array('class' => '')); ?>

<!-- SHORTCODE -->

<?php echo do_shortcode("[rev_slider banner-principal]"); ?>

<!-- DOCUMENTAÇÃO DO WORDPRESS -->
http://codex.wordpress.org/Function_Reference/query_posts
http://codex.wordpress.org/pt-br:Template_Tags
http://codex.wordpress.org/Custom_Fields