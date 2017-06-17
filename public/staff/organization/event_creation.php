<?php
require_once('../../../private/initialize.php');
$page_title = 'Event Creation';
include(SHARED_PATH . '/header.php');

$Event = $_POST($_POST["event"])

if ($Event){
  //Get submitted information
  $TITLE = $_POST($_POST["TITLE"])
  $SUMMARY = $_POST($_POST["SUMMARY"])
  $IMAGE = $_POST($_POST["IMAGE"])
  $LOCATION = $_POST($_POST["LOCATION"])
  $E_TIME = $_POST($_POST["E_TIME"])
  $TOTAL_SPOT = $_POST($_POST["TOTAL_SPOT"])
  $organisation = array("TITLE"=>$TITLE,
                        "SUMMARY"=>$SUMMARY,
                        "IMAGE"=>"$IMAGE",
                        "LOCATION"=>$LOCATION,
                        "E_TIME"=>$E_TIME 
                        "TOTAL_SPOT"=>"$TOTAL_SPOT");
  insert_event($organisation)

}
else{
  <div class="w3-row-padding w3-padding-64 w3-container">
      <div class="w3-content">
          <div class="w3-left">
              <h1>Create an Event</h1>
              <div>
                  <form id="organisation"  method="post" action="event_creation.php" name="event">
                      <p>
                          <label>
                              Title:
                              <input name="TITLE" autofocus required placeholder="Enter title here" type="text">
                          </label>
                      </p>
                      <p>
                          <label>
                              Summary:
                              <textarea name="SUMMARY" autofocus required placeholder="Enter summary here" rows="4" cols="50"></textarea>
                          </label>
                      </p>
                      <p>
                          <label>
                              Image:
                              <input  name="IMAGE" autofocus required placeholder="Enter image" type="file">
                          </label>
                      </p>
                      <p>
                          <label>
                              Location:
                              <input name="LOCATION" autofocus required placeholder="Enter location here" type="text"></label>
                      </p>
                      <p>
                          <label>
                              Time:
                              <input name="E_TIME" autofocus required placeholder="Enter time here" type="time">
                          </label>
                      </p>
                      <p>
                          <label>
                              Number of Participants/Volunteers:
                              <input name="TOTAL_SPOT" autofocus required placeholder= "Enter number of participants/volunteers" type="number">
                          </label>
                      </p>
                      <button type="submit" class="w3-right">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  ?>
<?php
} ?>




<!-- Footer -->
<?php include(SHARED_PATH . './footer.php'); ?>
