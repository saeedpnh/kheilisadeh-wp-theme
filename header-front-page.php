<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".main-nav" data-offset=110>
  <header class="main-header" id="top-header">
    <nav class="navbar navbar-expand-md navbar-light fixed-top main-nav">
      <div class="container">
        <a href="<?php echo esc_url(get_home_url()); ?>" class="navbar-brand">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-red.png" alt="خیلی ساده" height="50" width="50">
        </a>
        <form class="form-inline my-2 my-lg-0 d-md-block d-lg-block d-sm-none d-none">
          <input class="form-control mr-sm-2" type="search" placeholder="جستجو" aria-label="Search">
        </form>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar"
          aria-controls="main-navbar">
          <i class="navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#top-header" class="nav-link js-scroll-trigger">خانه</a></li>
            <li class="nav-item"><a href="#about" class="nav-link js-scroll-trigger">درباره من</a></li>
            <li class="nav-item"><a href="#skills" class="nav-link js-scroll-trigger">موضوع بندی</a></li>
            <li class="nav-item"><a href="#latest-post" class="nav-link js-scroll-trigger">وبلاگ</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
