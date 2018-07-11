<?php
/**
 * Register Class
 * @author Mohamed Farag
 */
class register
{
    // `id`, `name`, `username`, `password`, `email`
    private $name;
    private $username;
    private $password;
    private $email;
    private $cxn;
    private $sconn;

    public function __construct($data)
    {
        if (is_array($data))
        {
            $this->setData($data);
        }
        else
        {
            throw new Exception("Error: Data Must be in an Array!");
        }

        // connect to database
        $this->connectToDb();
        //insert user data
        $this->registerUser();
    }
    private function setData($data)
    {
        $this->name     = $data['name'];
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->email    = $data['email'];
    }

    private function connectToDb()
    {
        include "database.php";
        $vars = "include/vars.php";
        $this->cxn = new database($vars);
        $this->sconn =$this->cxn->connection;


    }
    function registerUser()
    {
        //`users`:: `id`, `name`, `username`, `password`, `email`
        $query ="INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`) VALUES ('','$this->name','$this->username','$this->password','$this->email')";

        $sql = mysqli_query($this->sconn,$query);
        if (!$sql)
        {
            throw new Exception('sql didnt happen / Not Registerd');
        }
        else
        {
            echo 'Registerd Successfully';
        }
    }
    function close()
    {
        $this->cxn->close();
    }

}

