<div class="container-fluid breadcrumb">
	<div class="col-sm-12 breadcrumb-name">
		<?php the_title( '<h1>', '</h1>' ); ?>

		<div class="container">
		    <div class="row">
		        <div class="col-md-12">
		            <div class="error-template">
		                <h1>
		                    Oops!
		                </h1>
		                <h2>
		                    404 Not Found
		                </h2>
		                <div class="error-details">
		                    Al parecer la página que estabas buscando no existe... O quizás es nuestro error
		                </div>
		                <div class="error-details">
		                    Cualquiera que sea el caso, te sugerimos que regreses o que nos contactes.
		                </div>
		                <br>
		                <div class="error-actions">
		                    <a class="btn btn-success openF" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg">
		                        Llévame de vuelta </a>
	                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg push">
	                        	Contáctanos </a>
		                <br>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>