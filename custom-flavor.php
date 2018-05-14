<?php /* Template Name: flavor-custom*/ ?>

<?php get_header(); ?>

<?php get_template_part( 'breadcrumb' ); ?>

<div class="wrap special-wrap container">
	<div class="row">
		<div class="col-sm-4 flavor">
			<h2 class="flavor-title">
				Jugos Concentrados a base de Frutas
			</h2>
			<p class="flavor-title" style="font-family: 'Indie Flower', cursive !important;">
				Craft Juice
			</p>
			<hr color="white">
			<a id="al"><p class="list-flavor activeF">Alcalinos</p></a>
			<a id="de"><p class="list-flavor">Desintoxicantes</p></a>
			<a id="an"><p class="list-flavor">Antioxidante y Refrescante</p></a>
			<a id="nu"><p class="list-flavor">Nutritivo</p></a>
		</div>
		<div class="col-sm-2">
			<p id="j1" class="text-w-img isVisible"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/red.png"></p>
			<p id="j2" class="text-w-img notVisible"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/green.png"></p>
			<p id="j3" class="text-w-img notVisible"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/yellow.png"></p>
			<p id="j4" class="text-w-img notVisible"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/orange.png"></p>
		</div>
		<div class="col-sm-6">
			<!-- ALCALINOS TEXTO -->
			<div class="card first-cardbody vCenter">
				<div class="card-body">
					<div class="card-text not-round">
						<p id="t1" class="isVisible">Son beneficiosas para lograr el equilibrio de los líquidos que componen nuestro cuerpo evitando múltiples disfunciones, desde problemas estomacales hasta la fatiga, la osteoporosis o las afecciones derivadas de un sistema inmunológico debilitado.</p>

						<!-- DESINTOXICANTES TEXTO -->
						<p id="t2" class="notVisible">Estas bebidas permiten impulsar el organismo para que elimine las toxinas y desechos que se acumulan como consecuencia de la mala alimentación, la contaminación o el estilo de vida sedentario. Al eliminar las sustancias de desecho del cuerpo y limpiar el organismo, la desintoxicación ayuda a mejorar los sistemas del cuerpo para que trabajen adecuadamente..</p>

						<!-- ANTIOXIDANTES TEXTO -->
						<p id="t3" class="notVisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						<!-- NUTRITIVO TEXTO -->
						<p id="t4" class="notVisible">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--DESCRIPCIÓN GENERAL DE SABORES -->
<div class="wrap bf">
	<div class="row bottom-flavor" style="margin-top: 2rem !important;">
		<div class="col-sm-6">
			<div class="card first-cardbody">
				<div class="card-body">
					<div class="card-text not-round">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-5">
			<p class="text-w-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/todos.png"></p>
		</div>
	</div>
</div>

<?php get_template_part( 'subs-form' ); ?>

<?php get_footer(); ?>