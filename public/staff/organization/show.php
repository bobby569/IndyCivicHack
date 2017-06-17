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

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
    width: 100%;
}

#myUL {
    /* Remove default list styling */
    list-style-type: none;
    padding: 0;
    margin: 0;
}

#myUL li a {
    border: 1px solid #ddd; /* Add a border to all links */
    background-color: #f6f6f6; /* Grey background color */
    padding: 12px; /* Add some padding */
    text-decoration: none; /* Remove default text underline */
    font-size: 18px; /* Increase the font-size */
    color: black; /* Add a black text color */
    display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a.header {
    background-color: #e2e2e2; /* Add a darker background color for headers */
    cursor: default; /* Change cursor style */
}

#myUL li a:hover:not(.header) {
    background-color: #eee; /* Add a hover effect to all links, except for headers */
}
</style>
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div>
        <div style="float: right;">
            <input type="text" id="myInput" placeholder="Search..." onKeyup="myFunction()"><br>
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
<script>
  function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
<!-- Footer -->
<?php include(SHARED_PATH . './footer.php'); ?>