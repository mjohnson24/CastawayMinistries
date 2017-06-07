<!-- Site-Wrapper START here -->
<div id="site-warpper">
  <!-- Header START here -->
  <div id="header">
    <!-- Container START here -->
    <div class="container">
      <!-- Logo START here -->
      <div id="logo">
        <h1><a href="<?php echo $nav_home ?>"><?php echo $website_name ?></a></h1><!-- Main Nav -->
      </div>
      <!-- Logo END here -->
      
      <!-- Nav START here -->
      <ul class="sf-menu">
        <?php If ($current_page=="Home") { echo '<li class="selected">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_home ?>">Home</a></li><!-- Main Nav -->
        <?php If ($current_page=="About") { echo '<li class="selected">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_about ?>">About Us</a><!-- Main Nav -->
          <ul>
            <li><a href="<?php echo $nav_mission ?>">Our Mission</a></li><!-- Sub Nav (ABOUT)-->
            <li><a href="<?php echo $nav_vision ?>">Our Vision</a></li><!-- Sub Nav (ABOUT)-->
            <li><a href="<?php echo $nav_staff ?>">The Staff</a></li><!-- Sub Nav (ABOUT)-->
          </ul>
        </li>
        <?php If ($current_page=="Requirements") { echo '<li class="selected">'; } else { echo '<li>'; } ?><a href="#">Requirements</a><!-- Main Nav -->
              <ul>
                <li><a href="<?php echo $nav_privileges ?>">Privileges</a></li><!-- Sub Nav (Requirements)-->
                <li><a href="<?php echo $nav_rules ?>">Rules and Regs</a></li><!-- Sub Nav (Requirements)-->
              </ul>
            </li>
        
        <?php If ($current_page=="Gallery") { echo '<li class="selected">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_gallery ?>">Gallery</a><!-- Main Nav -->
          <ul>
            <li><a href="#">Graduation</a><!-- Sub Nav (GALLERY)-->
              <ul>
                <li><a href="<?php echo $nav_2013 ?>">2013</a></li><!-- Sub Sub Nav (GRADUATION)-->
                <li><a href="<?php echo $nav_2016 ?>">2016</a></li><!-- Sub Sub Nav (GRADUATION)-->
              </ul>
       		</li>
          </ul>
        </li>
        <?php If ($current_page=="Links") { echo '<li class="selected">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_links ?>">Links</a></li><!-- Main Nav -->
        <?php If ($current_page=="Downloads") { echo '<li class="selected">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_downloads ?>">Downloads</a></li><!-- Main Nav -->
        <?php If ($current_page=="Contact") { echo '<li class="selected">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_contact ?>">Contact Us</a></li><!-- Main Nav -->
      </ul>
      <!-- Nav END here -->