<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    
    <title><?php bloginfo( 'name' ); ?></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/font-awesome.min.css">

    <!-- css style -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
    
    <!-- search animation -->
    <link href="js/searchbar.js">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    
    <?php wp_head(); ?>

    <!-- google analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109989106-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-109989106-1');
	</script>
	
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script>
        $(window).resize(function() {
          $('.readAlsoImage').height($('.readAlsoImage').width());
        });
    </script>	
    
</head>
<body <?php body_class(); ?>>

    <div class="jumbotron">
        <div class="container">
            
        
            <!-- Static navbar -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri()?>/img/logo.jpg" class="logo" alt="logo"></a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                 <?php wp_nav_menu( array( 'container_class' => '', 'theme_location' => 'primary' ) ); ?>
                 
                 
                  <!--<li><a href="http://simple-move.eu/blog" class="blogLink">Blog</a></li>
                  <li><a href="http://simple-move.eu/bucketlist" class="bucketlistLink">BucketList</a></li>
                  <li><a href="#" class="searchLink"><i class="fa fa-search" aria-hidden="true"></i></a></li>-->
                </ul>
              </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
          </nav>
