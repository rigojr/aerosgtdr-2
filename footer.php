	<?php wp_footer(); ?>

	<footer>
		<div class="rrss">
			<ul class="nav justify-content-center">
  				<li class="nav-item">
    				<a class="nav-link active" href="https://www.instagram.com/gruptechci/" target="_blank">
    					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="facebook logo">
    				</a>
  				</li>
  				<li class="nav-item">
    				<a class="nav-link" href="https://www.facebook.com/Gruptech-Cloud-Innovations-162171117764577/" target="_blank">
    					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt="instagram logo">
    				</a>
  				</li>
			</ul>
		</div>
		<div class="copy">
			<p class="right">
				Copyright &copy; <?php echo date('Y'); ?> Gruptech Cloud Innovations LLC
			</p>
			<p class="author">
				Desing, Development & Management by <a href="https://aeros.io">Aeros</a>
			</p>
		</div>
	</footer>
	<?php get_template_part( 'form-inline' ); ?>
	<?php get_template_part( 'subs-inline' ); ?>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- JS BRIAN -->

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/load.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slide.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/clip.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/modal.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- JS RIGO -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-easy.js"></script>
</body>
</html>