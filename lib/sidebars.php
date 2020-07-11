<?php
function kheilisadeh_sidebar_widgets(){
  register_sidebar(array(
    'id' => 'primary-sidebar',
    'name' => esc_html__( 'سایدبار اصلی', 'kheilisadeh' ),
    'description' => esc_html__( 'نمایش سایدبار در صفحات سینگل', 'kheilisadeh' ),
    'before_widget' => '<div id="%1$s" class="%2$s card-header">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}
add_action( 'widgets_init', 'kheilisadeh_sidebar_widgets' );