<?php /* Page 404*/ ?>

<?php get_header(); ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    Looks like the page you requested doesn't exist... or maybe it was our mistake.
                </div>
                <div class="error-details">
                    Whatever the case may be, we suggest you to go back.
                </div>
                <br>
                <div class="error-actions">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Take Me Home </a>
                <br>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>