<?php
/*
Template Name: High School Sports Page
*/
?>



<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
  <div id="heading" class="hs-heading">
    <div class="inner">
     <!-- daily announcment page content-->
     <h1>Elementary School</h1>
    </div>
  </div><!--end heading-->

  <div id="wrapper" class="subpage-wrapper">

  <?php get_sidebar('hssidebar'); ?>

  <div class="featured-header three-col hs-head">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endwhile; endif; ?>
    <!-- end page content-->
  </div><!--end featured-->

<!--start the loop-->
<?php
$loop = new WP_Query( array( 'post_type' => 'hs_sports', 'posts_per_page' => 50 ) );
 ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="main three-col">
      <div class="sport">
        <?php if ( has_post_thumbnail()) : ?>
          <div class="sports-featuredimg">
            <?php the_post_thumbnail(); ?>
          </div><!--end featured img-->
        <?php endif; ?>
        <div class="sport-content">
          <h2>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
            <div class="content">
              <?php the_excerpt(); ?>
            </div>
             <a class="read-more" href="<?php the_permalink(); ?>">More Info</a>
        </div>
      </div>
    </div><!--end main-->

<!--end the loop-->
<?php endwhile; ?>

<?php get_footer(); ?>