<?php

function kheilisadeh_theme_support(){
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
}

add_action( 'after_setup_theme', 'kheilisadeh_theme_support' );
