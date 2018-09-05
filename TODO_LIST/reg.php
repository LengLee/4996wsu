<?php 

//link to the DB
include('mysql.php'); 

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