<!-- DOCUMENTAÇÂO DE SCTIPRS EXTERNOS
http://codex.wordpress.org/Function_Reference/wp_enqueue_script
-->

<!-- ENQUETE COM WP-POLLS -->
<?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
  <ul>
    <li><?php get_poll();?></li>
   </ul>
<?php endif; ?> 


<!-- AUTHOR OUT LOOP-->
<!-- AVATAR -->
<?php echo get_avatar($author,80);?>
<!-- NOME -->
<?php $user_info = get_userdata($author);
echo($user_info->first_name .  " " . $user_info->last_name . "\n");
?>
<!--/BLOG-->
<a href="<?php bloginfo('url');?>/?author=<?php echo $author;?>">/blog do autor</a>

<!-- OS MAIS COMENTADORES
PLUGIN = top-commentators-widget
 -->
<ul>
<?php ns_show_top_commentators(); ?>
</ul>

<!--NOSSO PLUGIN DE USUARIOS-->
<li>
  <?php $author = 'NUMEROIDDOUSUARIO';?>
  <?php echo get_avatar($author,50);?>
  <span><?php $user_info = get_userdata($author);
  echo($user_info->first_name .  " " . $user_info->last_name . "\n");
  ?></span>
  <a href="<?php bloginfo('url');?>/?author=<?php echo $author;?>">/blog do autor</a>
</li>


<!--DINAMIC SIDEBAR-->
<?php dynamic_sidebar();?>