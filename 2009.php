<?php 
// Call informations
include ('includes/config.php');

	// Current page
	$current_page = "Graduation 2009";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language; ?>">
<head>

<!-- Metas -->
<meta http-equiv="Content-Type" content="text/html; <?php echo $charset; ?>" />
<meta name="description" content="<?php echo metaDescription($current_page); ?>" />
<meta name="keywords" content="<?php echo metaKeywords($current_page); ?>" />

<!-- Page Title -->
<title><?php echo $titlePage_2009; ?></title>

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
          <h2>2009 Graduation</h2>
          <p class="tagline">Our Graduation Photos for 2009</p>
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
      <!-- Full-Width START here -->
      <div id="full-width">
      	<!-- Portfolio-Item START here -->
        <div class="portfolio-item">
          <div class="port-box">
            <a href="images/portfolio/port-big.jpg" rel="prettyPhoto[gallery]">
              <img src="images/portfolio/port1.jpg" alt="" class="port-img" />
              <img src="images/zoom.png" class="portfolio-zoom" alt="" style="display:none;" />
            </a>
          </div>
          <h3>Coming Soon</h3>
          <p>These photos are being processed and edited at this current time.</p>
        </div>
        <!-- Portfolio-Item END here -->
        <!-- Portfolio-Item START here -->
        <div class="portfolio-item">
          <div class="port-box">
            <a href="images/portfolio/port-big.jpg" rel="prettyPhoto[gallery]">
              <img src="images/portfolio/port2.jpg" alt="" class="port-img" />
              <img src="images/zoom.png" class="portfolio-zoom" alt="" style="display:none;" />
            </a>
          </div>
          <h3>Coming Soon</h3>
          <p>These photos are being processed and edited at this current time.</p>
        </div>
        <!-- Portfolio-Item END here -->
        <!-- Portfolio-Item START here -->
       <!-- <div class="portfolio-item no-margin">
          <div class="port-box">
            <a href="images/portfolio/port-big.jpg" rel="prettyPhoto[gallery]">
              <img src="images/portfolio/port3.jpg" alt="" class="port-img" />
              <img src="images/zoom.png" class="portfolio-zoom" alt="" style="display:none;" />
            </a>
          </div>
          <h3>Some Title</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>-->
        <!-- Portfolio-Item END here -->
        <!-- Portfolio-Item START here -->
        <!--<div class="portfolio-item">
          <div class="port-box">
            <a href="images/portfolio/port-big.jpg" rel="prettyPhoto[gallery]">
              <img src="images/portfolio/port4.jpg" alt="" class="port-img" />
              <img src="images/zoom.png" class="portfolio-zoom" alt="" style="display:none;" />
            </a>
          </div>
          <h3>Some Title</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>-->
        <!-- Portfolio-Item END here -->
        <!-- Portfolio-Item START here -->
        <!--<div class="portfolio-item">
          <div class="port-box">
            <a href="images/portfolio/port-big.jpg" rel="prettyPhoto[gallery]">
              <img src="images/portfolio/port5.jpg" alt="" class="port-img" />
              <img src="images/zoom.png" class="portfolio-zoom" alt="" style="display:none;" />
            </a>
          </div>
          <h3>Some Title</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>-->
        <!-- Portfolio-Item END here -->
        <!-- Portfolio-Item START here -->
        <!--<div class="portfolio-item no-margin">
          <div class="port-box">
            <a href="images/portfolio/port-big.jpg" rel="prettyPhoto[gallery]">
              <img src="images/portfolio/port6.jpg" alt="" class="port-img" />
              <img src="images/zoom.png" class="portfolio-zoom" alt="" style="display:none;" />
            </a>
          </div>
          <h3>Some Title</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>-->
        <!-- Portfolio-Item END here -->
        <!-- Paging START here -->
       <!-- <div class="paging">
          <span class="selected">1</span>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">&gt;</a>
        </div>-->
        <!-- Paging END here -->
      </div>
      <!-- Full-Width END here -->
    </div>
    <!-- Container END here -->
  </div>
  <!-- Content END here -->
</div>
<!-- Site-Wrapper END here -->

<?php include('includes/footer.php'); ?>

</body>
</html>
