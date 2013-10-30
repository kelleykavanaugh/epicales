    <?php /* Template Name: Beers */
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
        <div id="center" class="padding">
            <?php query_posts('category_name=beers'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div id="anchors" class="brown padding white-bg"> 
            <a href="#<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
          </div><!--/anchors-->
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div><!--/center-->
      </div><!--/row-->

      <div class="row-fluid">
        <div class="span12">
          <!-- Start The Loop -->
          <?php query_posts('category_name=beers'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div id="content" class="white-bg">
                <div id="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></div>
                <?php the_content() ?>
              </div><!--/content-->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <!-- End the Loop -->
          </div><!--/ .span -->
        </div><!--/ .row -->

      <?php get_footer(); ?>