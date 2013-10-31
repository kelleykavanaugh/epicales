    <?php /* Template Name: Brewery */
    get_header(); ?>

      <div class="row-fluid">
        <div class="span12"> 
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div id="content">
          <?php the_content() ?>
          </div><!--/content-->
          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
        </div><!--/ .span -->
      </div><!--/ .row -->

      <div class="row-fluid">
        <div id="center" class="padding">
            <?php query_posts('category_name=brewery'); ?>
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
          <?php query_posts('category_name=brewery'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div id="content" class="border-bottom">
                <div id="<?php the_title_attribute(); ?>"></div>
                <?php the_content() ?>
              </div><!--/content-->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <!-- End the Loop -->
          </div><!--/ .span -->
        </div><!--/ .row -->

      <?php get_footer(); ?>