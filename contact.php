    <?php /*Template Name: Contact */
    get_header(); ?>
      <div class="row-fluid">
        <div class="span12">
          <div id="content">
            <!-- Start The Loop -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content() ?>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <!-- End the Loop -->
          </div><!--/content-->
          </div><!--/ .span -->
        </div><!--/ .row -->
      <?php get_footer(); ?>