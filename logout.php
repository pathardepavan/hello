<?php

session_start();
require('logconfig.php');
$log->addInfo("User Visited: Logout");
if(isset($_SESSION['username']))
{
    unset($_SESSION['username']);
    session_destroy();
    echo "Logged out..Redirecting ....";
    header('Refresh:3;url=index.php',200);
}

?>