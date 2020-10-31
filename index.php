<?php 
// Call informations
include ('includes/config.php');

	// Current page
	$current_page = "Home";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language; ?>">
<head>

<!-- Metas -->
<meta http-equiv="Content-Type" content="text/html; <?php echo $charset; ?>" />
<meta name="description" content="<?php echo metaDescription($current_page); ?>" />
<meta name="keywords" content="<?php echo metaKeywords($current_page); ?>" />

<!-- Page Title -->
<title><?php echo $titlePage_Home; ?></title>

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

<!-- Slider -->
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>

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

<body id="home-page">

<?php include('includes/header.php'); ?>

<!-- Slider START here -->
      <div id="slider">
        <!-- Strap-Line START here -->
        <div id="strap-line">
          <h2>"Helping Hurting People Heal" People Loving People,</h2>
          <h2>Loving God</h2>
        </div>
        <!-- Strap-Line END here -->
        <!-- Latest-Project START here -->
        <div id="latest-project">
          <div class="slidshow-wrap">
            <ul>
              <li><a href="#"><img src="images/slide1.jpg" alt="slide1" width="274px" height="150px" /></a></li>
              <li><a href="#"><img src="images/slide2.jpg" alt="slide1" width="274px" height="150px" /></a></li>
              <li><a href="#"><img src="images/slide3.jpg" alt="slide1" width="274px" height="150px" /></a></li>
            </ul>
          </div>
        </div>
        <!-- Latest-Project END here -->
        <!-- Buttons START here -->
        <div id="buttons"><a href="#" class="prev">prev</a><a href="#" class="next">next</a></div>
        <!-- Buttons END here -->
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
        
        <!-- Features START here -->
        <div class="box">
          <h2>Welcome to Castaway Ministries</h2>
        </div>
        <!-- Features END here --> 
        
        <!-- Who-We-Are Box START here -->
        
        <!-- Who-We-Are Box END here --> 
        <!-- Testimonial Box START here -->
        <div class="box">
          <p>As of august, Castaway ministries has moved out focus to working with Widows and Orphans. If you have any questions as to what services we provide, please contact us <a href="<?php echo $nav_contact ?>">here</a>.</p>
        <!-- Who-We-Are Box END here --> 
      </div>
      <!-- Main-Colum END here --> 
      
    </div>
    <!-- Container END here --> 
  </div>
  <!-- Content END here --> 
</div>
<!-- Site-Wrapper END here -->
 
<?php include('includes/footer.php'); ?>

</body>
</html>
