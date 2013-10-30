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
    <div class="container-header">
      <div class="row-fluid">
        <div class="span12"> 
          <div class="tasting pull-right">Tasting Room Open Tue-Sat 4-10pm</div>
        </div><!--/span-->
      </div><!--/row-->
<!-- NAVBAR -->
      <div class="navbar">
        <div class="navbar-inner navbar-inverse">
          <div class="blogtitle pull-left">
            <a href="<?php echo get_option('home'); ?>/" class="epic-ales-logo"></a>
          </div>
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav navlist pull-right">
            <?php wp_list_pages(array('title_li' => '', 'exclude' => 117)); ?>
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
          <div class="description"><?php bloginfo('description'); ?></div>
        </div><!--/span-->
      </div><!--/row-->  

    </div><!--/ container-header-->
    <div class="container-fluid">