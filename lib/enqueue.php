<?php
function kheilisadeh_enqueue_asstes() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', '4.4.1', 'all' );
  wp_enqueue_style( 'animate', get_template_directory_uri(). '/css/animate.min.css', '3.7.2', 'all' );
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.4.1.min.js',false,'3.4.1', true );
  wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri(). '/js/bootstrap.bundle.min.js' , array('jquery'), '4.4.1', true );
  wp_enqueue_script( 'wow', get_template_directory_uri(). '/js/wow.min.js' , array(), '1.3.0', true );
  wp_enqueue_script( 'jquery-easing', get_template_directory_uri(). '/js/jquery.easing.1.3.js' , array(), '1.3.0', true );
  wp_enqueue_script( 'navbar', get_template_directory_uri(). '/js/navbar.js' , array(), '1.0.0', true );
  
  if(is_front_page()){
    wp_enqueue_style( 'front-page', get_template_directory_uri(). '/css/front-page.css', '1.0.0', 'all' );
    wp_enqueue_script( 'main', get_template_directory_uri(). '/js/main.js' , array(), '1.0.0', true );
  }
  
  if(is_page('about')){
    wp_enqueue_style( 'about-style', get_template_directory_uri(). '/css/about.css', '1.0.0', 'all' );
    wp_enqueue_script( 'circle-progress', get_template_directory_uri(). '/js/circle-progress.js' , array(), '1.0.0', true );
    wp_enqueue_script( 'about-js', get_template_directory_uri(). '/js/about.js' , array(), '1.0.0', true );
  }
  if(is_home('blog')){
    wp_enqueue_style('blog', get_template_directory_uri(). '/css/blog.css', '1.0.0', 'all');
  }
  if(is_single()){
    wp_enqueue_style( 'single', get_template_directory_uri(). '/css/single.css', '1.0.0', 'all' );
    wp_enqueue_script( 'about-js', get_template_directory_uri(). '/js/single.js' , array(), '1.0.0', true );
  }
  if(is_category()){
    wp_enqueue_style( 'category', get_template_directory_uri(). '/css/category.css', '1.0.0', 'all' );
  }
}
add_action( 'wp_enqueue_scripts' , 'kheilisadeh_enqueue_asstes' );