<?php
require_once('../../private/initialize.php');
$page_title = 'Individual Registration';
include(SHARED_PATH . '/header.php');
?>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-red w3-card-2 w3-left-align w3-small">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-center w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <!--<a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>-->
        <a href="../index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
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
                            Spots left:
                            <input autofocus required placeholder= "Enter how many spots left here" type="number">
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
