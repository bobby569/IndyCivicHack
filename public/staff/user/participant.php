<?php
require_once('../../../private/initialize.php');
$page_title = 'Individual Registration';
include(SHARED_PATH . '/header.php');
?>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-left">
      <h1>Participant Registration</h1>
      <div>
        <form id="individual">
            <p>
              <label>
                Name:
                <input autofocus required placeholder="Enter name here" type="text">
              </label>
            </p>
            <p>
              <label>
                Phone Number:
                <input autofocus required placeholder="Enter phone number here" type="text">
              </label>
            </p>
            <p>
              <label>
                Email Address:
                <input autofocus required placeholder="Enter email address" type="text">
              </label>
            </p>
            <p>
                <p>What are you?</p>
                <input type="radio" name="idSelection" value="individual"> I am an Individual<br>
                <input type="radio" name="idSelection" value="organizer"> I am an Organizer<br>
            </p>
            <p>
              <label>
                Number of Participants/Volunteers:
                <input autofocus required placeholder= "Enter number of participants/volunteers" type="number">
              </label>
            </p>
            <button class="w3-right">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include(SHARED_PATH . './footer.php'); ?>