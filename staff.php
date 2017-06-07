<?php 
// Call informations
include ('includes/config.php');

	// Current page
	$current_page = "Staff";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language; ?>">
<head>

<!-- Metas -->
<meta http-equiv="Content-Type" content="text/html; <?php echo $charset; ?>" />
<meta name="description" content="<?php echo metaDescription($current_page); ?>" />
<meta name="keywords" content="<?php echo metaKeywords($current_page); ?>" />

<!-- Page Title -->
<title><?php echo $titlePage_Staff; ?></title>

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
    <h2>Staff</h2>
    <p class="tagline">Learn a little more about our staff</p>
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
      <!-- Staff START here -->
      <div class="services-post">
          <h3>Edward Smith</h3>
          <img src="images/edward_smith.jpg" alt="Edward Smith" class="services-img round" />
          <h4>Director</h4>
          <p>More about Mr. Smith coming soon.</p>
       </div>
      <!-- Staff END here --> 
      <!-- Staff START here -->
      <div class="services-post">
          <h3>Gary Cavalier</h3>
          <img src="images/director_gary_cavalier.gif" alt="Gary Cavalier" class="services-img round" />
          <h4>Executive Director</h4>
          <p>The vision came in 1998. After several frustrating years of trying to figure out how to begin and fulfill the vision it finally started happening; through prayer and listening to the still small voice of God would come the "how to" fulfill that vision. Then that voice again saying, "it is time". In July of 2006 we acquired some property and a building that once served as a church. With some minor changes we were able to open our doors and accept our first resident in May of 2007. In May of 2009 our first class graduated fulfilling a two year commitment and they continue to prosper in the community and in God. We give Him all the glory!!!</p>
       </div>
      <!-- Staff END here --> 
      
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
          <?php If ($current_page=="Mission") { echo '<li class="current">'; } else { echo '<li>'; } ?>
          <a href="<?php echo $nav_mission ?>">Our Mission</a>
          </li>
          <?php If ($current_page=="Vision") { echo '<li class="current">'; } else { echo '<li>'; } ?>
          <a href="<?php echo $nav_vision ?>">Our Vision</a>
          </li>
          <?php If ($current_page=="Staff") { echo '<li class="current">'; } else { echo '<li>'; } ?>
          <a href="<?php echo $nav_staff ?>">The Staff</a>
          </li>
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
