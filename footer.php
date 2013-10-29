        </div><!--/ content -->
            </div> <!-- /container-fluid -->
                <div id="footer">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widget') ) : ?>
                    <?php endif; ?>
                    <div class="row-fluid">
                        <div class="span12">
                            <center>
                            <div class="copyright">&copy; 2013 <strong><?php bloginfo('name'); ?>. All Rights Reserved.</strong></div>
                            </center>
                        </div><!--/ .span -->
                    </div><!--/ .row-fluid -->
                </div><!--/footer-->
                <div class="under-footer">
                    <div class="row-fluid">
                        <div class="span6">
                            <center>
                            <strong><a href="http://wordpress.org/">Wordpress</a></strong> Theme by <strong><a href="http://www.kelleykavanaugh.com/">Kelley Kavanaugh</a>.
                            </center>
                        </div>
                        <div class="span6">
                            <center>
                            Based on design by <a href="http://www.plexicoda.com/">Plexicoda</a></strong>.
                            </center>
                        </div>
                </div><!--/under footer-->
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