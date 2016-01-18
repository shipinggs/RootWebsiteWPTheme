<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    

		<title><?php bloginfo('name'); ?></title>
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>

		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Archivo+Narrow:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

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
		<section class="centrallogo">
			<div class="rootbigname">
				<p class="rootverybig">ROOT</p>
				<p class="sgmedium">SUTD Student Government</p>
			</div>

			<div class="centralbuttons">
				<a class="btn btnleft" href="<?php echo get_permalink(110); ?>">Upcoming</a>
				<a class="btn btnright" href="<?php echo get_permalink(81); ?>">Contact Us</a>
			</div>	
		</section>
		

		<footer class="frontpagefooter">
			<p class="fpfootercontent">
				<span class="organisationname">ROOT:SG</span><span>2016</span>
			</p>
		</footer>
			

		<div class="navbaranchortweak">
			<div id="navbaranchor"></div>
		</div>

<?php wp_footer(); ?>

<script type="text/javascript">
<!--
 var imlocation = "<?php bloginfo('stylesheet_directory'); ?>/images/homepage/";
 var currentdate = 0;
 var image_number = 0;
 function ImageArray (n) {
   this.length = n;
   for (var i =1; i <= n; i++) {
     this[i] = ' '
   }
 }
 image = new ImageArray(4)
 image[0] = 'background1.jpg'
 image[1] = 'background2.jpg'
 image[2] = 'background3.jpg'
 image[3] = 'background4.jpg'
 var rand = 60/image.length
 function randomimage() {
 	currentdate = new Date()
 	image_number = currentdate.getSeconds()
 	image_number = Math.floor(image_number/rand)
 	return(image[image_number])
 }
 document.write("<img class='bgM' src='" + imlocation + randomimage()+ "'>");
//-->
</script>

</body>
</html>