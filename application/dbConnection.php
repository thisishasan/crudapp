<?php
$databaseHost = $_ENV['DB_HOST'];
$databaseName = $_ENV['DB_NAME'];
$databaseUsername = $_ENV['DB_USER'];
$databasePassword = $_ENV['DB_PASS'];

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


