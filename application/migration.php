<?php

require_once("dbConnection.php");

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
)";

if (mysqli_query($mysqli, $sql)) {
    echo "Table 'users' created successfully";
} else {
    echo "Error creating table: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);

?>
