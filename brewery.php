    <?php /* Template Name: Brewery */
    get_header(); ?>
      <div class="row-fluid">
        <div class="span12"> 
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content() ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div><!--/ .span -->
      </div><!--/ .row -->
      <div class="row-fluid">
            <?php query_posts('category_name=brewery'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="span3"> 
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="white-bg"><?php the_title(); ?></a>
        </div><!--/span-->
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
      </div><!--/row-->
      <div class="row-fluid">
        <div class="span12">
          <!-- Start The Loop -->
          <?php query_posts('category_name=brewery'); ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div id="content" class="border-bottom">
                <?php the_content() ?>
              </div><!--/content-->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <!-- End the Loop -->
          </div><!--/ .span -->
        </div><!--/ .row -->
      <?php get_footer(); ?>