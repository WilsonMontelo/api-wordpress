<!--PEGA TODAS AS SUBCATEGORIAS DE UMA CATEGORIA ORGANIZANDO PELO TITULO-->
<?php wp_list_categories('sort_column=name&child_of=CATEGORIA ID&title_li='); ?>


<!--PEGA CATEGORIA PELO NOME-->
<?php
$id_da_categoria = get_cat_id('notícias');
wp_list_categories('sort_column=name&child_of='."$id_da_categoria".'&title_li=');
?>

<DOCUMENTAÇÂO DE CATEGORIAS DO WORDPRESS>
http://codex.wordpress.org/Template_Tags/wp_list_categories

<!--ARRAY EM CATEGORIAS
http://codex.wordpress.org/Function_Reference/get_the_category
-->
<?php $category = get_the_category(); echo $category[ARRAY]->cat_name;?>