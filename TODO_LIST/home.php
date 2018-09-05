
<?php 
 
session_start(); 

//link to the DB
include('mysql.php'); 

if($_SESSION['auth'] != 'true'){
    header('location:index.php'); 
}



?>

<html>

<nav><a href="logout.php">Logout</a></nav>

<h1>Todo List - <?php echo $_SESSION['userName'] ?> </h1> 

Add a Task
<form action="add.php" method="post">
Task Name: <input type="text" name="taskName"/> 
<br>
Date: <input type="date" name="dueDate"/> 
<br>
<input type="submit" name="submitTask"/>
</form>

<br> 

Delete a Task 
<form action="delete.php" method="post"> 
Task Name: <input type="text" name="delTask"/> 
<br> 
<input type="submit" name="Submitdelete"/> 
<br>
<br>

View Tasks 
<?php
//Create the table to view the DB on the Home Page
echo "<table border ='1'>"; 
echo "<tr><td>Task ID</td><td>Task Name</td><td>Due Date</td></tr>"; 

//Execute Query
$result = mysqli_query($link,"select * from task");

//Display rows while the fetch is successful 
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>{$row['taskId']}</td><td>{$row['taskName']}</td><td>{$row['date']}</td></tr>";
}
echo "</table>"
?>


</html>
