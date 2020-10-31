<?php 
// Call informations
include ('includes/config.php');

	// Current page
	$current_page = "Contact";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language; ?>">
<head>

<!-- Metas -->
<meta http-equiv="Content-Type" content="text/html; <?php echo $charset; ?>" />
<meta name="description" content="<?php echo metaDescription($current_page); ?>" />
<meta name="keywords" content="<?php echo metaKeywords($current_page); ?>" />

<!-- Page Title -->
<title><?php echo $titlePage_Contact; ?></title>

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
          <h2>Contact Us</h2>
          <p class="tagline">You can connect with us here</p>
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
        <h3>Get in Touch</h3>
        <p>Please feel free to fill in the form below to contact us or use the info to the right that best fits you to contact us as well. We look forward to hearing from you.</p>
        <!-- START contact-wrap div -->
        <div id="contact-warp">
          <div class="message">
            <div id="alert"></div>
          </div>
          <form action="sendmail.php" method="post" id="contactForm">
            <p class="label">Name:</p>
            <input type="text" name="name" value="" id="name" />
            <p class="label">Email:</p>
            <input type="text" name="email" value="" id="email" />
            <div style="display:none;">
              <p>Honeypot:</p>
              <input type="text" name="last" value="" id="last" />
            </div>
            <p class="label">Message:</p>
            <textarea rows="8" cols="40" name="message"></textarea>
            <input type="submit" value="" class="submit"/>
          </form>
        </div>
        <!-- END contact-wrap div -->  
      </div>
      <!-- Main-Colum END here -->
      <!-- Sidebar START here -->
      <div id="sidebar">
        <div class="sb_header">
        <h3>Contact Info</h3>
      </div>
      <div class="widget"> 
        <!-- class="current" -->
        Gary Cavalier<br />
		Cell: 318-617-8123<br />
		email: <a href="mailto:gary@castawayministries.com">gary@castawayministries.com</a><br />
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
