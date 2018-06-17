
	<footer>
		<div class="row wrap">
			<div class="col-lg-4 rrss">
				<div class="row">
					<div class="col-lg-6 col-5">
						<p class="sigu-text">
							Síguenos:
						</p>
					</div>
					<div class="col-lg-6 col-7">
						<ul class="rrss-footer nav">
							<li class="nav-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-logo.png" alt="Facebook" title="Facebook GTDR"></a></li>
							<li class="nav-item"><a 	href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-logo.png" alt="Instagram" title="Instagram GTDR"></a></li>
							<li class="nav-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin-logo.png" alt="Linkedin" title="LinkedIn GTDR"></a></li>
						</ul>
					</div>
				</div>
				<p class="autoria">
					Diseñado, Desarrollado &amp; Gestionado por <a href="https://aeros.io">Aeros</a>
				</p>
			</div>
			<div class="col-lg-4 center">
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
			<div class="col-lg-4 navigation">
				<div class="row">
					<div class="col-lg-4">
						<ul>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/nosotros">Nosotros</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/sabores">Sabores</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-8">
						<ul>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>/servicios">Servicios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact" href="#">Contacto</a>
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
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/load.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- JS RIGO -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-easy.js"></script>
    <?php wp_footer(); ?>
</body>
</html>