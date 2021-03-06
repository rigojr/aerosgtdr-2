<?php /* Template Name: about-custom*/ ?>

<?php get_header(); ?>

<?php get_template_part( 'breadcrumb' ); ?>

<div class="wrap row about">
		<div class="col-sm-4 img-about">
			<p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" alt="Sobre GTDR" title="Sobre GTDR"></p>
		</div>
		<div class="col-sm-8">
			<div class="card first-cardbody">
				<div class="card-body">
					<div class="card-text not-round">
						<p> <span class="title-about">Gruptech Dominican Republic</span> es una empresa fundada en octubre de 2017 enofocada en elaborar, diseñar y fabricar jugos de alta calidad con excelente valor nutricional a base de frutas para toda la comunidad Dominicana.</p>
						<p>
							En GruptechDR también ofrecemos diversos servicios especializados para la industria Dominicana.
						</p>
						<div class="normal-btn">
    						<p><a class="btn btn-success" href="<?php echo esc_url( home_url( '/' ) ); ?>/servicios">Servicios para la Industria Dominicana</a></p>
    					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="card second-cardbody">
				<div class="card-body">
					<div class="card-text">
						<p>Nuestra misión es promover el consumo combinado de frutas y vegetales, aportando beneficios para la salud. Respetar el medio ambiente y elaborar productos de alta calidad, brindando  confianza a los consumidores.</p>
						<p><b>Gracias a la constante innovación de nuestros ejecutivos</b> y a pesar de ser una empresa joven, tenemos planeado incursionar  con la ayuda de nuestra empresa matriz Gruptech International, Inc., tener presencia en países como México, Guatemala, Honduras, El Salvador, Costa Rica, Nicaragua, Panamá, Colombia, Perú, Ecuador, Chile, Argentina, Brasil, República Dominicana, Puerto Rico, Trinidad y Tobago y Guyana, mediante inversion directa o a través de socios, franquicias y distribuidores.</p>
					</div>
				</div>
			</div>
</div>
<div class="natural natural-serv">
	<h1 class="cd-headline push">
	<span class="cd-words-wrapper">
		<b class="is-visible">Trabajo en Equipo</b>
		<b class="is-hidden">Compromiso</b>
		<b class="is-hidden">Responsabilidad</b>
		<b class="is-hidden">Respeto</b>
		<b class="is-hidden">Honestidad</b>
		<b class="is-hidden">Inclusión</b>
		<b class="is-hidden">Pasión</b>
		<b class="is-hidden">Motivación</b>
		<b class="is-hidden">Sostenibilidad</b>
	</span>
	</h1>
</div>
</div>
<?php get_template_part( 'subs-form' ); ?>

<div class="wrap row about">
		<div class="col-sm-12 overflow">
			<h2 class="title-about" style="text-align: center;">
				Soluciones para la Industria Dominicana
			</h2>
			<p>
				Más allá de la fabricación y elaboración de jugos naturales, Gruptech Dominican Republic pone a la disposición de la industria Dominicana servicios de <b>suministros y consumibles</b>, <b>integración de líneas de producción completas</b>, <b>manejo de materiales</b>, <b>ventas de maquinarias</b> y más...
			</p>
		</div>
		<div class="normal-btn btn-serv">
			<p>
				<a class="btn btn-success" href="<?php echo esc_url( home_url( '/' ) ); ?>/servicios">Leer Más</a>
			</p>
		</div>
</div>

<?php get_footer(); ?>