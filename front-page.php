<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!--Add the title of your typeform below-->
  <title><?php bloginfo('name'); ?></title>
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>

  <!--CSS styles that ensure your typeform takes up all the available screen space (DO NOT EDIT!)-->
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Archivo+Narrow:700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <style type="text/css">
    html{
      margin: 0;
      height: 100%;
      overflow: hidden;
    }
    iframe{
      position: absolute;
      left:0;
      right:0;
      bottom:0;
      top:0;
      border:0;
    }
  </style>


</head>
<body <?php body_class(); ?>>

<!--================== CUSTOMIZED FRONTPAGE HEADER ==================-->
    <header class="fpnavbar-head navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
          <nav role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="fpnavbar navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">ROOT</a>
              </div>


              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="fpnavbar collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="spacefillbesidebrand"></li>
                  <?php wp_nav_menu( array('menu' => 'Primary Menu Left', 'container' => '','items_wrap' => '%3$s' )); ?>

                </ul>



                <ul class="fpnavbar nav navbar-nav navbar-right">
                  <?php wp_nav_menu( array('menu' => 'Primary Menu Right', 'container' => '','items_wrap' => '%3$s' )); ?>
                </ul>  

              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        </div>
     </header>
    
    <!--===================================================================-->
  <iframe id="typeform-full" width="100%" height="100%" frameborder="0" src="https://rootsutd.typeform.com/to/iWrIY0"></iframe>
  <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/share.typeform.com/embed.js"></script>
  <?php wp_footer(); ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-72760836-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</html>