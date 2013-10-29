    <?php /* Template Name: Events */
    get_header(); ?>
      <div class="row-fluid">
        <div class="span12"> 
          <br>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content() ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div><!--/ .span -->
      </div><!--/ .row -->
      <div class="row-fluid">
        <div class="span12">
          <!-- Start The Loop -->
          <?php query_posts('category_name=events'); ?>
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