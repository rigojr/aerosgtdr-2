<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gruptech Dominican Republic | Jugos Orgánicos Naturales y Soluciones Industriales</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
</head>
<body>
	<div class="first-view" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/background-upper.jpg');">
		<header class="wrap">
			<div class="container supra-header">
				<div class="row">
					<div class="col-sm-6">
						<ul class="rrss nav">
							<li class="nav-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-logo.png" alt="Facebook"></a></li>
							<li class="nav-item"><a 	href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-logo.png" alt="Instagram"></a></li>
							<li class="nav-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-logo.png" alt="Linkedin"></a></li>
						</ul>
					</div>
					<div class="col-sm-6">
						<div class="supra-info">
							<ul class="nav justify-content-end">
								<li class="nav-item">
									<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-logo.png" alt="call us"><a href="tel:1-829-410-0286">(829) 410-0286</a></p>
								</li>
								<li>
									<a href="#">English</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container infra-header">
				<div class="row">
					<nav class="col-sm-5">
						<ul class="nav justify-content-end">
							<li class="nav-item">
								<a class="nav-link" href="#">CONTACTO</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/servicios">SERVICIOS</a>
							</li>
						</ul>
					</nav>
					<div class="col-sm-2 logo">
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="GTDR Logo" title="Gruptech Dominican Republic">
						</a></p>
					</div>
					<nav class="col-sm-5">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/sabores">SABORES</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/nosotros">NOSOTROS</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

<!-- 	
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
  </div> -->