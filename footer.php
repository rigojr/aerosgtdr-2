
	<footer>
		<div class="row wrap">
			<div class="col-sm-4 rrss">
				<div class="row">
					<div class="col-sm-6">
						<p>
							Síguenos:
						</p>
					</div>
					<div class="col-sm-6">
						<ul class="rrss-footer nav">
							<li class="nav-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-logo.png" alt="Facebook"></a></li>
							<li class="nav-item"><a 	href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-logo.png" alt="Instagram"></a></li>
							<li class="nav-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-logo.png" alt="Linkedin"></a></li>
						</ul>
					</div>
				</div>
				<p class="autoria">
					Diseñado, Desarrollado & Gestionado por <a href="https://aeros.io">Aeros</a>
				</p>
			</div>
			<div class="col-sm-4 center">
				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="GTDR Logo" title="Gruptech Dominican Republic">
					</a>
				</p>
				<p class="copy">
					Copyright &copy; <?php echo date('Y'); ?> Gruptech Dominican Republic, SRL
				</p>
				<p class="craft">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/craft-logo.png" alt="GTDR Logo" title="Gruptech Dominican Republic">
				</p>
			</div>
			<div class="col-sm-4 navigation">
				<div class="row">
					<div class="col-sm-4">
						<ul>
							<li class="nav-item">
								<a class="nav-link" href="#">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Nosotros</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Sabores</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-8">
						<ul>
							<li class="nav-item">
								<a class="nav-link" href="#">Servicios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contacto</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Política de Privacidad</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php get_template_part( 'contact' ); ?>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- JS BRIAN -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/clip.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modal.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- JS RIGO -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-easy.js"></script>
    <?php wp_footer(); ?>
</body>
</html>