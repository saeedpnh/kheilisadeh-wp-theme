<?php get_header(); ?>


  <article id="single-title">
    <section class="container">
      <div class="row no-gutters">
        <?php if(have_posts()) { ?>
        <?php while(have_posts()): the_post(); ?>
        <div class="col-md-6">
           <?php if( has_post_thumbnail() ){ the_post_thumbnail('post-thumbnail',array('class' => 'img-fluid')); } ?>
        </div>
        <div class="col-md-6 justify-content-center d-flex align-items-center single__post--holder">
          <div class="">
            <h1 class="title-aviny-white single-title--main-title"><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </section>
  </article>

  <article id="single-post">
    <section class="container">
      <div class="row">

        <div class="col-md-8">
          <div class="single-post__content">
            <div class="single-post__meta">
              <span><?php kheilisadeh_meta_info(); ?></span>
            </div>
            <div class="single-post__content--brief p-4">
              <p class="font-italic"><?php echo get_the_excerpt(); ?></p>
            </div>
            <div class="single-post__content--text pt-3">
              <p><?php echo get_the_content() ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php }?>
        <?php get_sidebar(); ?>
      </div>
    </section>
  </article>

  <article id="author">

    <section class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
          <?php  if(have_posts() ) {?>
            <?php  while(have_posts()): the_post() ?>
            <div class="col-md-4 text-right">
              <div>
                <!-- <img class="img-fluid rounded-circle p-2" src="" alt=""> -->
                <?php
                 echo get_avatar( get_the_author_meta(), '180' ); 
                 ?>
              </div>
            </div>
            <div class="col-md-8 text-right order-md-first order-lg-first d-flex align-items-center">
              <div>
                <h5><?php echo get_the_author() ?></h5>
                <p><?php the_author_meta('description'); ?></p>
              </div>
            </div>

          </div>
          <?php  endwhile; ?>
        <?php } ?>
        </div>
      </div>
    </section>

  </article>


  <article id="comments">
    <header>
      <section class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3>نظرات</h3>
            <hr>
          </div>
        </div>
      </section>
    </header>

    <section class="container">
      <div class="row justify-content-end">
        <div class="col-md-8">
          <form action="">
            <div class="form-group text-right">
              <label for="name">نام</label>
              <input type="text" class="form-control" id="name" placeholder="نام">
            </div>
            <div class="form-group text-right">
              <label for="email">ایمیل</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
              <small id="emailHelp" class="form-text text-muted">ایمیل شما محفوظ می ماند</small>
            </div>
            <div class="form-group text-right">
              <label for="textArea">نظرتون</label>
              <textarea class="form-control text-right" name="" id="textArea" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-success">ارسال</button>
          </form>
        </div>
      </div>
    </section>

<?php get_footer('custom'); ?>