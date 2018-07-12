<?php
/**
 * Login Class
 * @author Mohamed farag
 */

class login
{
    private $username;
    private $password;
    private $sconn;
    private $cxn; // database object

    function __construct($username,$password)
    {
        //set data
        $this->setData($username,$password);
        // connect to DB
        $this->connectToDb();
        // get data from DB
        $this->getData();
    }

    private function setData($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    private function connectToDb()
    {
        include "database.php";
        $vars = "include/vars.php";
        $this->cxn = new database($vars);
        $this->sconn = $this->cxn->connection;


    }

    private function getData()
    {
        $con = mysqli_connect('localhost','root','','awebarts');
        if (mysqli_connect_error())
        {
            echo 'not connected to db';
        }
        // in my sql you use `` instead of '', very important wasted a lot of time trying to figure out what went wrong :D.

        $query = "SELECT * FROM `users` WHERE `username` = '$this->username' AND `password` = '$this->password'" ;
//      $query = "SELECT * FROM `users` " ;
        $sql = mysqli_query($this->sconn,$query);
        $rowcount = mysqli_num_rows($sql);
        if($rowcount>0)
        {
           return true;
        }
        else
        {
            throw new Exception("Error: Userneame or password is invalid;");
        }


//
//        if(mysqli_num_rows($sql))
//        {
//            return TRUE;
//        }
//        else
//        {
//            throw new Exception("Error: Username or Password is invalid!. Please Try again");
//        }

    }
    function close()
    {
        $this->cxn->close();
    }




}




