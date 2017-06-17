<?php
require_once('../../private/initialize.php');
$page_title = 'Registration';
include(SHARED_PATH . '/header.php');
?>


<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-left">
            <h1>Organization Registration</h1>
            <div>
                <form id="individual">
                    <p>
                        <label>
                            Title:
                            <input autofocus required placeholder="Enter title here" type="text">
                        </label>
                    </p>
                    <p>
                        <label>
                            Summary:
                            <textarea autofocus required placeholder="Enter summary here" rows="4" cols="50"></textarea>
                        </label>
                    </p>
                    <p>
                        <label>
                            Image:
                            <input autofocus required placeholder="Enter image" type="file">
                        </label>
                    </p>
                    <p>
                        <label>
                            Location:
                            <input autofocus required placeholder="Enter location here" type="text"></label>
                    </p>
                    <p>
                        <label>
                            Time:
                            <input autofocus required placeholder="Enter time here" type="time">
                        </label>
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
