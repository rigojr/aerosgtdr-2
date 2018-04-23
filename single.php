<?php get_header(); ?>

<?php get_template_part( 'breadcrumb-normal' ); ?>

<div class="wrap-post-content">
	<?php if ( have_posts() ) : the_post(); ?>
  		<?php the_content(); ?>
	<?php endif; ?>
</div>

<?php get_template_part( 'call-subs' ); ?>

<?php get_footer(); ?>