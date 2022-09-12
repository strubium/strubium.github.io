<link rel="stylesheet" type="text/css" href="tut_files/style.css"> 
 
You need to be logged in to log out!"; }else{ //if it does continue checking 
 
//update to set this users online field to the current time mysql_query("UPDATE `users` SET `online` = '".date('U')."' WHERE `id` = '".$_SESSION['uid']."'"); 
 
//destroy all sessions canceling the login session session_destroy(); 
 
//display success message echo "<center>You have successfully logged out!</center>"; } 
 
?>
