<?php  
// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');
// Register Menu
register_nav_menus( array(
    'primary' => __( 'Top Menu', 'THEMENAME' ),
) );
if ( function_exists('register_sidebar') ) {
// This sidebar appears on all pages above the following sidebars
  register_sidebar(
    array(
      'name' => 'sidebar',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '',
      'after_title' => '',
      )
    );
  }
// MENUS
function register_my_menus() {
register_nav_menus(
array(
  'top-menu' => __( 'Top Menu' ),
  'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' ); 

function custom_excerpt_length( $length ) {
  return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
//breadcrumb function
function rm_bread_crumbs() {
 global $post;
 $crumbs =     '<p><a href="'.get_option('home').'">Home</a> ';
 //if the page has a parent add title and link of parent
 if($post->post_parent) {
   $crumbs .=     ' &raquo; <a href="'.get_permalink($post->post_parent).'">'.get_the_title($post->post_parent).'</a>';
 }
 // if it's category page
 if((!is_front_page())||(is_category())){
  $crumbs.=
  $delimiter = ' &raquo;';
  $currentBefore = '<span class="current">';
  $currentAfter = '</span>';
  global $wp_query;
  $cat_obj = $wp_query->get_queried_object();
  $thisCat = $cat_obj->term_id;
  $thisCat = get_category($thisCat);
  $parentCat = get_category($thisCat->parent);
  if ($thisCat->parent != 0) $crumbs.= get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' ');
   $crumbs.= $currentBefore." ";
   $crumbs.= single_cat_title("",FALSE);
   $crumbs.=$currentAfter;
 }
 // if it's not the front page of the site, but isn't the blog either
 if((!is_front_page()) && (is_page())) {
   $crumbs .=    ' <span>'.get_the_title($post->ID)."</span>";
 }
 //if it's a single news/blog post
 if(is_single()) {
   $crumbs .=     ' &raquo; <a href="'.get_permalink(get_option(page_for_posts)).'">'.get_the_title(get_option(page_for_posts)).'</a>';
   $crumbs .=    ' &raquo; <span>'.get_the_title($post->ID)."</span>";
 }
 $crumbs .=    '</p>'."\n";
 echo $crumbs;
}
//Ativando Shortcodes nos Widgets
add_filter('widget_text', 'do_shortcode');
//Ativando Thumbnails
add_theme_support( 'post-thumbnails' );
//MUDAR LOGO NO PAINEL DE LOGIN
function login_styles() { ?>
  <style type="text/css">
  body{background: #000 url('<?php echo get_stylesheet_directory_uri(); ?>/images/login-bg.png') repeat scroll center bottom ;}
  .login h1 a {width: 228px;height:91px;display: inline-block;background: url('<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rodape.png') no-repeat;}
  .login form {background: #eee;border-radius:4px;}
  .login label {font-size: 17px;color: #000;}
  .login form .input{background: #fff;box-shadow:none;border-radius: 4px;border: 1px solid #000;color: #fff;}
  .login form .input:hover, .login form .input:focus{background: #000;}
  .login .button-primary, .login .button-group.button-large .button, .login .button.button-large{height: 40px;padding: 0 20px;display: inline-block;box-shadow: none;border: none;background: #000;}
  .login .button-primary:hover {background: #fff;color:#000;}
  .login .forgetmenot{margin-top: 10px;}
  .login #nav a, .login #backtoblog a {color: #fff;}
  .login #nav a:hover, .login #backtoblog a:hover{text-decoration: underline;color: #fff;}
  </style>
<?php }
add_action('login_enqueue_scripts', 'login_styles');
// LINK LOGO LOGIN
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
// MUDAR NOME AO PASSAR O MOUSE
function my_login_logo_url_title() {
    return 'Fato Comunicação';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
//LIMITAR EXCERPT
  function custom_length_excerpt($word_count_limit) {
    $content = wp_strip_all_tags(get_the_content() , true );
    echo wp_trim_words($content, $word_count_limit);
  }
// INCLUDE CUSTOM POST
include("function_cst.php");
 //FUNÇÃO CONTADORA DE CARACTERES
function trim_letras( $conteudo, $caracteres ) {
$texto = wp_trim_words( $conteudo , $caracteres );
// Só realiza ela caso a string possua mais caracteres do que o delimitado
if( mb_strlen( $texto ) > $caracteres ){
$corte_texto = trim ( mb_substr( $texto, 0, $caracteres, 'UTF-8') );
$exp_texto = explode(" ", $corte_texto);
$palavra = "";
//Loop remove a última palavra do resultado final, pois ela vem cortada e pode vir comprometida se escrita com caracteres especiais
for ($i=0; $i < count( $exp_texto ) -0 ; $i++) {
$palavra .= $exp_texto[$i] . ' ';
}
$final = trim( $palavra );
$final .= "...";
}
else $final = $texto;
return $final;
}
?>