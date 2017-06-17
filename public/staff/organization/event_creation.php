<?php
require_once('../../../private/initialize.php');
$page_title = 'Event Creation';
include(SHARED_PATH . '/header.php');

$errors = array();
$event = array(
    'title' => '',
    'summary' => '',
    'datetime' => '',
    'location' => '',
    'phone' => '',
    'imgURL' => '',
    'tspot' => '',      // Total spots
    'cspot' => ''       // Current spots available
);

if(is_post_request() && request_is_same_domain()) {
    ensure_csrf_token_valid();

    if (isset($_POST['title'])) {
        $event['title'] = $_POST['title'];
    }
    if (isset($_POST['summary'])) {
        $event['summary'] = $_POST['summary'];
    }
    if (isset($_POST['datetime'])) {
        $event['datetime'] = $_POST['datetime'];
    }
    if (isset($_POST['location'])) {
        $event['location'] = $_POST['location'];
    }
    if (isset($_POST['phone'])) {
        $event['phone'] = $_POST['phone'];
    }
    if (isset($_POST['tspot'])) {
        $event['tspot'] = $_POST['tspot'];
        $event['cspot'] = $_POST['tspot'];
    }

//    $result = insert_user($event);
//    if($result === true) {
//        $new_id = db_insert_id($db);
//        redirect_to('show.php?id=' . $new_id);
//    } else {
//        $errors = $result;
//    }
}
?>
<?php $page_title = 'Create Event'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="main-content">
    <form action="event_creation.php" method="post">
        <?php echo csrf_token_tag(); ?>
        Title:<br />
        <input type="text" name="title" value="<?php echo h($event['title']); ?>" /><br />
        Summary:<br />
        <input type="text" name="summary" value="<?php echo h($event['summary']); ?>" /><br />
        Date &amp; Time:<br />
        <input type="text" name="datetime" value="<?php echo h($event['datetime']); ?>" /><br />
        Location:<br />
        <input type="text" name="email" value="<?php echo h($event['email']); ?>" /><br />
        Password:<br />
        <input type="password" name="password" value="" /><br />
        Confirm Password:<br />
        <input type="password" name="password_confirm" value="" /><br />
        <br />
        <input type="submit" name="submit" value="Create" />
    </form>
</div>

<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-left">
            <h1><?php echo $page_title; ?></h1>

            <?php echo display_errors($errors); ?>

            <div>
                <form id="organisation"  method="post" action="event_creation.php" name="event">
                    <p>
                        <label>
                            Title:<input name="TITLE" autofocus required placeholder="Enter title here" type="text">
                        </label>
                    </p>
                    <p>
                        <label>
                            Summary:<textarea name="SUMMARY" autofocus required placeholder="Enter summary here" rows="4" cols="50"></textarea>
                        </label>
                    </p>
                    <p>
                        <label>
                            Image:<input  name="IMAGE" autofocus required placeholder="Enter image" type="file">
                        </label>
                    </p>
                    <p>
                        <label>
                            Location:<input name="LOCATION" autofocus required placeholder="Enter location here" type="text"></label>
                    </p>
                    <p>
                        <label>
                            Time:<input name="E_TIME" autofocus required placeholder="Enter time here" type="time">
                        </label>
                    </p>
                    <p>
                        <label>
                            #Participants/Volunteers wanted:<input name="TOTAL_SPOT" autofocus required placeholder= "Enter number of participants/volunteers" type="number">
                        </label>
                    </p>
                    <button type="submit" class="w3-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include(SHARED_PATH . './footer.php'); ?>
