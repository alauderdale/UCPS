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
          <?php if ( get_post_meta($post->ID, 'custom_text', true) ) : ?>
            <?php $meta = get_post_meta($post->ID, 'custom_text', true);?>
            <div class="act-events">
              <h3> Upcoming Events </h3>
              <ul class="activity-upcoming-events">
                <?php
                  echo EM_Events::output(
                    array(
                      'orderby' => 'start_date,start_time,name',
                      'tag' => $meta,
                      'format' => '
                        <li>
                        <a class="fancybox fancybox.ajax" href="#_EVENTURL">
                         #_EVENTNAME 
                        </a>
                           - #M #d, #Y #_12HSTARTTIME
                        </li>
                      '
                      ) );
                 ?>
              </ul>
            </div>
          <?php endif; ?>
          <div class="content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div><!--end main-->

  <!--end the loop-->
  <?php endwhile; ?>
  <?php endif; ?>

<?php get_footer(); ?>