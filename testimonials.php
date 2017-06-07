<?php 
// Call informations
include ('includes/config.php');

	// Current page
	$current_page = "Testimonials";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $language; ?>">
<head>

<!-- Metas -->
<meta http-equiv="Content-Type" content="text/html; <?php echo $charset; ?>" />
<meta name="description" content="<?php echo metaDescription($current_page); ?>" />
<meta name="keywords" content="<?php echo metaKeywords($current_page); ?>" />

<!-- Page Title -->
<title><?php echo $titlePage_Testimonials; ?></title>

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
          <h2>Testimonials</h2>
          <p class="tagline">don't take our word for it :)</p>
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
        <h3>Here you can insert some testimonails</h3>
        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem exercitationem corporis suscipit laboriosam.</p>
        <blockquote>
          <p>&ldquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &bdquo;</p>
          <cite>Paz Aricha, web-Designer</cite>
        </blockquote>
        <blockquote>
          <p>&ldquo; It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. &bdquo;</p>
          <cite>Will Smith, Actor</cite>
        </blockquote>
        <blockquote>
          <p>&ldquo; The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. &bdquo;</p>
          <cite>John Doe, Themeforest.net</cite>
        </blockquote>
      </div>
      <!-- Main-Colum END here -->
      <!-- Sidebar START here -->
      <div id="sidebar">
        <ul>
          <li class="widget" id="search">
            <form method="get" id="searchform" action="">
              <div id="search-box-container">
                <input type="text" id="search-box" name="search-box" value="" class="round" />
                <input type="submit" value="" id="search-submit" />
              </div>
            </form>
          </li>
          <li class="widget" id="latest-post">
            <h3>From The Blog</h3>
            <ul>
              <li class="post">
                <h5><a href="#">Twitter - How &amp; Why ?</a></h5>
                <a href="#"><img src="images/small-post-thumb1.jpg" alt="thumb" class="post-thumb" /></a>
                <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit nean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              </li>
              <li class="post">
                <h5><a href="#">The Web-Design Process</a></h5>
                <a href="#"><img src="images/small-post-thumb2.jpg" alt="thumb" class="post-thumb" /></a>
                <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit nean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              </li>
            </ul>
          </li>
          <li class="widget">
            <h3>Archives</h3>
            <ul>
              <li><a href="#">December 2009</a></li>
              <li><a href="#">January 2010</a></li>
              <li><a href="#">February 2010</a></li>
            </ul>
          </li>
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
