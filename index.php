<?php get_header(); ?>
  <div id="heading">
    <div class="inner">
      <h1>Daily Announcments</h1>
    </div>
  </div><!--end heading-->
  <div id="wrapper" class="subpage-wrapper">
    <?php get_sidebar(); ?>
    <div class="featured-header three-col">
      <h2>Daily Announcments</h2>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris turpis dolor, mattis non accumsan nec, vulputate et nisl. Morbi sapien purus, ultrices quis lacinia vel, cursus eu turpis. Maecenas id tortor metus. Nunc et mauris nisl, ut blandit nis
        <p>
        <ul class="tag-cloud">
          <?php wp_list_categories('title_li='); ?>
        </ul>
    </div><!--end featured-->
    
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
        <?php the_excerpt(); ?>
      </div><!--end content-->
      <a class="read-more" href="<?php the_permalink(); ?>">Read More...</a>
    </div><!--end main-->
    
    <!--end the loop-->
    <?php endwhile; ?>	
    <?php endif; ?>	
    
    <?php get_footer(); ?>