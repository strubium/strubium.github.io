<link rel="stylesheet" type="text/css" href="tut_files/style.css"> 
  
 You need to fill in a <strong>Username</strong> and a <strong>Password</strong>!"; }else{ //if the were continue checking 
  
 //select all rows from the table where the username matches the one entered by the user $res = mysql_query("SELECT * FROM `users` WHERE `username` = '".$username."'"); $num = 
mysql_num_rows($res); 
  
 //check if there was not a match if($num == 0){ //if not display an error message echo "<center>The <strong>Username</strong> you supplied does not exist!</center>"; }else{ //if there was a match 
continue checking 
  
 //select all rows where the username and password match the ones submitted by the user $res = mysql_query("SELECT * FROM `users` WHERE `username` = '".$username."' AND `password` = 
'".$password."'"); $num = mysql_num_rows($res); 
  
 //check if there was not a match if($num == 0){ //if not display error message echo "<center>The <strong>Password</strong> you supplied does not match the one for that username!</center>"; }else{ //if 
there was continue checking 
  
 //split all fields fom the correct row into an associative array $row = mysql_fetch_assoc($res); 
  
 //check to see if the user has not activated their account yet if($row['active'] != 1){ //if not display error message echo "<center>You have not yet <strong>Activated</strong> your account!</center>"; 
}else{ //if they have log them in 
  
 //set the login session storing there id - we use this to see if they are logged in or not $_SESSION['uid'] = $row['id']; //show message echo "<center>You have successfully logged 
in!</center>"; 
  
 //update the online field to 50 seconds into the future $time = date('U')+50; mysql_query("UPDATE `users` SET `online` = '".$time."' WHERE `id` = '".$_SESSION['uid']."'"); 
  
 //redirect them to the usersonline page header('Location: usersOnline.php'); } } } } } 
  
 ?> <form action="login.php" method="post"> <div id="border"> <table border="0" cellpadding="2" cellspacing="0"> <tbody><tr> <td>Username:</td> <td><input name="username" type="text"></td> 
</tr> <tr> <td>Password:</td> <td><input name="password" type="password"></td> </tr> <tr> <td colspan="2" align="center"><input name="submit" value="Login" type="submit"></td> </tr> <tr> <td 
colspan="2" align="center"><a href="register.php">Register</a> | <a href="forgot.php">Forgot Pass</a></td> </tr> </tbody></table> </div> </form>
