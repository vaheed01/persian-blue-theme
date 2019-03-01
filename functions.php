<?php

define('CONCATENATE_SCRIPTS', false);

function add_mview_param($url)
{
    $url = add_query_arg("mview","on",$url); 
	return $url;
}

function page_keywords()
{
	 $oid = get_queried_object_id();
	 $def = "کسب و کار,آموزش,سریال,فیلم,زنگانلی,توسعه فردی,وب سایت,وبلاگ,فناوری اطلاعات ,برنامه نویسی,زنجان,وحید رفیعی";
     if(!$oid)
	  return $def;
 
    $post_tags = get_the_tags($oid);
 
    $res="";
	if ($post_tags)
    {
		foreach( $post_tags as $tag ) 
		   $res .= $tag->name . ', '; 
	}else
	{
		return $def;
	}
	
	return $res;
	
	
}

function page_description()
{
	 $oid = get_queried_object_id();
     if(!$oid)
	  return bloginfo('description'); 
	setup_postdata( $post );
     $excerpt = get_the_excerpt();
	return strip_tags($excerpt);
}

if(isset($_GET["mview"]) && $_GET["mview"]=="on")
{
	
	add_filter("post_link","add_mview_param");
	add_filter("page_link","add_mview_param");
	add_filter("attachment_link","add_mview_param");
	add_filter("post_type_link","add_mview_param");

	
}

function is_app_request()
{
	return isset($_GET["mview"]) && $_GET["mview"]=="on";
}

add_theme_support( 'customize-selective-refresh-widgets' );


if (function_exists('add_theme_support')){
add_theme_support('menus');
}
add_theme_support( 'post-thumbnails' );
// Register the available menus
	register_nav_menus( array(
		'main-menu' => __('منوی اصلی', 'okthemes' ),
		'cats-menu' => __('منوی سایدبار', 'okthemes' ),
	));


/**
 * Register our sidebars and widgetized areas.
 *
 */
 
 function blogeen_widgets_init()
 {

	register_sidebar( array(
		'name'          => 'ساید بار چپ',
		'id'            => 'lbar',
		'before_widget' => '<div class="box">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );
	
	register_sidebar( array(
		'name'          => 'ستون اصلی',
		'id'            => 'cbar',
		'before_widget' => '<div class="post">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2>',
	) );

 }
add_action( 'widgets_init', 'blogeen_widgets_init' );

?>