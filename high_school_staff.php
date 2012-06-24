<?php
/*
Template Name: High School Staff List
*/
?>



<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
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

  <div class="featured-header three-col hs-head">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endwhile; endif; ?>
    <!-- end page content-->
  </div><!--end featured-->

<!--start the loop-->
<?php
$loop = new WP_Query( array( 'post_type' => 'hsstaff', 'posts_per_page' => 50 ) );
 ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

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
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
            <div class="staff-info clearfix">
            <?php the_meta(); ?>
            </div>
            <div class="content">
              <?php the_excerpt(); ?>
            </div>
             <a class="read-more" href="<?php the_permalink(); ?>">View Profile</a>
        </div>
      </div>
    </div><!--end main-->

<!--end the loop-->
<?php endwhile; ?>

<?php get_footer(); ?>