<?php get_header(); ?>

<div id="container">
<div id="content">

<?php if ( have_posts() ) { the_post(); ?>

<div class="post">
<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="postbody">


<div class="postcontent">
 <?php the_content(); ?>
 <div class="clear"></div>
</div>
<!-- end postcontent --> 

  <div class="postinfo" dir='ltr'>
            <span dir='ltr'><?php the_time("Y/m/d h:i"); ?></span> توسط <b><?php the_author(); ?></b>
       <div class="clear"></div>
   </div>
         

  <div class="posttags">
		  <?php the_tags("<div>برچسب ها</div>"," "); ?>
  </div> 
  
  <br/>
   
        <?php
 
          if ( comments_open() || get_comments_number() ) 
		  {     
			 comments_template();
		  }
	    ?>

</div>
<!-- end postbody -->
</div>
<!-- end post -->


<?php } ?>





</div>
<!-- end content -->

<div id="sidebar">

<?php get_sidebar(); ?>

 

</div>
<!-- end sidebar -->

<div class="clear"></div>

</div>


<?php get_footer(); ?>