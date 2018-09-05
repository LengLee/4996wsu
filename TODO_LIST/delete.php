<?php 

//link to the DB
include('mysql.php'); 

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