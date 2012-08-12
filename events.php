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
      <p>Filter Events:</p>
      <ul id="filters" class="event-filters">
        <li><a href="#" class="active" data-filter="*">All</a></li>
        <?php
          echo EM_Categories::output(
            array(
              'format' => '
              <li><a href="#" data-filter=".#_CATEGORYID">#_CATEGORYNAME</a></li>
              '
              ) );
        ?>
       </ul>
<?php endwhile; endif; ?>
    <!-- end page content-->
    </div><!--end featured-->
    <ul id="container" class="events-list">
      <?php
        echo EM_Events::output(
          array(
            'format' => '

            <li class="event-main #_CATEGORYID">
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
        <div class="event-category event-#_CATEGORYID">
          <h4>#_CATEGORYNAME</h4>
        </div>
      </li><!--end event main-->


            '
            ) );

      ?>
    </div><!--end event list-->
<?php get_footer(); ?>