<?php
//Assumption is that user has entered right email and password magic.
//Start the session and set the variable
session_start();
$_SESSION["username"]="user";

header('Location:converter.php',200);

?>

