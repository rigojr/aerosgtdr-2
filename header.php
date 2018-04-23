<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gruptech Cloud Innovations</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400" rel="stylesheet">
</head>
<body>
		<div class="loader">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logogtci-cuadro.png" style="width: 10%" alt="Loading...">
          <div class="bar"></div>
    	</div>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-3 logo col-xs-12">
					<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logogtci.png" alt="GTCI Logo" title="Gruptech Cloud Innovations">
					</a></p>
				</div>
				<nav class="col-sm-9 navigation">
					<ul class="nav justify-content-center">
  						<li class="nav-item">
    						<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
  						</li>
  						<li class="nav-item">
    						<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/solutions">SOLUTIONS</a>
  						</li>
  						<li class="nav-item">
   							<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/news">NEWS</a>
  						</li>
  						<li class="nav-item">
    						<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/about">WHY US</a>
  						</li>
  						<li class="nav-item">
    						<a id="myBtnF" class="nav-link" href="#">CONTACT</a>
  						</li>
  						<li class="nav-item">
    						<a id="myBtnS" class="nav-link" href="#">SIGN UP</a>
  						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

  <div class="pos-f-t mobile-navigation">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h4 class="text-white">Main Menu</h4>
        <span class="text-muted">Call us on +1 602 331 4569
          <div class="rrssB">
            <a class="nav-link rs" href="https://www.facebook.com/Gruptech-Cloud-Innovations-162171117764577/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-logo.png" alt="facebook logo">
            </a>
            <a class="nav-link rs psh" href="https://www.instagram.com/gruptechci/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-logo.png" alt="instagram logo">
            </a>
        </div>
        </span>
        
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/solutions">SOLUTIONS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/news">NEWS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/about">WHY US</a>
          </li>
          <li class="nav-item">
            <a id="movF" class="nav-link" href="#">CONTACT</a>
          </li>
          <li class="nav-item">
            <a id="movS" class="nav-link" href="#">SIGN UP</a>
          </li>
        </ul>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>