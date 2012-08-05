<?php get_header(); ?>
  <div id="heading">
    <div class="inner">
      <h1><?php the_title(); ?></h1>
    </div>
  </div><!--end heading-->
  <div id="wrapper" class="subpage-wrapper">

    <div class="main full">

          <!--start the loop-->
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
      <div class="content">
        <?php the_content(); ?>
      </div><!--end content-->
    </div><!--end main-->

    <!--end the loop-->
    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>