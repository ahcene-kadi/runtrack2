<?php

    function bonjour($jour = "jour")
    {
        if($jour == true)
        {
            echo "Bonjour";
        }
        else  
        {
            echo "Bonsoir";
        }
   
    }

bonjour(false);