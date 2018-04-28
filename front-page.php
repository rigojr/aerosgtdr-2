<?php get_header(); ?>

	<div class="wrap">
		<div class="row first-view-info">
			<div class="col-sm-6 img-jugos">
				<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/todos.png" alt="Craft Juices"></p>
			</div>
			<div class="col-sm-6 info-jugos">
				<div class="card">
					<div class="card-body">
						<h2 class="card-title">ZUMÍSSIMO</h2>
						<p class="card-text">
    						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    					</p>
    					<div class="normal-btn">
    						<p><a class="btn btn-success openF">Leer Más</a></p>
    					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="natural">
			<h2>
				NATURAL Y SALUDABLE PARA TI
			</h2>
		</div>
	</div>

	<div class="wrap row about">
		<div class="col-sm-6 img-about">
			<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" alt="Sobre GTDR"></p>
		</div>
		<div class="col-sm-6">
			<div class="card">
				<div class="card-body">
					<h2 class="title-about">Sobre GruptechDR</h2>
					<p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
					</p>
					<div class="normal-btn">
						<p><a class="btn btn-success openF">Leer Más</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'subs-form' ); ?>
	<div class="bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/background-down.jpg');">
		<div class="wrap row soluciones">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-body">
						<h2 class="title-about">Soluciones de Empaque y Embalaje</h2>
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
						</p>
						<div class="normal-btn">
							<p><a class="btn btn-success openF">Leer Más</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 img-sol">
				<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/soluciones.jpg" alt="Soluciones Industriales"></p>
			</div>
		</div>
		<div class="clip">
			<h2>SOSTENIBILIDAD</h2>
		</div>
	</div>
</div>

<?php get_footer(); ?>