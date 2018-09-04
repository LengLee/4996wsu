<?php 

/* Links and defines the database you are using */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'todo');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

?>

<html>

<form action="reg.php" method="post">
UserName: <input type='text' name='username'/> 
<br>
Password: <input type='text' name='password'/>
<br>
<input type="submit"/>

</form>


</html>