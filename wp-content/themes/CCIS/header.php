<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="<?php bloginfo('description'); ?>" content="">
    <meta name="<?php bloginfo('author'); ?>" content="">
    <title>CCIS | PP2</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
	  <link href="<?php echo get_stylesheet_uri(); ?>/css/main.css" rel="stylesheet">
	  <link href="<?php echo get_stylesheet_uri(); ?>/css/animate.css" rel="stylesheet">
	  <link href="<?php echo get_stylesheet_uri(); ?>/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
<?php wp_head(); ?>
</head><!--/head-->

<body>
	<header id="header" role="banner">
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
            <a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>Recherche</i></a>
            <a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Connexion</i></a>
            <a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Panier</i></a>
            <a href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Contact</i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
		        <div class="row">
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/logo.JPEG" alt="logo CCIS">
		                </a>
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">
		                    <li class=""><a href="#home">La chambre</a></li>
		                    <li class=""><a href="#explore">Services</a></li>
		                    <li class=""><a href="#event">Evenements & Formation</a></li>
                        <li class=""><a href="#event">Blogue</a></li>
		                    <li class=""><a href="#about">Zone membre</a></li>
		                    <li class=""><a href="#contact">Contact</a></li>
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>
    </header>
    <!--/#header-->
