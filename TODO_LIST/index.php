<?php

//link to the DB
include('mysql.php'); 

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
