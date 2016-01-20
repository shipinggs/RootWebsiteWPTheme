<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    
    
    <title><?php bloginfo('name'); ?></title>
    <?php wp_enqueue_script("jquery"); 

    $permalink = get_permalink($post->post_parent); ?>

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

  </head>

  <body <?php body_class(); ?>>
    

  <div class="site-content" style="margin-top: -24px; padding-bottom: 70px; background-color: #f7f7f7; text-align: center;">
      <div class="latest-issue-header" style="z-index:9999; background: #333; box-shadow: 0px 3px 5px 0px black; -moz-box-shadow: 0px 3px 5px 0px black; -webkit-box-shadow: 0px 3px 5px 0px black;">
        <p class="latest-issue-date" style="padding-top: 30px; padding-bottom:10px; color: #d9d9d9; font-family: Montserrat, sans-serif; letter-spacing:0px; font-weight:700; font-size: 18px; text-transform: uppercase;">Latest Issue<br> <?php the_time('F j, Y'); ?></p>
        <p style="padding-bottom: 30px;"><a class="btn-a" style="text-decoration: none; font-family: Montserrat, sans-serif; letter-spacing:1px; font-weight:400; font-size: 13px; color:#d9d9d9; background-color: transparent; padding: 6px 38px; border: 2px solid #d9d9d9; border-radius: 4px;" href="<?php echo $permalink; ?>">&lsaquo; Back &nbsp;</a></p>
      </div>

      <div class="latest-issue" style="max-width:100%; margin: auto; margin-top: -10px; z-index:-9999">


        <?php if (have_posts()) {
          while (have_posts()): the_post(); ?>
        
            <?php
            echo get_the_content(); ?>
          </div> <!--latest-issue-->

          <?php
          endwhile;
        } else {
            echo '<p>No content found</p>';
          } ?>
    <p style="padding-top: 10px;"><a style="text-decoration: none; font-family: Montserrat, sans-serif; letter-spacing:1px; font-weight:400; font-size: 13px; color:#f7f7f7; background-color: #555; padding: 8px 40px; border-radius: 4px;" href="<?php echo $permalink; ?>">&lsaquo; Back &nbsp;</a></p>
  </div>

</body>
</html>
