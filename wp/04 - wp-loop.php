<!-- query post -->
<!-- Excluir cat &cat= - ID -->
<!-- Apenas de uma cat $cat= ID-->
<!-- iniciando do post limit showposts = 1 =  -->
<!-- LIMIT offset= 1 -->
<!-- category name = category_name=Vídeo Aulas -->
<?php query_posts('showposts=1&cat=-1, -335');?>

<!-- loop -->
<?php if (have_posts()): while (have_posts()) : the_post();?>

<!-- end loop -->
<?php endwhile; else:?>
<?php endif;?>

<!-- ir para a pagina -->
<?php the_permalink(); ?>

<!-- pega o link do post -->
<?php the_Permalink()?>

<!-- pega a url do post -->
<?php bloginfo('url'); ?>/

<!-- pega o titulo do post -->
<?php the_title();?>

<!-- pega a data -->
<?php the_time('j M Y');?>

<!-- informa os comentários -->
<?php comments_popup_link('0 comentário','1 comentário','% Comentários'); ?>

<!-- consição com plugin (wp views) -->
<?php if(function_exists('the_views')){the_views();}?>

<!-- cria um campo personalizado -->
<?php $key="VARIAVEL";echo get_post_meta($post->ID,$key,true);?>

<!-- limitar o número de palavras (Baixe o plugin The Excerpt re-reloaded)-->
<?php the_excerpt_rereloaded(NÚMERO DE LETRAS);?>

<!-- loop default post -->

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

<!-- loop default page -->

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

<!-- loop default wp -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title() ?></h1>
<?php the_content(); ?>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>

<!-- query post -->

<?php query_posts(array('home_category' => 'home', 'showposts' => 2));

	if(have_posts()):
	while ($wp_query -> have_posts()) : $wp_query -> the_post(); 			
?>			
	<?php the_content(); ?>

<?php endwhile; endif; ?>

<!-- listando categorias -->

<ul>
	<?php
	 global $post;
	 $myposts = get_posts('numberposts=5&category=blog');
	 foreach($myposts as $post) :
	 ?>
	    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	 <?php endforeach; ?>
</ul>

<!-- thumbnail -->

<?php the_post_thumbnail('full', array('class' => '')); ?>

<!-- shortcode -->

<?php echo do_shortcode("[rev_slider banner-principal]"); ?>

<!-- contador de caracteres -->

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


<!-- documentação -->
http://codex.wordpress.org/Function_Reference/query_posts
http://codex.wordpress.org/pt-br:Template_Tags
http://codex.wordpress.org/Custom_Fields