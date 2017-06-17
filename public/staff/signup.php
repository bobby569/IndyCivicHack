<?php
require_once('../../private/initialize.php');

$errors = array();
$organization = array(
    'email' => '',
    'password' => '',
    'password_confirm',
    'name' => '',
    'website' => '',
    'address' => ''
);

if(is_post_request() && request_is_same_domain()) {
    ensure_csrf_token_valid();

    // Confirm that values are present before accessing them
    if (isset($_POST['email'])) {
        $organization['email'] = $_POST['email'];
    }
    if (isset($_POST['password'])) {
        $organization['password'] = $_POST['password'];
    }
    if (isset($_POST['password_confirm'])) {
        $organization['password_confirm'] = $_POST['password_confirm'];
    }
    if (isset($_POST['name'])) {
        $organization['name'] = $_POST['name'];
    }
    if (isset($_POST['website'])) {
        $organization['website'] = $_POST['website'];
    }
    if (isset($_POST['address'])) {
        $organization['address'] = $_POST['address'];
    }

//    $result = insert_user($organization);
//    if($result === true) {
//        $new_id = db_insert_id($db);
//        redirect_to('show.php?id=' . $new_id);
//    } else {
//        $errors = $result;
//    }

}
?>

<?php $page_title = 'Organization Sign-up'; ?>
<?php include(SHARED_PATH . '/header.php') ?>

<div id="main-content">
    <a href="../index.php">Home</a><br />

    <h1>Welcome!</h1>
    <h4>New Organization Sign Up</h4>

    <?php echo display_errors($errors); ?>

    <form action="signup.php" method="post">
        <?php echo csrf_token_tag(); ?>
        Email:<br />
        <input type="text" name="email" value="<?php echo h($organization['email']); ?>" /><br />
        Password:<br />
        <input type="password" name="password" value="" /><br />
        Confirm Password:<br />
        <input type="password" name="password_confirm" value="" /><br />
        Name:<br />
        <input type="text" name="name" value="<?php echo h($organization['name']); ?>" /><br />
        Website:<br />
        <input type="text" name="website" value="<?php echo h($organization['website']); ?>" /><br />
        Address:<br />
        <input type="text" name="address" value="<?php echo h($organization['address']); ?>" /><br />
        <br />
        <input type="submit" name="submit" value="Create" />
    </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
