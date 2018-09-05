
<?php


//link to the DB
include('mysql.php'); 

//Fetches the username and password from the form -> index.php
$userName = mysqli_real_escape_string($link,$_POST['uName']); 
$passWord = mysqli_real_escape_string($link,$_POST['pWord']);

//Searches the DB for the username and password to see if they exist
$sql = "select username, password from user where username='$userName' and password='$passWord'"; 

//Execute the Query
$ret=mysqli_query($link, $sql); 

//Fetches the returned from the Query
$row = mysqli_fetch_assoc($ret); 


//Checks if anything is returned or not, login validation
if(!$row){
    header('location:index.php'); 
}

else{
    session_start(); 
    $_SESSION['auth'] = 'true';
    $_SESSION['userName'] = $userName; 
    header('location:home.php'); 
}
?>