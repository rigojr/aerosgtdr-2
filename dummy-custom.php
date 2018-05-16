<?php /* Template Name: dummy-custom*/ ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gruptech Dominican Republic | Produccion de Jugos organicos naturales y Nuevas soluciones de empaque y embalaje para la industria Dominicana</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/dummy-styles.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div class="container-fluid supra-header">
  		<div class="row">
  			<div class="col-sm-8">
  				<div class="row info">
  						<p>
  							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy-imgs/location.png" alt="Location">
  							Dominican Republic
  						</p>
  						<p>
  							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy-imgs/email.png" alt="email">
  							gruptechdr_operat@gruptechdr.com
  						</p>
  						<p>
  							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy-imgs/phone.png" alt="phone">
  							+1 (829) 410-0286
  						</p>
  				</div>
  			</div>
  			<div class="col-sm-4">
  				<div class="row">
  					<div class="col-sm-12">
  						<p id="nice-info-1">
  							<b>Gruptech Dominican Republic, SRL</b>
  						</p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

  	<div class="container-fluid header">
  		<div class="row">
  			<div class="col-sm-12 nice-info-2">
  				<h1>
					Próximamente un producto de <span>calidad, natural y saludable para ti</span>
				</h1>
				<p>
					¿Quieres ser uno de los primeros en adquirirlo?
				</p>
  			</div>
  		</div>
  	</div>

	<div class="container-fluid wrap">
		<div class="row">
			<div class="col-sm-6">
<form action="" method="post">
	<div class="form-group">
    <label for="InputNombre">Nombre</label>
    <input type="text" class="form-control" id="InputNombre" name="InputNombre" required>
  </div>
  <div class="form-group">
    <label for="InputEmail1">Correo electrónico</label>
    <input type="email" class="form-control" id="InputEmail1" name="InputEmail1" aria-describedby="emailHelp" placeholder="your@email.here" required>
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con nadie.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Cometarios</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  <div class="form-group">
  	<div class="g-recaptcha" data-sitekey="6LfxYTwUAAAAADY6WQEGW9G1IlIO8QWCX9hRzTtp"></div>
  	</div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
			</div>
			<div class="col-sm-6 nice-img">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid " src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy-imgs/todos.png" alt="todos">
            </div>
            <div class="carousel-item ">
              <img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy-imgs/green.png" alt="verde">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy-imgs/orange.png" alt="naranja">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy-imgs/red.png" alt="rojo">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy-imgs/yellow.png" alt="amarillo">
            </div>
            <div class="carousel-item ">
              <img class="d-block img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy-imgs/jugitos.jpg" alt="zumissimo">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        </div>
			</div>
		</div>
	</div>
	<div class="nice-info-3">
		<h1>Nuestro sitio web está <span>en construcción</span></h1>
	</div>
	<footer class="container-fluid">
		<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy-imgs/logo.png" alt="Gruptech Dominican Republic"></p>
		<p>Copyright © 2018 Gruptech Dominican Republic, SRL</p>
		<p>Managed by <a href="https://www.linkedin.com/in/jose-salas">José Salas</a></p>
	</footer>
	<script type="text/javascript">
		var dir = window.location;
		if(dir == 'http://gruptechdr.com/index.html?FALSE')
			alert('Error')
		if(dir == 'http://gruptechdr.com/index.html?TRUE')
			alert('Successfully sent')
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>