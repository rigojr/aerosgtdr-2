<?php /* Template Name: services-custom*/ ?>

<?php get_header(); ?>

<?php get_template_part( 'breadcrumb' ); ?>

<div class="title-custom">
	<h2>Soluciones para la Industria Dominicana</h2>
</div>
<div class="wrap">
	<div class="row">
		<div class="col-sm-6 left-info-serv">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pellentesque facilisis tortor in rhoncus. Donec justo mi, euismod at fermentum ut, consequat sit amet sapien. Donec sed mollis quam. Phasellus rhoncus mollis faucibus. Ut arcu lectus, suscipit ut nunc in, semper congue mi. Vivamus consectetur, odio cursus tincidunt tincidunt, est augue pretium elit, sed pretium erat sapien dictum est. Etiam ultricies venenatis tristique.
			</p>
			<p>
				Nulla eleifend pellentesque orci in consequat. Nam a gravida neque. Aliquam aliquam ipsum vitae euismod tempus. Donec id turpis rutrum, sollicitudin magna et, gravida elit. Duis at sem ex. Quisque ut rhoncus lectus. Aliquam ut sem ipsum. Etiam luctus sagittis ante, venenatis tincidunt augue finibus sit amet. Curabitur non aliquet erat, in scelerisque neque. Cras enim urna, lacinia vitae tempor at, aliquet eu purus. In pharetra velit nec gravida vehicula. Quisque eget nisi ornare, suscipit erat nec, convallis dolor. Cras massa est, interdum ut rhoncus sit amet, vulputate a erat.
			</p>
		</div>
		<div class="col-sm-6 right-info-serv">
			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
				<li>Vestibulum pellentesque facilisis tortor in rhoncus.</li>
				<li><b>Sed pretium erat sapien dictum est.</b></li>
				<li>Cras enim urna, lacinia vitae tempor at, aliquet eu purus.</li>
				<li>Quisque eget nisi ornare, suscipit erat nec, convallis dolor.</li>
			</ul>
		</div>
	</div>
	<div class="row img-serv">
		<div class="col-sm-4">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/industria-3.jpg" alt="Sobre GTDR">
		</div>
		<div class="col-sm-4">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/industria-2.jpg" alt="Sobre GTDR">
		</div>
		<div class="col-sm-4">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/industria-1.jpg" alt="Sobre GTDR">
		</div>
	</div>
	<div class="normal-btn btn-serv">
		<p><a class="btn btn-success openF">Contacto</a></p>
	</div>
</div>

<?php get_footer(); ?>