<?php

// Will perform all actions necessary to log in the user
// Also protects user from session fixation.
function log_in_user($user) {
    session_regenerate_id();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['last_login'] = time();
    $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
    return true;
}

// A one-step function to destroy the current session
function destroy_current_session() {
    session_unset();
    session_destroy();
}

// Performs all actions necessary to log out a user
function log_out_user() {
    unset($_SESSION['user_id']);
    destroy_current_session();
    return true;
}

// Determines if the request should be considered a "recent"
// request by comparing it to the user's last login time.
function last_login_is_recent() {
    $recent_limit = 60 * 60 * 24 * 1; // 1 day
    if(!isset($_SESSION['last_login'])) { return false; }
    return (($_SESSION['last_login'] + $recent_limit) >= time());
}

// Checks to see if the user-agent string of the current request
// matches the user-agent string used when the user last logged in.
function user_agent_matches_session() {
    if(!isset($_SERVER['HTTP_USER_AGENT'])) { return false; }
    if(!isset($_SESSION['user_agent'])) { return false; }
    return ($_SERVER['HTTP_USER_AGENT'] === $_SESSION['user_agent']);
}

// Inspects the session to see if it should be considered valid.
function session_is_valid() {
    if(!last_login_is_recent()) { return false; }
    if(!user_agent_matches_session()) { return false; }
    return true;
}

// is_logged_in() contains all the logic for determining if a
// request should be considered a "logged in" request or not.
// It is the core of require_login() but it can also be called
// on its own in other contexts (e.g. display one link if a user
// is logged in and display another link if they are not)
function is_logged_in() {
    // Having a user_id in the session serves a dual-purpose:
    // - Its presence indicates the user is logged in.
    // - Its value tells which user for looking up their record.
    if(!isset($_SESSION['user_id'])) { return false; }
    if(!session_is_valid()) { return false; }
    return true;
}

// Call require_login() at the top of any page which needs to
// require a valid login before granting acccess to the page.
function require_login() {
    if(!is_logged_in()) {
        destroy_current_session();
        redirect_to(url_for('/staff/login.php'));
    } else {
        // Do nothing, let the rest of the page proceed
    }
}

?>
