<?php 
// Call informations
include ('includes/config.php');

	// Current page
	$current_page = "Privileges";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language; ?>">
<head>

<!-- Metas -->
<meta http-equiv="Content-Type" content="text/html; <?php echo $charset; ?>" />
<meta name="description" content="<?php echo metaDescription($current_page); ?>" />
<meta name="keywords" content="<?php echo metaKeywords($current_page); ?>" />

<!-- Page Title -->
<title><?php echo $titlePage_Privileges; ?></title>

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
        <h2>Privileges</h2>
        <p class="tagline">Learn a little more about the Earned Privileges</p>
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
      
      <!-- Privileges Box START here -->
      <div class="box">
        <h2>Earned Privileges</h2>
        <h4>First three months residents are allowed</h4>
        <div class="widget">
          <ol>
            <li>(2) - 15 minute phone calls a week</li>
            <li>(1) - Visit at the campus. Visitors must be approved by Director</li>
            <li>To seek employment</li>
          </ol>
        </div>
        <h4>Months four through six residents are allowed</h4>
        <div class="widget">
          <ol>
            <li>(4) - 15 minute phone calls a week</li>
            <li>1 weekend or day pass for the quarter with Director's approval</li>
            <li>Can purchase a pre-approved movie by Director</li>
            <li>Can greet at church, pass out bulletins, and work parking lot</li>
          </ol>
        </div>
        <h4>Months seven through twelve residents are allowed</h4>
        <div class="widget">
          <ol>
            <li>Cell phones if desired, must be pre-approved by Director</li>
            <li>1 weekend or day pass/month with Director's approval</li>
            <li>Can be approved to teach a class</li>
            <li>Can be considered to be resident staff</li>
            <li>Can be an usher or on the prayer team</li>
            <li>Can be considered to purchase your own laptop</li>
            <li>Can be approved to purchase a personal DVD or CD player, I-Pod, MP3, or gaming system. Note: all DVD's and games must still be approved by Director before purchasing</li>
          </ol>
        </div>
        <h4>Months thirteen through eighteen</h4>
        <div class="widget">
          <ol>
            <li>No Changes</li>
          </ol>
        </div>
        <h4>Months nineteen through twenty-four residents are allowed</h4>
        <div class="widget">
          <ol>
            <li>To date</li>
            <li>Can have an automobile but use only for work purposes. Restrictions apply</li>
            <li>Should have an appropriate amount of money saved</li>
            <li>Should be active in some form of ministry</li>
          </ol>
        </div>
      </div>
      <!-- Privileges Box END here --> 
      
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
          <li>God's strength for those committing to come to stay true to their word.</li>
          <br />
          <li>For continued favor with God and man.</li>
          <br />
          <li>Wisdom for myself, family, and our Board of Directors as we lead the way for these men to follow.</li>
          <br />
          <li>Total and complete healing for Sheila.</li>
          <br />
          <li>For more faithful monthly supporters, i.e. churches, businesses, and individuals.</li>
          <br />
        </ul>
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
