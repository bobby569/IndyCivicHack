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

<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-left">
            <h1><?php echo $page_title; ?></h1>

            <?php echo display_errors($errors); ?>

            <div>
                <form id="organisation" action="event_creation.php" method="post" name="event">
                    <?php echo csrf_token_tag(); ?>
                    <p>
                        <label>
                            Title: <br />
                            <input type="text" name="title" value="<?php echo h($event['title']); ?>" autofocus required />
                        </label>
                    </p>
                    <p>
                        <label>
                            Summary: <br />
                            <textarea name="summary"  placeholder="Summary about the event" rows="4" cols="50" autofocus required></textarea>
                        </label>
                    </p>
                    <p>
                        <label>
                            Time: <br />
                            <input type="time" name="datetime" placeholder="Enter time" autofocus required />
                        </label>
                    </p>
                    <p>
                        <label>
                            Location: <br />
                            <input type="text" name="location" value="<?php echo h($event['location']); ?>" autofocus required />
                        </label>
                    </p>
                    <p>
                        <label>
                            Image: <br />
                            <input type="file"  name="imgURL" placeholder="Upload Image"  autofocus />
                        </label>
                    </p>
                    <p>
                        <label>
                            #Participants/Volunteers wanted: <br />
                            <input type="number" name="tspot" value="<?php echo h($event['tspot']); ?>"  autofocus required />
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
