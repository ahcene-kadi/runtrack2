<?php

$str="Une supernova est l'ensemble des phénomènes qui résultent de l'implosion d'une étoile en fin de vie.";
$char= "n";

    function occurrences ($str, $char) 
    {

        return substr_count ($str,$char); 
        
    }

        echo occurrences ($str,$char);

?>