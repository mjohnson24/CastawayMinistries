<?php 
// Call informations
include ('includes/config.php');

	// Current page
	$current_page = "About";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language; ?>">
<head>

<!-- Metas -->
<meta http-equiv="Content-Type" content="text/html; <?php echo $charset; ?>" />
<meta name="description" content="<?php echo metaDescription($current_page); ?>" />
<meta name="keywords" content="<?php echo metaKeywords($current_page); ?>" />

<!-- Page Title -->
<title><?php echo $titlePage_About; ?></title>

<!-- Standerd Css -->
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />

<!-- Selected Color Scheme -->
<link rel="stylesheet" href="css/blue.css" type="text/css" />

<!-- jQuery -->
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="css/ie7.css">
<![endif]-->

<!-- Cufon -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/nevis.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		Cufon.replace('h1, h2, h3');
	});
</script>


<!-- Superfish -->
<link rel="stylesheet" type="text/css" href="css/superfish.css" />
<script language="javascript" type="text/javascript" src="js/hoverIntent.js"></script>
<script language="javascript" type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript"> 
    $(document).ready(function() { 
        $('ul.sf-menu').superfish({ 
            delay: 300  // one second delay on mouseout 
		}); 
    });  
</script>
</head>

<body id="sub-page">

<?php include('includes/header.php'); ?>

      <!-- Slider START here -->
      <div id="slider">
        <!-- Page-Name START here -->
        <div id="page-name">
          <h2>About Us</h2>
          <p class="tagline">Learn a little more about us</p>
        </div>
        <!-- Page-Name END here -->
      </div>
      <!-- Slider END here -->
    </div>
    <!-- Container END here -->
  </div>
  <!-- Header END here -->
  <!-- Content START here -->
  <div id="content">
    <!-- Container START here -->
    <div class="container">
      <!-- Main-Colum START here -->
      <div id="main-colum">
        <h2>About Castaway Ministries</h2>
        <p class="paraindent">It is the desire of the director and our staff to see you successful in life. Success has as many meanings as we have imaginations. I would like to agree with God and call success what He calls success. He is the only eternal being, He had no beginning and He has no end. Everything else will pass away but He and His own, will live forever. The Bible says, What will it profit a man if he gains the whole world and loses his own soul, (Mark 8:36). When the Pharisees asked Jesus what was the greatest commandment He responded with this statement, You shall love the Lord your God with all your heart, with all your soul, and with all your mind. This is the first and great commandment. And the second is like it, You shall love your neighbor as yourself, (Matthew 22:36-39).</p>
        <p class="paraindent">It is our desire and passion to get you to gain eternal life through the shed blood of Jesus Christ, the only cure for the sins of all mankind, and to lose the world and it's hold on you. We further want to see you love the Lord our God with all your heart, soul, and mind, and to love your neighbors as you would yourself. When you get to this place in your life, everything else will find it's place. It's really quite interesting how this happens. It is also Biblical for in Matthew 6:33 we find Jesus quoting these powerful verses, But seek first the kingdom of God and His righteousness, and all these things shall be added to you. The previous verse (32) said this, For your Heavenly Father knows that you need all these things.</p>
        <p class="paraindent">We will be a community of people exemplifying a loving family unit, being closely knit together on the principles of the Word of God. We will place God first in our lives, others second, and then ourselves. That's the only true source of joy.</p>
        <p>
        <b>J</b> esus first<br />
        <b>O</b> thers next<br />
        <b>Y</b> ourself last</p>
      </div>
      <!-- Main-Colum END here -->
      <!-- Sidebar START here -->
      <div id="sidebar">
      
       <div class="sb_header">
        	<h3>Sub Pages</h3>
        </div>
        <div class="widget">
        <!-- class="current" -->
            <ul>
              <?php If ($current_page=="Mission") { echo '<li class="current">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_mission ?>">Our Mission</a></li>
          	  <?php If ($current_page=="Vision") { echo '<li class="current">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_vision ?>">Our Vision</a></li>
              <?php If ($current_page=="Campus") { echo '<li class="current">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_campus ?>">The Campus</a></li>
              <?php If ($current_page=="Staff") { echo '<li class="current">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_staff ?>">The Staff</a></li>
            </ul>
         </div>
         
       <div class="sb_header" style="margin-top: 20px">
        	<h3>Prayer Points</h3>
        </div>
        <div class="widget">
            <ul>
            	<li>God's strength for those committing to come to stay true to their word.</li><br />
				<li>For continued favor with God and man.</li><br />
				<li>Wisdom for myself, family, and our Board of Directors as we lead the way for these men to follow.</li><br />
				<li>Total and complete healing for Sheila.</li><br />
				<li>For more faithful monthly supporters, i.e. churches, businesses, and individuals.</li><br />
            </ul>
        </div>
      </div>
      <!-- Sidebar START here -->
      <div class="clear"></div>
    </div>
    <!-- Container END here -->
  </div>
  <!-- Content END here -->
</div>
<!-- Site-Wrapper END here -->

<?php include('includes/footer.php'); ?>

</body>
</html>
