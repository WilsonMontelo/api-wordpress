<!--pega todas as subcategorias de uma categoria organizada pelo titulo -->
<?php wp_list_categories('sort_column=name&child_of=CATEGORIA ID&title_li='); ?>


<!-- pega categoria pelo nome -->
<?php
$id_da_categoria = get_cat_id('not�cias');
wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li=');
?>

<!-- documentação -->
http://codex.wordpress.org/Template_Tags/wp_list_categories

<!-- array em categorias
http://codex.wordpress.org/Function_Reference/get_the_category
-->
<?php $category = get_the_category(); echo $category[ARRAY]->cat_name;?>