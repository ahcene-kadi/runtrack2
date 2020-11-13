<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table  {
            <border-collapse: collapse;
            width: 100%;
            text-align: center;
                }
        
        th {
            background-color: yellow;
            
        }
        tr:nth-child(even) {background-color:whitesmoke}
        </style>

</head>
<body>
<table>
        <thead>
            <tr>
            <th>Nom</th>
            <th>Capacite</th>
            </tr>
        </thead>
        <tbody>
<?php

$link = new PDO('mysql:host=localhost;dbname=jour08;charset=utf8', 'root', '');

$reponse = $link->query( 'SELECT nom, capacite FROM salles');

while ($donnees = $reponse->fetch())
    {




            echo "<tr><td>". $donnees['nom']."</td><td>".$donnees['capacite']."</td></tr>";
    }

echo "</tbody>";

$reponse->closeCursor(); 

?>
        

    </table>
    
</body>
</html>
  

   
   