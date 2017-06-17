<?php require_once('../private/initialize.php') ?>

<?php include(SHARED_PATH . '/header.php'); ?>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card-2 w3-left-align w3-small">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-center w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <!--<a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>-->
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign Up / Login</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Donations</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">About Us</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Sign Up / Login</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Donations</a>
  </div>
</div>

<!-- Header -->
<!--<header class="w3-container w3-red w3-center" style="padding:128px 16px">-->
  <!--<h1 class="w3-margin w3-jumbo">BMDConnect</h1>-->
  <!--<p class="w3-xlarge w3-italics">Change a Life</p> -->
  <!--<button class="w3-button w3-green w3-padding-large w3-large w3-margin-top">Get Started</button>-->
<!--</header>-->

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-left">
      <h1>Individual Registration</h1>
      <form id="individual">
          <p
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include(SHARED_PATH . './footer.php'); ?>
