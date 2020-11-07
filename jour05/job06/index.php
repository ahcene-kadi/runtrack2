

<?php

$str="Une supernova est l'ensemble des phénomènes qui résultent de l'implosion d'une étoile en fin de vie.";

    function leetspeak($str)
    {
 
         return  str_replace(["a","A","b","B","e","é","è","E","g","G","l","L","s","S","t","T"], ["4","4","8","8","3","3","3","3","6","6","1","1","5","5","7","7"], $str); 
         
     }
 
 echo leetspeak($str);

 ?>