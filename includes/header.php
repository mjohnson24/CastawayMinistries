<!-- Site-Wrapper START here -->
<div id="site-warpper">
  <!-- Header START here -->
  <div id="header">
    <!-- Container START here -->
    <div class="container">
      <!-- Logo START here -->
      <div id="logo">
        <h1><a href="<?php echo $nav_home ?>"><?php echo $website_name ?></a></h1>
      </div>
      <!-- Logo END here -->
      
      <!-- Nav START here -->
      <ul class="sf-menu">
        <?php If ($current_page=="Home") { echo '<li class="selected">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_home ?>">Home</a></li>
        
        <?php If ($current_page=="Contact") { echo '<li class="selected">'; } else { echo '<li>'; } ?><a href="<?php echo $nav_contact ?>">Contact Us</a></li>
      </ul>
      <!-- Nav END here -->