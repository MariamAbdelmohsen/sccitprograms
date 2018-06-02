
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SCC IT| Home Page</title>
<!--Remy Sharp Shim --> 
<!--[if lte IE 9]> 
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
</script> 
<![endif]-->
    
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/logo.png"/>
<!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css"/>

<!--flexslider css-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" type="text/css" media="screen"/>
  
<!--Font Awesome-->
<link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<style type="text/css" media="all">
	
</style>    
    <?php wp_head();?>
</head>  
<body>
    <header>
       
        <a href="index.html"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a>
        <a href="https://seattlecentral.edu/" target="_blank"><img class="scc-logo" src="<?php bloginfo('template_directory'); ?>/images/color-horizontal-webSMALL.png"></a>
        <nav class="container">
            
            <div id="mobile-nav">
                <img class="burger" src="<?php bloginfo('template_directory'); ?>/images/Hamburger.png"/>
                <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="small logo" id="logo3"/></a>
            </div>
<!--
            <ul id="menu-dropdown" class="row">
                <li class="col-md-2 col-md-offset-1 col-sm-2 offset-sm-1"><a href="index.html" class="active">Home</a></li>
                <li class="col-md-2 col-sm-2"><a href="programs.html">IT Programs</a></li>
                <li class="col-md-2 col-sm-3"><a href="https://mycentral.seattlecolleges.edu/" target="_blank">MyCentral <i class="fa fa-external-link" aria-hidden="true"></i></a></li>
                <li class="col-md-2 col-sm-2"><a href="#">Resources</a></li>
                <li class="col-md-2 col-sm-2"><a href="contact.html">Contact</a></li>
            </ul>end main menu
-->
            <!--Begin WP Menu-->
            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation',)); ?> 
            <!--End WP Menu-->
        </nav>
        <!--Jquery-->   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
		</script>
        <script src="<?php bloginfo('template_directory'); ?>/js/drop-down.js" type="text/javascript"></script>
        <!--Flexslider-->
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
		
		
    </header>