<?php

$link=mysqli_connect("localhost", "root", "", "jour08");          
$reponse="SELECT prenom, nom, naissance FROM etudiants WHERE sexe='Femme'";                             
$query=mysqli_query($link, $reponse);                             

echo '<table>';
$i=0;
while (($result=mysqli_fetch_assoc($query))!=null){           
    if($i==0){
        echo '<thead>';
        foreach($result as $key => $value){               
            echo '<th>'.$key.'</th>';                          
        }
        echo '</thead>';
        $i=1;
    }
    echo '<tbody><tr>';
    foreach($result as $value){
        echo '<td>'.$value.'</td>';                             
    }
   echo '</tr></tbody>';
}
echo '</table>';
    
mysqli_close($link);
?>