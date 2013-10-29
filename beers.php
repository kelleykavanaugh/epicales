    <?php /* Template Name: Beers */
    get_header(); ?>
      <div class="row-fluid">
        <div class="span12"> 
          <br>
          <h1><?php the_title(); ?></h1>
        </div><!--/ .span -->
      </div><!--/ .row -->
      <div class="row-fluid">
        <div class="span12"> 
          <div id="beers-list">
            <?php query_posts('category_name=beers'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            <?php endwhile; ?>
            <?php endif; ?>
          </div><!--/beers-list-->
        </div><!--/ span-->
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