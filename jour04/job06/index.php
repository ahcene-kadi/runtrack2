<form action="index.php" method="post">

         <label for="nombre">Nombre</label>
         <input type="text" id="nombre" name="nombre"></br>
         <label for="send"></label>
         <input type="submit" id="send" value="send"></br>

</form>




<?php

	if ($_POST["nombre"] % 2 ==0)
	{
		echo $_POST["nombre"]." est pair.";
	}
	else
	{
		echo $_POST["nombre"]." est impair.";
	}
?>