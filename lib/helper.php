<?php
function kheilisadeh_meta_info(){
  printf(esc_html__( 'تاریخ: %s', 'kheilisadeh' ),
    '<time datetime="'.esc_attr(get_the_date('c')).'"> '.esc_html(get_the_date('l, F j, y')).' </time>'
  );

  printf(esc_html__( 'نویسنده: %s', 'kheilisadeh' ),
    '<a href=" '.esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )).' "> '.esc_html(get_the_author()).' </a>'
  );
}
