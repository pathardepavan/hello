<?php
session_start();
require('logconfig.php');

if(!isset($_SESSION['username'])){
    header('Location:index.php');
}
//if($_SESSION['username']!='user')
    //header('Location:index.html');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="converter.php">Currency Coverter</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="converter.php">Home</a></li>
            <li><a href="currencymanager.php">Currency Management</a></li>

            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</nav>

