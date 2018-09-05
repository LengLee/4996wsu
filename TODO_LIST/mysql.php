<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'todo');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

mysqli_query($link,"Create Database todo"); 
mysqli_select_db($link,"todo"); 
mysqli_query($link,"Create table user(userID int NOT NULL AUTO_INCREMENT, username varchar(20), password varchar(20), primary key(userID));"); 
mysqli_query($link,"Create table task(taskId int NOT NULL AUTO_INCREMENT, taskName varchar(20), date date, primary key(taskId));"); 

?>