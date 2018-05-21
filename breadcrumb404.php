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
		                    <p>Al parecer la página que estabas buscando no existe... O quizás es nuestro error.</p>
		                </div>
		                <div class="error-details">
		                    <p>Cualquiera que sea el caso, te sugerimos que regreses o que nos contactes.</p>
		                </div>
		                <div class="error-actions">
		                	<div class="normal-btn btn-serv special-404-btn">
								<p><a class="btn btn-success openF" href="#">Contacto</a></p>
							</div>
							<div class="normal-btn btn-serv special-404-btn">
								<p><a class="btn btn-success" href="<?php echo esc_url( home_url( '/inicio' ) ); ?>">Llévame de Vuelta</a></p>
							</div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>