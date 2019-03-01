<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo is_home()?bloginfo('name'):wp_title(" "); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo page_description(); ?>">
<meta name="keywords" content="<?php echo page_keywords(); ?>">
<meta name="generator" content="Notepad++">
<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rdf_url'); ?>" />
<link href="<?php bloginfo('template_directory'); ?>/style.css?<?php echo rand(0,100000);?>" type="text/css" rel="stylesheet">

</head>
 
 
 
<body>
<div id="wrapper">

<?php if(is_app_request()) return; ?>

<div id="headerbox">
<div id="header">

        <h1><a href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2><a href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a></h2>
</div>        
</div>