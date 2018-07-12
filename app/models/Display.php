<?php
/**
 * Display to get the requested data from the database
 * User: Mido
 * Date: 7/11/2018
 * Time: 10:38 PM
 */

class Display extends Awebarts

{
    private $tablename;




    public function __construct($tablename)
    {
        $this->tablename = $tablename;

        $this->connectToDb();

        $this->getData();





    }

    function getData()
    {
        $query = "SELECT * FROM $this->tablename ORDER BY `id` DESC LIMIT 1";
//        $con = mysqli_connect('localhost','root','','awebarts');
//       $sql = mysqli_query($this->sconn,$query);

        if (!$sql = mysqli_query($this->sconn,$query))
        {
            throw new Exception("Error: canno't excute query!");
        }
        else
        {
           $num = mysqli_num_rows($sql);

            while ($num >0)
            {
                $data = mysqli_fetch_array($sql);
                $num--;
            }
//            mysqli_free_result($sql);
//            mysqli_close($this->sconn);
        }

        return $data;
    }


}
