<?php
require_once('../../private/initialize.php');
require_login();

$errors = array();
$organization = array(
    'email' => '',
    'password' => '',
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

    $result = insert_user($organization);
    if($result === true) {
        $new_id = db_insert_id($db);
        redirect_to('show.php?id=' . $new_id);
    } else {
        $errors = $result;
    }

}
?>

<?php $page_title = 'Organization Login'; ?>
<?php include(SHARED_PATH . '/staff_header.php') ?>

<div id="main-content">
    <a href="../index.php">Home</a><br />

    <h1>Existing User</h1>

    <?php echo display_errors($errors); ?>

    <form action="signup.php" method="post">
        <?php echo csrf_token_tag(); ?>
        Username/Email:<br />
        <input type="text" name="username/email" value="<?php echo h($organization['email']); ?>" /><br />
        Password:<br />
        <input type="password" name="password" value="" /><br />
        <input type="submit" name="submit" value="Login" />
    </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
