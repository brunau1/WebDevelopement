<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo "BruNau1 | $page->title"; ?></title>
	<meta name="description" content="<?php echo $page->summary; ?>" />
	
	<link href='//fonts.googleapis.com/css?family=Lusitana:400,700|Quattrocento:400,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/estilo.css" />
	<link rel="icon" href="<?php echo $config->urls->assets?>imagens/favicon.png" />

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="carousel.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="bootstrap.js"></script>
	<script src="util.js"></script>
</head>
<body>
	<div class="banner-site">
		<!-- <a target="_blank" href="https://www.facebook.com/brunosantosprotec"><i class="fab fa-facebook-f"></i></a>
		<a target="_blank" href="https://www.youtube.com/channel/UCWbKCwsM9FPgEEFDrr4lhlg"><i class="fab fa-youtube"></i></a>
		<a target="_blank" href=""><i class="fab fa-instagram"></i></a>
		<a target="_blank" href=""><i class="fab fa-linkedin-in"></i></a> -->
		<span>BruNau1</span>
	</div>

	<!-- bootstrap test -->

	<!-- top navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto topnav">
				<?php

					// top navigation consists of homepage and its visible children
				$homepage = $pages->get('/'); 
				$children = $homepage->children();

					// make 'home' the first item in the navigation
				$children->prepend($homepage); 

					// render an <li> for each top navigation item
				renderChild($children, $page);
				?>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle link-custom" style="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Mapa do site
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">

						<?php 

						$maxDepth = 4; 
						renderNavTree($pages->get('/'), $maxDepth, 0);
						// see the _init.php for the renderNavTree function

						?>
					</div>
				</li>
				<?php
				// output an "Edit" link if this page happens to be editable by the current user
				if($page->editable()) {
					echo "<li class='edit'><a href='$page->editUrl'>Edit</a></li>";
				} ?>
			</ul>

			<!-- search form -->
			<form class="form-inline my-2 my-lg-0" action='<?php echo $pages->get('template=search')->url; ?>' method='get'>
				<label for='search' class='visually-hidden'>Search:</label>
				<input class="form-control mr-sm-2" type='text' name='q' id='search' placeholder='Search' value='' />
				<button class="btn my-2 my-sm-0 btn-search" type="submit">Search</button>
			</form>
			<!-- search form -->
		</div>
	</nav>

	<main id='main'>

