<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Share+Tech|Nothing+You+Could+Do|Fenix' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- font awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- /font awesome -->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
<body>
<div id="contain">
  <div id="wrap">
    <div class="container-fluid header-bg">
      <div class="row-fluid">
        <div class="span12"> 
          <div class="margin-bottom pull-right">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('tasting') ) : ?>
            <?php endif; ?>
          </div>
        </div><!--/span-->
      </div><!--/row-->

        <div>
          <a href="<?php echo get_option('home'); ?>/"><img src="<?php echo get_option('home'); ?>/wp-content/themes/epicales/images/epic-ales-logo.png"></a>
        </div>
<!-- NAVBAR -->
      <div class="navbar robot-font">
        <div class="navbar-inner navbar-inverse">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
            <?php wp_list_pages(array('title_li' => '', 'exclude' => 2)); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.navbar-inner -->
      </div><!--/.navbar" -->
<!-- END NAVBAR -->

      <div class="row-fluid">
        <div class="span12"> 
          <img src="<?php echo get_option('home'); ?>/wp-content/themes/epicales/images/line.png">
        </div><!--/span-->
      </div><!--/row-->
      <div class="row-fluid">
        <div class="span12"> 
          <div class="big cursive-font"><?php bloginfo('description'); ?></div>
        </div><!--/span-->
      </div><!--/row-->  

    </div><!--/ container-fluid-->
    <div class="container-fluid">