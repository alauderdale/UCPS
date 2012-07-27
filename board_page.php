<?php
/*
Template Name: UCPS Board Page
 */
?>

<?php get_header(); ?>
  <div id="heading" class="hs-heading">
    <div class="inner">
      <h1>Board</h1>
    </div>
  </div><!--end heading-->
  <div id="wrapper" class="subpage-wrapper">

    <?php get_sidebar('board'); ?>

    <div class="featured-header three-col hs-head">
      <h2><?php the_title(); ?></h2>
     <!-- featured img-->
      <?php if ( has_post_thumbnail()) : ?>
        <div class="page-featuredimg">
          <?php the_post_thumbnail(); ?>
        </div><!--end featured img-->
      <?php endif; ?>
    </div><!--end featured-->

    <div class="main three-col">
      <!--start the loop-->
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <div class="content">
          <?php the_content(); ?>
        </div><!--end content-->

      <!--end the loop-->
      <?php endwhile; ?>
      <?php endif; ?>
    </div><!--end main-->
<?php get_footer(); ?>