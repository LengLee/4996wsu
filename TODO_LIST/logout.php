<?php 

//start session
session_start();

//destroy current session info
unset($_SESSION); 
session_destroy(); 

header('location:index.php'); 

?>