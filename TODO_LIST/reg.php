<?php 
/* Links and defines the database you are using */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'todo');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($_SERVER["REQUEST_METHOD"] == "POST"){
//Sets variables
$userName = mysqli_real_escape_string($link, $_POST['username']);
$passWord = mysqli_real_escape_string($link, $_POST['password']);

//Execute Query
$sql = "Insert into user(userID,username,password) values(NULL,'$userName','$passWord');"; 
mysqli_query($link, $sql); 

header('location:index.php'); 
}
?>