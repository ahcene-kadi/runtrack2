<form action="index.php" method="get">
         
            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom">
            <label for="nom">Last name</label>
            <input type="text" id=nom name="nom">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <label for="date de naissance">Date of birth</label>
            <input type="date" id="date de naissance" name="date de naissance">
            <label for="send"></label>
            <input type="submit" id="send" value="send">

</form>         
    
<?php
    echo "<table>
    <thead>
        <th>Argument</th>
        <th>Valeur</th>				
    </thead>
    
    <tbody>";

	foreach($_GET as $argument => $value)
	{
		echo "<tr><td>".$argument."</td><td>".$value."</td></tr>";
	}
	
    echo "</tbody>";

    ?>
