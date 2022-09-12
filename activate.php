link rel="stylesheet" type="text/css" href="tut_files/style.css"> 
 
Unfortunatly there was an error there!"; }else{ //other wise continue the check 
 
//select all the rows where the accounts are not active $res = mysql_query("SELECT * FROM `users` WHERE `active` = '0'"); 
 
//loop through this script for each row found not active while($row = mysql_fetch_assoc($res)){ //check if the code from the row in the database matches the one from the user if($code == md5($row['username']).$row['rtime']){ //if it does then activate there account and display success message $res1 = mysql_query("UPDATE `users` SET `active` = '1' WHERE `id` = '".$row['id']."'"); echo "<center>You have successfully activated your account!</center>"; } } } 
 
?>
