<?php get_header(); ?>

  <div id="heading" class="hs-heading">
    <div class="inner">
     <!-- daily announcment page content-->
     <h1>High School</h1>
     <div class="breadcrumbs">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
      </div>
    </div>
  </div><!--end heading-->

  <div id="wrapper" class="subpage-wrapper">

  <?php get_sidebar('hssidebar'); ?>


  <!--start the loop-->
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>

        <div class="main three-col">
          <div class="staff-mamber">
            <?php if ( has_post_thumbnail()) : ?>
              <div class="staff-featuredimg">
                <?php the_post_thumbnail(); ?>
              </div><!--end featured img-->
            <?php else : ?>
              <div class="staff-featuredimg">
                <img src="<?php bloginfo('template_url'); ?>/images/staff-placeholder.jpeg" alt="">
              </div>
            <?php endif; ?>
            <div class="staff-content">
              <h2>
                <?php the_title(); ?>
              </h2>
                <div class="staff-info">
                <?php the_meta(); ?>
                </div>
            </div>
            <div class="content staff-single">
              <?php the_content(); ?>
            </div>
          </div>
          <div class="pagination">
          <p class="prev"><?php previous_post_link('%link','«Previous'); ?> </p>
          <p class="next"> <?php next_post_link('%link','Next»'); ?> </p>
        </div>
        </div><!--end main-->

  <!--end the loop-->
  <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>