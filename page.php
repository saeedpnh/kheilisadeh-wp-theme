<?php get_header(); ?>

<div class="temp-class" style="margin-top:200px;">

<?php if(have_posts()) { ?>
  <?php while(have_posts()): the_post(); ?>
  <h2><?php the_title() ?></h2>
  <p><?php echo get_the_content() ?></p>
  <?php endwhile; ?>
<?php } ?>    

</div>

