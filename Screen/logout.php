<?php
session_start();
// Destroy session
session_destroy();
// You might want to unset individual session variables as well if needed
// unset($_SESSION['username']);
// unset($_SESSION['user_id']);
?>
