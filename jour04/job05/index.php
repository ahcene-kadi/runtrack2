
<form action="index.php" method="post">
         
         <label for="login">login</label>
         <input type="text" id="login" name="login">
         <label for="password">password</label>
         <input type="password" id="password" name="password"></br>
         <label for="send"></label>
         <input type="submit" id="send" value="send"></br>
             
    
<?php

	if($_POST["login"] == "John" && $_POST["password"] == "Rambo")
	{
		echo "C'est pas ma guerre";
	}
	else
	{
		echo "Votre pire cauchemard";
	}

?>