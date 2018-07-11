<?php
/*
 * awebarts:: logincontroler
 */

try {
    include 'models/database.php';
    $vars = "include/vars.php";

    new database($vars);

}
catch (Exception $exc)
{
    echo $exc->getMessage();
}


?>