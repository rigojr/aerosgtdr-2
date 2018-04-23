<div class="container-fluid breadcrumb" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/breadcrumb.jpg');">
	<div class="col-sm-12 breadcrumb-name">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</div>
	<?php dynamic_sidebar( 'whyus-submenu' ); ?>
</div>