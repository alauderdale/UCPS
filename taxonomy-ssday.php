<?php get_header(); ?>
  <div id="heading" class="ss-heading">
    <div class="inner">
      <h1>Secondary School</h1>
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
    <div class="featured-header three-col ss-head">
      <h2>News From The Secondary School</h2>
        <p>
          Browsing Announcments Tagged "<span class="single-cat-title"><?php single_cat_title(); ?></span>"
        </p>
      <ul class="tag-cloud">
        <?php
        wp_tag_cloud( array( 'taxonomy' => 'ssday', format => 'list', largest => 10, smallest => 10 ) );
        ?>
      </ul>
    </div><!--end featured-->

    <!--start the loop-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="main three-col">
        <?php if ( has_post_thumbnail()) : ?>
          <div class="post-featuredimg-head">
            <?php the_post_thumbnail(); ?>
          </div><!--end featured img-->
        <?php else : ?>
            <div class="post-featuredimg-head">
              <img src="<?php bloginfo('template_url'); ?>/images/ss-post-placeholder.png" alt="">
            </div>
        <?php endif; ?>

        <h2 class="index-title">
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
    <?php endif; ?>
<?php get_footer(); ?>