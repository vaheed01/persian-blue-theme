<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">


      <?php
	  $slug = get_post_field( 'post_name', get_post() );
	  if($slug!="comments")
	  {
	 ?>
  		-
         دیدگاه های غیر مرتبط با موضوع تایید نمی شود
		 <br/>
		 - اگر وبلاگ یا وبسایت ندارید آن را خالی بگذارید
	  <?php } ?>
	<?php if ( have_comments() ) { ?>
		
		<ol class="comment-list">
			<?php
				wp_list_comments();
			?>
		</ol>
        
		<?php the_comments_navigation(); ?><br/>

	<?php } ?>



	<?php
		comment_form();
	?>

</div>
