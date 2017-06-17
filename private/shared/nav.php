<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-red w3-card-2 w3-left-align w3-small">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-center w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="<?php echo url_for('/index.php') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Donations</a>
        <a href="<?php echo url_for('/staff/user/participant.php') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="float: right;">Register</a>
        <a href="<?php echo url_for('/staff/organization/show.php') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" style="float: right;">Login</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="<?php echo url_for('/index.php') ?>" class="w3-bar-item w3-button w3-padding-large">Home</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Donations</a>
        <a href="<?php echo url_for('/staff/user/participant.php') ?>" class="w3-bar-item w3-button w3-padding-large">Register</a>
        <a href="<?php echo url_for('/staff/organization/show.php') ?>" class="w3-bar-item w3-button w3-padding-large">Login</a>
    </div>
</div>