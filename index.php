<?php get_header(); ?>

  <article id="blog-page">
    <section class="container">
      <div class="row justify-content-around">
        <div class="col-md-8 d-flex align-items-center justify-content-center text-hodler">
          <h1 class="title-aviny-white">گاه نوشته ها</h1>
        </div>
      </div>
    </section>
    <svg class="bottom-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 220">
      <path
        d="M0,38.34a4013.76,4013.76,0,0,0,531,2.78C777.15,26.24,803.41,2.18,994,3c248.57,1.1,315.26,42.51,558,40A2109,2109,0,0,0,1920,6.74V148H0Z"
        fill="#fcb9b2" />
      <path
        d="M1,88.07a3931,3931,0,0,0,531,2.84C778.15,75.72,804.41,51.16,995,52c248.57,1.12,315.26,43.39,558,40.79a2068.43,2068.43,0,0,0,368-37V200H1Z"
        fill="#fee7dd" />
      <path
        d="M1920,104.37V220H0V141.46c71.68,6.07,168.66,12,285.27,12,74.41,0,156.81-2.42,245.73-8.73C777.15,127.25,803.41,99,994,100c248.57,1.29,315.26,49.9,558,46.91A1808.29,1808.29,0,0,0,1920,104.37Z"
        fill="#fff" />
    </svg>
  </article>



  <article id="blog">
    <header>
      <section class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="title-aviny-red text-right d-none">آخرین مطالب</h1>
          </div>
        </div>
      </section>
    </header>

    <section class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="row">
            <?php if(have_posts()) { ?>
              <?php while(have_posts()): the_post();  ?>
            <div class="mb-5 col-md-4">
              <div class="blog-box">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/temp.jpg" alt="">
                <div class="text-right pr-2"><?php the_category(' / ')?></div>
                <a href="<?php the_permalink(); ?>">
                  <h2 class="title-aviny-red text-right pr-2 pt-2"><?php the_title() ?></h2>
                </a>
                <p><?php echo get_the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary read-more">ادامه</a>
              </div>
            </div>
            <?php endwhile; ?>
            <?php } ?>  


            <!-- <div class="col-md-12 mb-5" style="border: 1px solid red;">
              <h1 class="text-center">hello</h1>
            </div> -->

            <!-- <div class="mb-5 col-md-4">
              <div class="blog-box">
                <img class="img-fluid" src="img/temp.jpg" alt="">
                <a href="">
                  <h2 class="title-aviny-red text-right pr-2 pt-2">عنوان مطلب</h2>
                </a>
                <p>اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم
                  ایپسوم
                  شناخته می‌شوند. لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است</p>
              </div>
            </div>


            <div class="mb-5 col-md-4">
              <div class="blog-box">
                <img class="img-fluid" src="img/temp.jpg" alt="">
                <a href="">
                  <h2 class="title-aviny-red text-right pr-2 pt-2">عنوان مطلب</h2>
                </a>
                <p>اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم
                  ایپسوم
                  شناخته می‌شوند. لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است</p>
              </div>
            </div>


            <div class="mb-5 col-md-4">
              <div class="blog-box">
                <img class="img-fluid" src="img/temp.jpg" alt="">
                <a href="">
                  <h2 class="title-aviny-red text-right pr-2 pt-2">عنوان مطلب</h2>
                </a>
                <p>اگر شما یک طراح هستین و یا با طراحی های گرافیکی سروکار دارید به متن های برخورده اید که با نام لورم
                  ایپسوم
                  شناخته می‌شوند. لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) متنی ساختگی و بدون معنی است</p>
              </div>
            </div> -->

          </div>
        </div>
      </div>
    </section>
  </article>


<?php get_footer('custom'); ?>