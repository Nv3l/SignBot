<?php

session_start();

// Destroying the session
session_unset();
session_destroy();

// redirection to the index page
header ('location: index.php');

exit();

?>