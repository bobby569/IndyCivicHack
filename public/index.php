<?php
require_once('../private/initialize.php');
$page_title = 'BMDConnect';
include(SHARED_PATH . '/header.php');
?>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card-2 w3-left-align w3-small">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-center w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <!--<a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>-->
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
    <a href="staff/participant.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Sign Up / Login</a>
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
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">BMDConnect</h1>
  <button class="w3-button w3-green w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-left">
      <input class="w3-right" type="text" placeholder="Search...">
      <h1>Title</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>
      <p class="w3-text-grey">Image</p>
    </div>
    <div class="w3-right">
      <table>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>
        </tr>
      </table>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include(SHARED_PATH . '/footer.php'); ?>
