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
     <?php get_sidebar('sssidebar'); ?>
     <div class="featured-header three-col">
       <h2>K-12 News</h2>
       
        <?php the_content(); ?>
      <?php endwhile; endif; ?>
      <!-- end page content-->
     
       <ul class="tag-cloud">
         <?php 
         wp_tag_cloud( array( 'taxonomy' => 'ssday', format => 'list', largest => 10, smallest => 10 ) );
          ?>
       </ul>
     </div><!--end featured-->
     
           <!--start the loop-->
           <?php
            $loop = new WP_Query( array( 'post_type' => 'ssannouncement', 'posts_per_page' => 50 ) );
             ?>
           <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
           
     <div class="main three-col">
       <?php if ( has_post_thumbnail()) : ?>
         <div class="post-featuredimg-head">
         	    <?php the_post_thumbnail(); ?>
          </div><!--end featured img-->
       <?php endif; ?>
       <h2 style="min-height: 99px;">
         <a href="<?php the_permalink(); ?>">
           <?php the_title(); ?>
         </a>
       </h2>
       <ul class="post-meta clearfix">
         <li class="date">
           <?php the_time('d'); ?> <span><?php the_time('M'); ?> </span><span><?php the_time('Y'); ?>
         </li>
         
         <!--post categories-->
           <?php the_terms( $post->ID, 'ssday', '<li class="category">', ' ', '</li>' ); ?>
 
       </ul><!--end post meta-->
       <div class="content">
         <?php the_excerpt(); ?>
       </div><!--end content-->
       <a class="read-more" href="<?php the_permalink(); ?>">Read More...</a>
     </div><!--end main-->
     
     <!--end the loop-->
     <?php endwhile; ?>	
     
     <?php get_footer(); ?>