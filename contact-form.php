<?php get_header(); ?>

<?php get_template_part( 'breadcrumb-normal' ); ?>

<div class="wrap-post">
	
	<?php if ( have_posts() ) : ?>
	
	<section class="container">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="row card wrap-single-post">
			<div class="cardbody">
				<div class="category-post">
					<?php echo get_the_category_list(); ?>
				</div>
				<div class="title-post">
					<h2>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
				</div>
				<div class="content-post row">
					<div class="img-post col-sm-6">
						<p>
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()){ the_post_thumbnail('list_articles_thumbs');} ?>
							</a>
						</p>
					</div>
					<div class="desc-post col-sm-6">
						<?php the_excerpt(); ?>
					</div>
				</div>
				<div class="content-post row">
					<div class="img-name col-sm-6">
						<h3>
							<i><?php echo get_the_post_thumbnail_caption() ?></i>
						</h3>
					</div>
					<div class="author-post col-sm-3">
						<p><time><i><?php the_time('j F, Y'); ?></i></time> by <b><?php the_author_posts_link() ?></b></p>
					</div>
					<div class="btn-read col-sm-3">
						<p class="call-contact-btn"><a class="btn btn-success" href="<?php the_permalink(); ?>">READ MORE</a></p>
					</div>
				</div>
				<div class="tags-post">
            		<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>            
				</div>
			</div>				
		
		</div>
		
		<?php endwhile; ?>
	
	<div class="pagination-posts row">
		<div class="col-sm-4 prev-pagination">
			<p>
				<?php previous_posts_link('< Back'); ?>
			</p>
		</div>
		<div class="col-sm-4 links-pagination">
				<?php echo get_the_posts_pagination( array( 'mid_size' => 10,)	); ?>
		</div>
		<div class="col-sm-4 next-pagination">
			<p>
				<?php next_posts_link('Onward >'); ?>
			</p>
		</div>
	</div>
	<?php else : ?>
	<h2 class="error-msg">I'm sorry, there arn't News or Events load.</h2>
	<?php endif; ?>

	</section>

	

</div>

<?php get_template_part( 'call-subs' ); ?>

<?php get_footer(); ?>