<link rel="stylesheet" type="text/css" href="tut_files/style.css"> 
 
 You need to fill in your <strong>E-mail</strong> address!"; }else{ //else continue checking 
 
 //set the format to check the email against $checkemail = "/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i"; 
 
 //check if the email doesnt match the required format if(!preg_match($checkemail, $email)){ //if not then display error message echo "<center><strong>E-mail</strong> is not valid, must be name@server.tld!</center>"; }else{ //otherwise continue checking 
 
 //select all rows from the database where the emails match $res = mysql_query("SELECT * FROM `users` WHERE `email` = '".$email."'"); $num = mysql_num_rows($res); 
 
 //check if the number of row matched is equal to 0 if($num == 0){ //if it is display error message echo "<center>The <strong>E-mail</strong> you supplied does not exist in our database!</center>"; }else{ //otherwise complete forgot pass function 
 
 //split the row into an associative array $row = mysql_fetch_assoc($res); 
 
 //send email containing their password to their email address mail($email, 'Forgotten Password', "Here is your password: ".$row['password']."\n\nPlease try not too lose it again!", 'From: noreply@yourwebsitehere.co.uk'); 
 
 //display success message echo "<center>An email has been sent too your email address containing your password!</center>"; } } } } 
 
 ?> <div id="border"> <form action="forgot.php" method="post"> <table border="0" cellpadding="2" cellspacing="0"> <tbody><tr> <td>Email: </td> <td><input name="email" type="text"></td> </tr> 
<tr> <td colspan="2" align="center"><input name="submit" value="Send" type="submit"></td> </tr> <tr> <td colspan="2" align="center"><a href="register.php">Register</a> | <a 
href="login.php">Login</a></td> </tr> </tbody></table> </form> </div>
