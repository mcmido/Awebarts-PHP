<?php
/**
 * Login Class
 * @author Mohamed farag
 */
class login
{
    private $username;
    private $password;
    private $cxm;       //database object

    public function __construct($username,$password)
    {
        // set data
        $this->setData($username,$password);
        // connect to the DB
        $this->connectToDb();
        // get data from DB

    }
    private function setData($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    private function connectToDb()
    {
        include '../models/database.php';
        $vars = "../include/vars.php";
        $this->cxm = new database($vars);
    }

    function getData()
    {

        $query = "SELECT * FROM 'users' WHERE 'username' = '$this->$username' AND 'password' = '$this->password'";
        $sql = mysqli_query($query);

        if(mysqli_num_rows($sql)>0)
        {
            return TRUE;
        }
        else
            throw new Exception("username or password is invalid!!");
    }




}

?>