<?php /* Template Name: Home
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
       				'terms' => array( 19 )
       			),
       			array(
       				'taxonomy' => 'hsday',
       				'field' => 'featured',
       				'terms' => array( 19 )
       			)
       		)
       );
       $loop = new WP_Query( $args );
        ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
       <li>
        <?php if ( has_post_thumbnail()) : ?>
          <div class="slider-featuredimg">
          	    <?php the_post_thumbnail(); ?>
           </div><!--end featured img-->
         <?php else : ?>
         <img src="<?php bloginfo('template_url'); ?>/images/slide2.png" alt="">

        <?php endif; ?>
        <div class="caption-right">
         <h1><?php the_title(); ?></h1>
         <?php the_excerpt(); ?>
         <a href="<?php the_permalink(); ?>" class="slider-read-more">Read More</a>
        </div>
       </li>
       
     <!--   end the loop-->
         <?php endwhile; ?>	
     
        </ul>
    </div><!--end slider-->
  </div><!--end heading-->
  <div id="wrapper">
    <div class="events">
      <div class="events-title">
        <h1>Upcoming</h1>
        <h2>Events</h2>
        <a href="#">VIEW ALL <span class="arrow">></span></a>
      </div><!--end events title-->
      <div class="event">
          <h3><a href="#">I'm a really long event title hey isn't that just fantastic?</a></h3>
          <ul class="event-meta">
            <li>
            Tue., May 8, 2012, 6:00pm
            - 7:00pm
            </li>
            <li>
            UCPS gym
            </li>
          </ul>
      </div><!--end event-->
      <div class="event">
          <h3><a href="#">Boys Basketball Game</a></h3>
          <ul class="event-meta">
            <li>
            Tue., May 8, 2012, 6:00pm
            - 7:00pm
            </li>
            <li>
            UCPS gym
            </li>
          </ul>
      </div><!--end event-->
      <div class="event">
          <h3><a href="#">Boys Basketball Game</a></h3>
          <ul class="event-meta">
            <li>
            Tue., May 8, 2012, 6:00pm
            - 7:00pm
            </li>
            <li>
            UCPS gym
            </li>
          </ul>
      </div><!--end event-->
    </div><!--end events-->
    <div class="clearfix"></div>
    <div class="home-announcments-header">
      <h2>Daily Announcments</h2>
    </div><!--end home announcments header-->
    <ul id="filters">
      <li><a href="#" class="active" data-filter="*">all</a></li>
      <li><a href="#" data-filter=".Math">Math</a></li>
      <li><a href="#" data-filter=".science">Science</a></li>
      <li><a href="#" data-filter=".school">School</a></li>
      <li><a href="#" data-filter=".art">Art</a></li>
    </ul>
    <ul id="container" class="home-announcments">
      <li class="element Math school">
        <h6 class="announcment-date">POSTED ON APR. 7th 2012</h6>
        <div class="featured-img">
          <img src="<?php bloginfo('template_url'); ?>/images/featured-img2.png">
        </div>
        <div class="announcment-content">
          <h1><a href="#">Math</a></h1>
          <h6>in <a href="#">high school</a></h6>
          <p>Etiam adipiscing aliquet turpis, tempus blandit orci aliquam eu. In mattis vestibulum ligula at tempor. Nulla sit amet tellus et lorem pharetra sagittis. Morbi fermentum tincidunt viverra. Maecenas ac...</p>
          <a href="#">Read More</a>
        </div>
      </li><!--end announcment-->
      <li class="element science">
        <h6 class="announcment-date">POSTED ON APR. 7th 2012</h6>
        <div class="featured-img">
          <img src="http://placekitten.com/g/200/200">
        </div>
        <div class="announcment-content">
          <h1><a href="#">Science</a></h1>
          <h6>in <a href="#">high school</a></h6>
          <p>Etiam adipiscing aliquet turpis, tempus blandit orci aliquam eu. In mattis vestibulum ligula at tempor. Nulla sit amet tellus et lorem pharetra sagittis.</p>
          <a href="#">Read More</a>
        </div>
      </li><!--end announcment-->
      <li class="element art school">
        <h6 class="announcment-date">POSTED ON APR. 7th 2012</h6>
        <div class="announcment-content">
          <h1><a href="#">Art</a></h1>
          <h6>in <a href="#">high school</a></h6>
          <p>Etiam adipiscing aliquet turpis, tempus blandit orci aliquam eu. In mattis vestibulum ligula at tempor. Nulla sit amet tellus et lorem pharetra sagittis. </p>
          <a href="#">Read More</a>
        </div>
      </li><!--end announcment-->
      <li class="element art school">
        <h6 class="announcment-date">POSTED ON APR. 7th 2012</h6>
        <div class="featured-img">
          <img src="<?php bloginfo('template_url'); ?>/images/featured-img2.png">
        </div>
        <div class="announcment-content">
          <h1><a href="#">Temporary Employment Opportunity: Education & Leadership</a></h1>
          <h6>in <a href="#">high school</a></h6>
          <p>Etiam adipiscing aliquet turpis, tempus blandit orci aliquam eu. In mattis vestibulum ligula at tempor. Nulla sit amet tellus et lorem pharetra sagittis. </p>
          <a href="#">Read More</a>
        </div>
      </li><!--end announcment-->
      <li class="element art school">
        <h6 class="announcment-date">POSTED ON APR. 7th 2012</h6>
        <div class="featured-img">
          <img src="<?php bloginfo('template_url'); ?>/images/featured-img2.png">
        </div>
        <div class="announcment-content">
          <h1><a href="#">Art</a></h1>
          <h6>in <a href="#">high school</a></h6>
          <p>Etiam adipiscing aliquet turpis, tempus blandit orci aliquam eu. In mattis vestibulum ligula at tempor. Nulla sit amet tellus et lorem pharetra sagittis. </p>
          <a href="#">Read More</a>
        </div>
      </li><!--end announcment-->
    </ul>
  </div><!--end wrapper-->

<?php get_footer(); ?>