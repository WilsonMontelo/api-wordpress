<?php
// paginação 
function wp_corenavi() {
  global $wp_query, $wp_rewrite;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;
 
  $total = 1; //1 - mostra o texto "Página N de N", 0 - para mostrar nada
  $a['mid_size'] = 5; //quantos links para mostrar a esquerda
  $a['end_size'] = 1; //quantos links para mostrar do comeco ao fim
  $a['prev_text'] = '« Anterior'; //texto para o link "Página seguinte"
  $a['next_text'] = 'Siguiente »'; //texto para o link "Página anterior"
 
  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Página ' . $current . ' de ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}
?>
<!-- FUNÇÃO -->
<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>

