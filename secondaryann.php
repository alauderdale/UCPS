<?php /* Template Name: Secondary School Daily Announcments 
 */ ?>

<?php get_header(); ?>
  <div id="heading">
    <div class="inner">
    <!-- daily announcment page content-->
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    
      <h1><?php the_title(); ?></h1>
    </div>
  </div><!--end heading-->
  <div id="wrapper" class="subpage-wrapper">
    <?php get_sidebar(); ?>
    <div class="featured-header three-col">
      <h2>Daily Announcments</h2>
      
       <?php the_content(); ?>
     <?php endwhile; endif; ?>
     <!-- end page content-->
     
        <ul class="tag-cloud">
          <?php wp_list_categories('child_of=10&title_li='); ?>
        </ul>
    </div><!--end featured-->
    
          <!--start the loop-->
          <?php query_posts('cat=10&showposts=5'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          
    <div class="main three-col">
      <h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <ul class="post-meta clearfix">
        <li class="date">
          <?php the_time('d'); ?> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?>
        </li>
        <li class="category">
           <?php the_category(''); ?>
        </li>
      </ul><!--end post meta-->
      <?php if ( has_post_thumbnail()) : ?>
        <div class="post-featuredimg">
        	  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        	    <?php the_post_thumbnail(); ?>
        	  </a>
         </div><!--end featured img-->
      <?php endif; ?>
      <div class="content">
        <?php the_excerpt(); ?>
      </div><!--end content-->
      <a class="read-more" href="<?php the_permalink(); ?>">Read More...</a>
    </div><!--end main-->
    
    <!--end the loop-->
    <?php endwhile; ?>	
    <?php endif; ?>	
    
    <?php get_footer(); ?>