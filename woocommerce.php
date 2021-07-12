<?php get_header(); ?>

<div class="temp-class" style="margin-top:200px;">

<?php if(have_posts()) { ?>
  <?php woocommerce_content(); ?>
<?php } ?>    

</div>

