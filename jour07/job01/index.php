<?php

session_start();

$_SESSION['nbvisites'];

if (isset($_SESSION['nbvisites'])) {
    
    if (isset($_POST['reset'])) { 
    $_SESSION['nbvisites']=1;

    }

    else {

        $_SESSION['nbvisites']++;  
    }
}
    echo $_SESSION['nbvisites'], '<br /> Nombre de fois que la page est visitees';

?>

<form action="index.php" method="post">
<input type="submit" name="reset" value="reset">
</form>