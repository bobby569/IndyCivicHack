<?php
require_once('../private/initialize.php');
$page_title = 'BMDConnect';
include(SHARED_PATH . '/header.php');
?>

<style>
    button.jump {
        width: 30px;
        height: 30px;
        text-align: center;
    }
    button:hover {
        cursor: pointer;
    }
</style>


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
          <td><button class="jump">1</button></td>
          <td><button class="jump">2</button></td>
          <td><button class="jump">3</button></td>
          <td><button class="jump">4</button></td>
        </tr>
      </table>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include(SHARED_PATH . '/footer.php'); ?>
