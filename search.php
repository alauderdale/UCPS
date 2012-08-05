<?php get_header(); ?>
  <div id="heading">
    <div class="inner">
      <h1>Search UCPS</h1>
    </div>
  </div><!--end heading-->
  <div id="wrapper" class="subpage-wrapper">
    <div class="featured-header full">
      <h2>Your results</h2>
        <p>
        showing search results for <span class="single-cat-title">"<?php the_search_query(); ?>"</span>
        <p>
    </div><!--end featured-->

          <!--start the loop-->
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

    <div class="main full">
      <h2>
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <div class="content">
        <?php the_excerpt(); ?>
      </div><!--end content-->
      <a class="read-more" href="<?php the_permalink(); ?>">View</a>
    </div><!--end main-->

    <!--end the loop-->
    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>