                </div><!--/ content -->
            </div> <!-- /container-fluid -->

            <div class="container-fluid footer-bg">
                <div id="footer">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget') ) : ?>
                    <?php endif; ?>
                    <div class="row-fluid">
                        <div id="center" class="span12">
                            &copy; 2013 <strong><?php bloginfo('name'); ?>. All Rights Reserved.</strong>
                        </div><!--/ .span -->
                    </div><!--/ .row-fluid -->
                </div><!--/footer-->
            </div><!--/container-fluid-->

            <div class="container-fluid">    
                <div class="row-fluid">
                    <div class="span6 padding white">
                        <strong><a href="http://wordpress.org/">Wordpress</a></strong> Theme by <strong><a href="http://www.kelleykavanaugh.com/">Kelley Kavanaugh</a>.
                    </div><!--/span-->
                    <div class="span6 padding white">
                        <div class="pull-right">
                        Based on design by <a href="http://www.plexicoda.com/">Plexicoda</a></strong>.
                        </div><!--/pull-right-->
                    </div><!--/span-->
                </div><!--/row-fluid-->
            </div><!--container-->

        <?php wp_footer(); ?>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    </body>
</html>