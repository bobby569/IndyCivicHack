<?php
require_once('../../private/initialize.php');
require_login();

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

    $result = insert_user($organization);
    if($result === true) {
        $new_id = db_insert_id($db);
        redirect_to('show.php?id=' . $new_id);
    } else {
        $errors = $result;
    }

}
?>

<?php $page_title = 'Organization Sign-up'; ?>
<?php include(SHARED_PATH . '/staff_header.php') ?>

<div id="main-content">
    <a href="../index.php">Home</a><br />

    <h1>New User</h1>

    <?php echo display_errors($errors); ?>

    <form action="signup.php" method="post">
        <?php echo csrf_token_tag(); ?>
        First name:<br />
        <input type="text" name="first_name" value="<?php echo h($organization['first_name']); ?>" /><br />
        Last name:<br />
        <input type="text" name="last_name" value="<?php echo h($organization['last_name']); ?>" /><br />
        Username:<br />
        <input type="text" name="username" value="<?php echo h($organization['username']); ?>" /><br />
        Email:<br />
        <input type="text" name="email" value="<?php echo h($organization['email']); ?>" /><br />
        Password:<br />
        <input type="password" name="password" value="" /><br />
        Confirm Password:<br />
        <input type="password" name="password_confirm" value="" /><br />
        <br />
        <input type="submit" name="submit" value="Create" />
    </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
