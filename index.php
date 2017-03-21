<?php
require('logconfig.php');
$log->addInfo("User Visited: Home Page");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currency Conversion Tool</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <div class="row">
        <!-- Space on Top -->
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
        <h1>Login Form</h1>
        <h5 id="message"></h5>
        <form class="form-horizontal" action="#" method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" id="password" name="password" />
            </div>
            <input onclick="validateLoginForm()" type="button" class="btn btn-primary" value="Login"/>
            <input onclick="redirectSignUp()" type="button" class="btn btn-success" value="Sign Up"/>
        </form>
        </div>
    </div>
    <div class="row">

    </div>
</div>
<script src="assets/js/login.js"></script>
</body>
</html>