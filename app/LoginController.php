<?php
/*
 * awebarts:: logincontroler
 */



if($_POST)
{
    // Login
    if(isset($_POST['submit']) AND $_POST['submit'] == "Login")
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        try
        {
          include './models/login.php';
          $login = new login($username,$password);

          if ($login == true)
          {
            session_start();
            $_SESSION['username'] = $username;
            header('Location:index.php');

          }
        }
        catch (Exception $exc)
        {
            echo $exc->getMessage();
        }
    }
    //Register
    // `id`, `name`, `username`, `password`, `email`
    if(isset($_POST['submit']) AND $_POST['submit'] == "Register")
    {
        $data['name'] = $_POST['name'];
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $data['email'] = $_POST['email'];

        try
        {
            include 'models/register.php';
            new register($data);
        }
        catch (Exception $exception)
        {
            echo $exception->getMessage();
        }

    }
}
else
{
    include './Login.php';
}























?>