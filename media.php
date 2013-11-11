    <?php /* Template Name: Media */
    get_header(); ?>

      <div class="row-fluid">
        <div class="span12"> 
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content() ?>
          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
        </div><!--/ .span -->
      </div><!--/ .row -->

      <div class="row-fluid">
        <div class="span12">
          <!-- Start The Loop -->
          <?php query_posts('category_name=media'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div id="content" class="white-bg margin-bottom">
                <div id="<?php the_title_attribute(); ?>"></div>
                <h1><?php the_title() ?></h1>
                <div id="center" class="border-bottom">
                  <?php the_date() ?><br>
                  <?php the_author() ?>
                </div>
                <?php the_content() ?>
              </div><!--/content-->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <!-- End the Loop -->
          </div><!--/ .span -->
        </div><!--/ .row -->

      <?php get_footer(); ?>