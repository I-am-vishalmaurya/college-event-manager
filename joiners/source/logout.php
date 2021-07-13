<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: ../../joiners/pages/joiners_login.php');
?>
