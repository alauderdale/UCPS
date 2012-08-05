<?php get_header(); ?>

  <div id="heading" class="ss-heading">
    <div class="inner">
     <!-- daily announcment page content-->
     <h1>Secondary School</h1>
    </div>
  </div><!--end heading-->

  <div id="wrapper" class="subpage-wrapper">

  <?php get_sidebar('sssidebar'); ?>


  <!--start the loop-->
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

    <div class="main three-col">
      <div class="sport">
        <?php if ( has_post_thumbnail()) : ?>
          <div class="sports-featuredimg">
            <?php the_post_thumbnail(); ?>
          </div><!--end featured img-->
        <?php endif; ?>
        <div class="sport-content">
          <h2>
              <?php the_title(); ?>
          </h2>
            <div class="sport-info clearfix">
            <?php the_meta(); ?>
            </div>
            <div class="content">
              <?php the_excerpt(); ?>
            </div>
        </div>
      </div>
    </div><!--end main-->

  <!--end the loop-->
  <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>