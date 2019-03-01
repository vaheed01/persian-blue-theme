<?php get_header(); ?>

<div id="container">
<div id="content">

<?php 
    $i=0;
    while ( $i<6 && have_posts() ){
       
	   $i++;
	   the_post();
   
?>

<div class="post">
<h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<div class="postbody">


<div class="postcontent">
 
 <?php
 
  	preg_match('@<img[^\>]*src\=\"([^\"]*)\"@i', get_the_content(), $img);
	//$isdata = preg_match('@^data:image/@', $img[1]);
	$src  = isset($img[1])?$img[1]:(isset($img[0])?$img[0]:false);
   // echo $src;
   if($src)
   {
 ?>
 <div class="excerpt" > <?php the_excerpt(); ?></div>
 <div class="preview" style="background:url('<?php echo $src ; ?>');background-size:cover;background-position: center; ">
 </div>
 <?php }else { ?> <span class="excerpt2" > <?php the_excerpt();} ?> </span>
 <div class="clear"></div>
</div>
<br/>
 <a style='float:left;color:teal;font-size:1.1em' href="<?php the_permalink(); ?>">ادامه نوشته</a>



  <div class="postinfo" dir='ltr'>
       <?php the_time("Y/m/d h:i"); ?>
       <div class="clear"></div>
   </div>

</div>
<!-- end postbody -->
</div>
<!-- end post -->

<?php } ?>



	<div class="postbody">
		<?php dynamic_sidebar( 'cbar' ); ?>
	</div>





</div>
<!-- end content -->

<div id="sidebar">


<?php get_sidebar(); ?>
 
</div>
<!-- end sidebar -->

<div class="clear"></div>

</div>

<?php get_footer(); ?>
