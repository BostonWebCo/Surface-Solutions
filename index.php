<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('stylesheet_url'); ?>"/>
<?php $styledir = get_bloginfo('stylesheet_directory');?>
<?php wp_head(); ?>
</head>

<body>
<div id="wrapper">
	<div id="topline">
    	<div id="topleft"></div>
      	<div id="nav">
<?php wp_nav_menu(array( 'theme_location' => 'top-menu', 'depth' => '1')); ?>
<!--
          <ul>
              <li><a href="#" class="navlink">Home</a></li>
              <li><a href="#" class="navlink">Technologies</a></li>
              <li><a href="#" class="navlink">About Us</a></li>
              <li><a href="#" class="navlink">Drug Delivery</a></li>
              <li><a href="#" class="navlink">Resources</a></li>
              <li><a href="#" class="navlink">Contact Us</a></li>
          </ul>
-->
       </div>
       <div id="topright"></div>
    </div>
    
    <div id="bannerColor">
        <div id="bannerBG">
             <div id="bannerLeft"><img src="<?php echo $styledir; ?>/images/sslbannerLeft.jpg" width="504" height="313" alt="Surface Solutions" /></div>
        <div id="bannerRight"><img src="<?php echo $styledir; ?>/images/SSLBannerRight.jpg" width="533" height="313" alt="Surface Solutions" /></div>    
        </div>
    </div>
	<div id="mainContent">
    <div id="mainCol1">
	  <?php dynamic_sidebar(1); ?> 
        </div>
        <div id="mainCol2">
	 <?php while ( have_posts() ) : the_post() // Retrieve main content ?>
<?php if ( ! is_front_page() ) {
	echo "<h1>" . get_the_title() . "</h1>";
}
?>

 <?php the_content(); ?>
 <?php endwhile; ?>
        </div> <!-- END mainCol2 -->
        <div id="mainCol3">
	  <?php dynamic_sidebar(2); ?>
<div id="qualifications">
<img src="<?php echo $styledir; ?>/images/c2go.gif"><br>
<img src="<?php echo $styledir; ?>/images/qmed.gif"><br>
QMed Qualified Supplier
<img src="<?php echo $styledir; ?>/images/fda.gif"><br>
FDA Master Filed
</div>
        </div>
      </div>
     <div id="footerColor">   
    		<div id="footer"><p class="footerText">&copy; Copyright 2012, Surface Solutions Laboratories, Inc. All Rights Reserved. SURFACE SOLUTIONS LABORATORIES<br />
is a trademark of Surface Solutions Laboratories, Inc. registered in the United States Patent and Trademark Office.                 &nbsp;&nbsp;&nbsp;&nbsp;  Communication by:  Partridge Design  •  visual communications</p>                                                     
            
<?php wp_nav_menu(array( 'theme_location' => 'bottom-menu', 'depth' => '1')); ?>
<!--     <div class="menu">
	 <ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">Technologies</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Drug Delivery</a></li>
        <li><a href="#">Resources</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Site Map</a></li>
        <li><a href="#">Contact Us</a></li>
	</ul>
-->
</div></div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
