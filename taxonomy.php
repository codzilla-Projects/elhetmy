<?php  
get_header();
get_template_part('page_title'); 
?>
<?php
global $post;
 if ($post->post_type == "procedures") :?>
	<?php get_template_part('template-parts/procedures'); 	 ?>
<?php elseif ($post->post_type == "gallery") :?>
	<?php get_template_part('template-parts/gallery'); 	 ?>
<?php endif ?>
<?php get_footer()?>