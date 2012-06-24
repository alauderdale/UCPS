<?php get_header(); ?>
  <div id="heading" class="hs-heading">
    <div class="inner">
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
        <h2>
          <?php the_title(); ?>
        </h2>
        <ul class="post-meta clearfix">
          <li class="date">
            <?php the_time('d'); ?> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?>
          </li>

          <?php the_terms( $post->ID, 'hsday', '<li class="category">', ' ', '</li>' ); ?>

        </ul><!--end post meta-->
        <?php if ( has_post_thumbnail()) : ?>
          <div class="post-featuredimg">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
          </div><!--end featured img-->
        <?php endif; ?>
        <div class="content">
          <?php the_content(); ?>
        </div><!--end content-->

        <div class="pagination">
          <p class="prev"><?php previous_post_link('%link','«Previous Post'); ?> </p>
          <p class="next"> <?php next_post_link('%link','Next Post»'); ?> </p>
        </div>

        <div class="clearfix"></div>

      </div><!--end main-->

    <!--end the loop-->
    <?php endwhile; ?>
    <?php endif; ?>


    <?php get_footer(); ?>