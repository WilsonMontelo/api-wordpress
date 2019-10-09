<!-- documentação de scripts externos
http://codex.wordpress.org/Function_Reference/wp_enqueue_script
-->

<!-- enquete com wp-poll -->

<?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
  <ul>
    <li><?php get_poll();?></li>
   </ul>
<?php endif; ?> 


<!-- author out loop -->
<!-- avatar -->
<?php echo get_avatar($author,80);?>

<!-- nome -->
<?php $user_info = get_userdata($author);
echo($user_info->first_name .  " " . $user_info->last_name . "\n");
?>
<!-- blog -->
<a href="<?php bloginfo('url');?>/?author=<?php echo $author;?>">/blog do autor</a>

<!-- os mais comentados
PLUGIN = top-commentators-widget
 -->
<ul>
<?php ns_show_top_commentators(); ?>
</ul>

<!-- plugin de usuários -->

<li>
  <?php $author = 'NUMEROIDDOUSUARIO';?>
  <?php echo get_avatar($author,50);?>
  <span><?php $user_info = get_userdata($author);
  echo($user_info->first_name .  " " . $user_info->last_name . "\n");
  ?></span>
  <a href="<?php bloginfo('url');?>/?author=<?php echo $author;?>">/blog do autor</a>
</li>


<!-- dinamic sidebar -->
<?php dynamic_sidebar();?>