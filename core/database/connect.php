<?php
//change phpmyadmin username and password accordingly
//if you are having difficulty connecting, try creating a new user in phpmyadmin and supply new username and password to begin fresh
$conn_error = 'Sorry, could not connect to the database.';
mysql_connect('localhost','root','') or die($conn_error);
mysql_select_db('lr') or die($conn_error);
?>