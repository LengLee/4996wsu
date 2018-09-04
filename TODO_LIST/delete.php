<?php 
/* Links and defines the database you are using */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'todo');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); 

//Checks if the server recieved a Request Post
if($_SERVER["REQUEST_METHOD"] == "POST"){ 

    //Assign variable delTask from home.php to taskname
    $taskname = mysqli_real_escape_string($link, $_POST['delTask']); 

        //Executes Query
        $query ="Delete from task where taskName = '$taskname'"; 
        mysqli_query($link, $query); 

        //Return to home.php
        header('location:home.php'); 
}



?>