<?php
/*
Template Name: Events
 */
?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php get_header(); ?>
  <div id="heading" class="event-heading">
    <div class="inner">
      <h1>Upcoming Events</h1>
    </div>
  </div><!--end heading-->
  <div id="wrapper" class="subpage-wrapper">

    <?php get_sidebar('eventssidebar'); ?>

    <div class="featured-header three-col hs-head">
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
<?php endwhile; endif; ?>
    <!-- end page content-->
    </div><!--end featured-->
    <div class="events-list">
      <?php
        echo EM_Events::output(
          array('orderby' => 'start_date,start_time,name',
            'format' => '

            <div class="event-main">
        <div class="event-date">
          <span class="event-mon">
           #M
          </span>
          <br/>
          <span class="event-day">
            #d
          </span>
        </div>
        <h3><a class="fancybox fancybox.ajax" href="#_EVENTURL">#_EVENTNAME</a></h3>
        <ul class="event-meta">
          <li class="event-time">
          #_12HSTARTTIME -  #_12HENDTIME
          </li>
          <li class="event-location">
          #_LOCATIONNAME</br>
          #_LOCATIONADDRESS</br>
          #_LOCATIONTOWN, #_LOCATIONSTATE
          </li>
        </ul>
      </div><!--end event main-->


            '
            ) );

      ?>
    </div><!--end event list-->
<?php get_footer(); ?>