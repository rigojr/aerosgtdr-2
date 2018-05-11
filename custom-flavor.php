<?php /* Template Name: flavor-custom*/ ?>

<?php get_header(); ?>

<?php get_template_part( 'breadcrumb' ); ?>

<div class="wrap">
	<div class="row">
		<div class="col-sm-4 flavor">
			<h2 class="flavor-title">
				Jugos Concentrados a base de Frutas
			</h2>
			<p class="flavor-title" style="font-family: 'Indie Flower', cursive !important;">
				Craft Juice
			</p>
			<hr color="white">
			<a id="al"><div class="list-flavor active">Alcalinos</div></a>
			<a id="de"><div class="list-flavor">Desintoxicantes</div></a>
			<a id="an"><div class="list-flavor">Antioxidante y Refrescante</div></a>
			<a id="nu"><div class="list-flavor">Nutritivo</div></a>
		</div>
		<div class="col-sm-6 juices">
			<div id="j1" class="isVisible">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/red.png">
				<p>Son beneficiosas para lograr el equilibrio de los líquidos que componen nuestro cuerpo evitando múltiples disfunciones, desde problemas estomacales hasta la fatiga, la osteoporosis o las afecciones derivadas de un sistema inmunológico debilitado.</p>
			</div>
			<div id="j2" class="notVisible">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/green.png">
				<p>Estas bebidas permiten impulsar el organismo para que elimine las toxinas y desechos que se acumulan como consecuencia de la mala alimentación, la contaminación o el estilo de vida sedentario. Al eliminar las sustancias de desecho del cuerpo y limpiar el organismo, la desintoxicación ayuda a mejorar los sistemas del cuerpo para que trabajen adecuadamente.</p>
			</div>
			<div id="j3" class="notVisible">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/yellow.png">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div id="j4" class="notVisible">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/orange.png">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
	<div class="row bottom-flavor">
		<div class="col-sm-6">
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
		<div class="col-sm-6">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/todos.png">
		</div>
	</div>
</div>

<?php get_template_part( 'subs-form' ); ?>

<?php get_footer(); ?>