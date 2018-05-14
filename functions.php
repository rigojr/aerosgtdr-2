<?php 

function genesis_widgets() {

	register_sidebar( array(
		'name'          => 'Subs Form',
		'id'            => 'sub-form',
		'description'   => 'No desc',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Menu Widget Right',
		'id'            => 'menu-right',
		'description'   => 'No desc',
		'before_widget' => '<nav id="%1$s" class="menu-nav">',
		'after_widget'  => '</nav>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Contact Form',
		'id'            => 'form-contact',
		'description'   => 'No desc',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}

add_action( 'widgets_init', 'genesis_widgets' );

add_theme_support('post-thumbnails');

function my_post_queries( $query ) {
  // do not alter the query on wp-admin pages and only alter it if it's the main query
  if (!is_admin() && $query->is_main_query()){

    // alter the query for the home and category pages 

    if(is_home()){
      $query->set('posts_per_page', 3);
    }

    if(is_category()){
      $query->set('posts_per_page', 3);
    }

  }
}
add_action( 'pre_get_posts', 'my_post_queries' );

add_theme_support('post-thumbnails');
add_image_size('list_articles_thumbs',400,200,true);
add_image_size('article_thumb',500,400,true);

?>