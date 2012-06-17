<?php /* Template Name: Secondary School Page
 */ ?>

<?php get_header(); ?>
  <div id="heading">
    <div class="inner">
      <h1>Secondary School</h1>
    </div>
  </div><!--end heading-->
  <div id="wrapper" class="subpage-wrapper">
    <?php get_sidebar('sssidebar'); ?>
    <div class="featured-header three-col">
      <h2><?php the_title(); ?></h2>
      
     <!-- featured img-->
      
     <?php if ( has_post_thumbnail()) : ?>
       <div class="page-featuredimg">
       	    <?php the_post_thumbnail(); ?>
        </div><!--end featured img-->
     <?php endif; ?>
     
    </div><!--end featured-->
    
    <div class="main three-col">
    
          <!--start the loop-->
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
      <div class="content">
        <?php the_content(); ?>
      </div><!--end content-->
    </div><!--end main-->
    
    <!--end the loop-->
    <?php endwhile; ?>	
    <?php endif; ?>	
    
    <?php get_footer(); ?>