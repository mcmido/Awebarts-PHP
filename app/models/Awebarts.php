<?php
/**
 * Main Calls will include the main functions
 * User: Mido
 * Date: 7/11/2018
 * Time: 11:10 PM
 */

class Awebarts
{
    protected $cxn;

    protected $sconn;



    protected function connectToDb()
    {
        include "database.php";
        $vars = "include/vars.php";
        $this->cxn = new database($vars);
        $this->sconn =$this->cxn->connection;

    }

    function close()
    {
        $this->cxn->close();
    }

}