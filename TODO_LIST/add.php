<?php 
/* Links and defines the database you are using */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'todo');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Checks if the server recieved a Request Post
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Assign variable taskName and dueDate from home.php to task_name and due_date
    $task_name = mysqli_real_escape_string($link, $_POST['taskName']);
    $due_date = mysqli_real_escape_string($link, $_POST['dueDate']); 

    //Executes Query
    $query = "Insert into task(taskID,taskName,date) Values(NULL,'$task_name','$due_date')"; 
    mysqli_query($link, $query); 
 
    //Return to home.php
    header('location:home.php');


}

?>