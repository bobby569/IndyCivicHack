<?php
require_once('../../../private/initialize.php');
$page_title = 'Organizations';
include(SHARED_PATH . '/header.php');
?>
<style>
  li {
    border: 1px solid black;
  }
  input[type=text] {
    width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

</style>

<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div>
        <div style="float: right;">
            <input type="text" id="myInput" placeholder="Search..." onKeyup="filterEvent()"><br>
            <button class="w3-right">Create an Event</button>
        </div>

        <div style="float: left;"id="events">
          <h1>Organization Dashboard</h1>
          <h6>Events</h6>
          <ul id="myUL">
            <li><a href="#">Event #1: Looking for Volunteers</a></li>
            <li><a href="#">Event #2: Pickup Donations</a></li>
            <li><a href="#">Event #3: Volunteers!</a></li>
            <li><a href="#">Event #4: Art Donations</a></li>
            <li><a href="#">Event #5: Giving</a></li>
            <li><a href="#">Event #6: Fundraising</a></li>
            <li><a href="#">Event #7: Art and Giving</a></li>
          </ul>        
        </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include(SHARED_PATH . './footer.php'); ?>