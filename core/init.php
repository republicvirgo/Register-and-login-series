<?php
//I commented out the error reporting so that we can see errors while developing , you can remove it when you are ready to launch your site to the public
session_start();
//error_reporting(0);
require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';
$errors = array();
?>