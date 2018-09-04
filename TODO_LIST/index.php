<?php
session_start(); 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'todo');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//creates the data base, can be moved to own file
mysqli_query($link,"Create Database todo2"); 
mysqli_select_db($link,"todo2"); 
mysqli_query($link,"Create table user(userID int NOT NULL AUTO_INCREMENT, username varchar(20), password varchar(20), primary key(userID));"); 
mysqli_query($link,"Create table task(taskId int NOT NULL AUTO_INCREMENT, taskName varchar(20), date date, primary key(taskId));"); 

?>

<html> 

<body>


<main> 


<h1>TODO LIST</h1>

<form action="login.php" method="post">
    UserName: <input type="text" name="uName"/> 
    <br>
    Password: <input type="password" name="pWord"/>
    <br> 
    <input type="submit" /> 
</form>

<a href="register.php">Register</a>

</main>

</body>

</html>
