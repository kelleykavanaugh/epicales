    <?php /* Template Name: Beers */
    get_header(); ?>
      <div class="row-fluid">
        <div class="span12"> 
          <h1><?php the_title(); ?></h1>
        </div><!--/ .span -->
      </div><!--/ .row -->
      <div class="row-fluid">
            <?php query_posts('category_name=beers'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div id="anchors" class="robot-font white-bg"> 
            <a href="#<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </div><!--/span-->
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
      </div><!--/row-->
      <div class="row-fluid">
        <div class="span12">
          <!-- Start The Loop -->
          <?php query_posts('category_name=beers'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div id="content" class="white-bg">
                <h1><?php the_title(); ?></h1>
                <?php the_content() ?>
              </div><!--/content-->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <!-- End the Loop -->
          </div><!--/ .span -->
        </div><!--/ .row -->
      <?php get_footer(); ?>