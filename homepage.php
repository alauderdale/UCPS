<?php
 /*
 Template Name: Home
 */ ?>

<?php get_header(); ?>

  <div id="heading">
    <div class="slider">
      <ul id="slider3">

        <!--   start the loop-->
        <?php
         $args = array(
         	'tax_query' => array(
         			'relation' => 'OR',
         			array(
         				'taxonomy' => 'ssday',
         				'field' => 'featured',
         				'terms' => array( 12,5 )
         			),
         			array(
         				'taxonomy' => 'hsday',
         				'field' => 'featured',
         				'terms' => array( 12,5 )
         			)
         		)
         );
         $loop2 = new WP_Query( $args );
          ?>

        <?php while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
          <li>
              <div class="slider-featuredimg">
                <?php if ( has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php bloginfo('template_url'); ?>/images/slide2.png" alt="">
              </div><!--end featured img-->
                <?php endif; ?>
              <div class="caption-right">
                <h1><?php the_title(); ?></h1>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="slider-read-more">Read More</a>
              </div>
          </li>

       <!--   end the loop-->
        <?php endwhile;
           // Reset Post Data
           ?>
      </ul>
    </div><!--end slider-->
  </div><!--end heading-->
  <div id="wrapper">
    <div class="events">
      <div class="events-title">
        <h1>Upcoming</h1>
        <h2>Events</h2>
        <a href="http://localhost:8888/themes/ucps/?page_id=290">VIEW ALL <span class="arrow">></span></a>
      </div><!--end events title-->
       <?php
        echo EM_Events::output(
          array('orderby' => 'start_date',
                'limit' => '3',
                 'format' => '

                  <div class="event">
          <h3><a class="fancybox fancybox.ajax" href="#_EVENTURL">#_EVENTNAME</a></h3>
          <ul class="event-meta">
            <li>
            #D, #M #d, #Y
            </br>
             #_12HSTARTTIME -  #_12HENDTIME
            </li>
            <li>
            #_LOCATIONNAME
            </li>
          </ul>
      </div><!--end event-->



                '

            ) );
      ?>
    </div><!--end events-->
    <div class="clearfix"></div>
    <div class="home-announcments-header">
      <h2>Recent Announcments</h2>
    </div><!--end home announcments header-->
    <ul id="filters">
      <li><a href="#" class="active" data-filter="*">all</a></li>
      <li><a href="#" data-filter=".hsannouncement">High School</a></li>
      <li><a href="#" data-filter=".ssannouncement">Secondary School</a></li>
    </ul>
    <ul id="container" class="home-announcments">

      <!--   start the loop-->
      <?php
      $query = new WP_Query(
      array(
      'post_type' =>
        array( 'hsannouncement', 'ssannouncement'),
        'posts_per_page' => 18
       )
        );
       ?>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <li class="High-School <?php echo get_post_type( $post->ID ); ?>">
          <h6 class="announcment-date">POSTED ON <?php the_time('d'); ?> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?></h6>
          <div class="featured-img">
            <div class="slider-featuredimg">
              <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/images/screenshot.png" alt="">
              <?php endif; ?>
            </div><!--end slider featured img-->
          </div>
          <div class="announcment-content">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>">Read More</a>
          </div><!--end announcment content-->
        </li><!--end announcment-->

        <!--   end the loop-->
      <?php endwhile; ?>

    </ul>
  </div><!--end wrapper-->
<?php get_footer(); ?>