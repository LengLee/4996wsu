
<?php
session_start(); 

/* Links and defines the database you are using */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'todo');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

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
    $_SESSION['userName'] = $userName; 
    header('location:home.php'); 
}
?>