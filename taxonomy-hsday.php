  
<?php get_header(); ?>
   <div id="heading">
     <div class="inner">
     <!-- daily announcment page content-->

     
       <h1>High School</h1>
     </div>
   </div><!--end heading-->
   <div id="wrapper" class="subpage-wrapper">
     <?php get_sidebar('hssidebar'); ?>
     <div class="featured-header three-col">
       <h2>Announcments</h2>
       
        <p>
        Browsing Announcments in <span class="single-cat-title"><?php single_cat_title(); ?></span>
        <p>

      <!-- end page content-->
     
       <ul class="tag-cloud">
         <?php 
         wp_tag_cloud( array( 'taxonomy' => 'hsday', format => 'list', largest => 10, smallest => 10 ) );
          ?>
       </ul>
     </div><!--end featured-->
     
           <!--start the loop-->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
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
         
         <!--post categories-->
           <?php the_terms( $post->ID, 'hsday', '<li class="category">', ' ', '</li>' ); ?>
 
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