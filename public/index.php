<?php
require_once('../private/initialize.php');
$page_title = 'BMDConnect';
include(SHARED_PATH . '/header.php');
?>
<style>
  div.gallery {
      margin: 5px;
      border: 5px solid #ccc;
      width: 180px;
  }

  div.gallery:hover {
      border: 1px solid #777;
  }

  div.gallery img {
      width: 100%;
      height: auto;
  }

  div.desc {
      padding: 15px;
      text-align: center;
  }
</style>
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
    <div id="events">
      <div>
        <table style="table-layout:fixed;">
        <tr>
          <td>
            <div class="gallery">
              <a target="_blank" class="fade_open">
                <img src="./photos/1.jpg" height="150" width="150">
              </a>
              <div class="desc">Volunteer Event</div>
            </div>
          </td>
          <td>
            <div class="gallery">
              <a target="_blank">
                <img src="./photos/2.jpg" height="150" width="150">
              </a>
              <div class="desc">Volunteer Event</div>
            </div>
          </td>
          <td>
            <div class="gallery">
              <a target="_blank">
                <img src="./photos/3.jpg" height="150" width="150">
              </a>
              <div class="desc">Volunteer Event</div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="gallery">
              <a target="_blank">
                <img src="./photos/1.jpg" height="150" width="150">
              </a>
              <div class="desc">Volunteer Event</div>
            </div>
          </td>
          <td>
            <div class="gallery">
              <a target="_blank">
                <img src="./photos/2.jpg" height="150" width="150">
              </a>
              <div class="desc">Volunteer Event</div>
            </div>
          </td>
          <td>
            <div class="gallery">
              <a target="_blank">
                <img src="./photos/3.jpg" height="150" width="150">
              </a>
              <div class="desc">Volunteer Event</div>
            </div>
          </td>
        </tr>
        </tr>
        <tr>
          <td>
            <div class="gallery">
              <a target="_blank">
                <img src="./photos/1.jpg" height="150" width="150">
              </a>
              <div class="desc">Volunteer Event</div>
            </div>
          </td>
          <td>
            <div class="gallery">
              <a target="_blank">
                <img src="./photos/2.jpg" height="150" width="150">
              </a>
              <div class="desc">Volunteer Event</div>
            </div>
          </td>
          <td>
            <div class="gallery">
              <a target="_blank">
                <img src="./photos/3.jpg" height="150" width="150">
              </a>
              <div class="desc">Volunteer Event</div>
            </div>
          </td>
        </tr>
        </table>
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

      <div id="fade" class="well">
          <h4>Fade example</h4>
      <pre class="prettyprint">
      <!--  Info about event -->
      </pre>
          <!-- Add an optional button to close the popup -->
          <button class="fade_close btn btn-default">Close</button>
    </div>
    </div>
</div>

<!-- Footer -->
<?php include(SHARED_PATH . '/footer.php'); ?>
