  <?php wp_head(); ?>
          <!--start the loop-->
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

    <div class="main three-col">
      <h2>
          <?php the_title(); ?>
      </h2>
      <div class="content">
        <?php the_content(); ?>
      </div><!--end content-->
      <?php if ( has_post_thumbnail()) : ?>
        <div class="post-featuredimg">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        </div><!--end featured img-->
      <?php endif; ?>
    </div><!--end main-->

    <!--end the loop-->
    <?php endwhile; ?>
    <?php endif; ?>
