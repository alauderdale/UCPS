<?php get_header(); ?>
  <div id="heading">
    <div class="inner">
      <h1>Daily Announcments</h1>
    </div>
  </div><!--end heading-->
  <div id="wrapper" class="subpage-wrapper">
    <?php get_sidebar(); ?>
    
          <!--start the loop-->
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
          
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
        <?php the_content(); ?>
      </div><!--end content-->

    </div><!--end main-->
    
    <!--end the loop-->
    <?php endwhile; ?>	
    <?php endif; ?>	
    
    <?php get_footer(); ?>