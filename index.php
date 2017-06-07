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
          <blockquote>
            <p>WHAT GOD WILL DO FOR YOU WHEN YOU STAY THE COURSE</p>
          </blockquote>
        </div>
        <!-- Features END here --> 
        
        <!-- Who-We-Are Box START here -->
        <div class="box">
          <h4>Psalm 113:7-8</h4>
          <blockquote>
            <p>&ldquo;He raises the poor out of the dust, And lifts the needy out of the ash heap. That He may seat him with princes, With the princes of His people.&rdquo;</p>
          </blockquote>
        </div>
        <!-- Who-We-Are Box END here --> 
        <!-- Testimonial Box START here -->
        <div class="box">
          <h4>who we are ?</h4>
          <img src="images/who.jpg" alt="" class="round" />
          <p>Castaway Ministries is a God birthed vision into the heart of Gary Cavalier in the late 1990's to give men and women who are incarcerated, no matter the reason, a better chance to succeed in life when their sentence is over. It is not for everyone, only those who have a sincere desire to change their way of life, and who have no place to go when released from prison. It is not a place for those who are not serious about life. It is a place for those who want to become a better person and do their part to make this world a better and a safer place for our children and grandchildren. We will not blame the system, races, sexes, religions, governments, or anyone else but we will step up to the plate and be responsible before men and God for our actions; past, present, and future.</p>
          <p>We believe that the blame lies squarely in the mirror, no matter who is looking into it, including myself. It is not a <b>hand out</b> welfare program, but a <b>hand up</b> ministry, an opportunity driven ministry, teaching basic and advanced life principles based solely on the Word of God. Christ is the center of who we are, what we do, and all that we will ever be, no exceptions! If ever there be any good thing to be said of this ministry and its staff and participants, it is only because of Jesus Christ and none other. To Him be all the glory and honor forever and ever!</p>
          <a href="<?php echo $nav_about ?>" class="more">Learn More</a> </div>
        <!-- Who-We-Are Box END here --> 
      </div>
      <!-- Main-Colum END here --> 
      <!-- Sidebar START here -->
      <div id="sidebar">
        <div class="sb_header">
          <h3>Prayer Points</h3>
        </div>
        <div class="prayer_points_list">
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
