<?php 
// Call informations
include ('includes/config.php');

	// Current page
	$current_page = "Vision";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language; ?>">
<head>

<!-- Metas -->
<meta http-equiv="Content-Type" content="text/html; <?php echo $charset; ?>" />
<meta name="description" content="<?php echo metaDescription($current_page); ?>" />
<meta name="keywords" content="<?php echo metaKeywords($current_page); ?>" />

<!-- Page Title -->
<title><?php echo $titlePage_Vision; ?></title>

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
        <h2>Vision</h2>
        <p class="tagline">Learn a little more about our vision</p>
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
      
      <!-- Our Vision Box START here -->
      <div class="box">
        <h2>Our Vision</h2>
        <h4>What Castaway Ministries will provide</h4>
        <div class="widget">
          <ol>
            <li>A totally Christian environment free from drugs, tobacco, alcohol, & pornography.</li>
            <li>A private bedroom in a dwelling with multiple capacity  (future), dorm setting presently.</li>
            <li>Free rent for 30 day introductory period depending on each individual.</li>
            <li>Help restore legal documents, i.e, driver's license, birth certificate, s.s. card, etc.</li>
            <li>Help with interviews, resumes, and job placement appropriate with skills.</li>
            <li>Improve job skills for better paying jobs.</li>
            <li>Transportation to probation office, jobs, store, gov't. buildings, etc.</li>
            <li>Nightly classes dealing with pertinent issues such as anger anhialation, family focus, axing addictions, financial freedom, joy on the job, conscious coping, etc.</li>
            <li>Dual signature banking accounts to control and budget finances.</li>
          </ol>
        </div>
        <h4>What you will provide for Castaway Ministries</h4>
        <div class="widget">
          <ol>
            <li>Random drug testing.</li>
            <li>Abide by all the rules and regulations, (see rules & regulations section).</li>
            <li>Treat staff personnel and residents with respect at all times.</li>
            <li>Be a team player always ready to lend a hand in every situation.</li>
            <li>Honesty and courtesy to yourself and others.</li>
            <li>Be gainfully employed after completion of the 30 day introductory  period.</li>
            <li>Pay rent to the ministry, $100.00 weekly, for housing after introductory period.</li>
            <li>Pay $25.00 weekly to the ministry for transportation after introductory period.</li>
            <li>Have a Christ like attitude with a do more than is required mentality.</li>
            <li>Seek to serve rather than to be served.</li>
            <li>Complete daily chores as assigned in a safe and cooperative fashion.</li>
          </ol>
        </div>
      </div>
      <!-- Our vision Box END here --> 
      
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
