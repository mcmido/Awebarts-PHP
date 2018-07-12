<?php
/**
 * Created by PhpStorm.
 * User: Mido
 * Date: 7/11/2018
 * Time: 12:02 AM
 *
 *
 * awebarts
 * @auther Mohamed Farag
 */



class database
{
    private $host;
    private $user;
    private $password;
    private $database;
    public  $connection;

    function __construct($filename)
    {
        if (is_file($filename)) include $filename;
        else throw new Exception("Error!");

        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        $this->connect();

    }

    private function connect()
    {
        // connect to the server.
        $con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        $this->connection = $con;

        if (mysqli_connect_error())
        {
            echo 'couldnt connect to the server/db';
        }
    }

    function close()
    {
        mysqli_close($this->connection);
    }
    // old CONNECT function..

    /*
     *
    private function connect()
    {
        // connect to the server.

       if(!mysqli_connect($this->host,$this->user,$this->password,$this->database))
        {
            throw new Exception("ERROR: Not connected to the database nor server");
            die("connection failed." . mysqli_connect_error());
        }
    }
     */



    /*
    private function cnt()
    {
        $cont = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if (!$cont)
        {
            die("connection closed." . mysqli_connect_error());
        }
        else echo "ok ok";
    }
    */
}