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







    }

    function getAllData()
    {
        $query = "SELECT * FROM $this->tablename ORDER BY `id` DESC";

        if (!$sql = mysqli_query($this->sconn,$query))
        {
            throw new Exception("Error: canno't excute query!");
        }
        else
        {
            $num = mysqli_num_rows($sql);
            if($num>0)
            {
                for($i=0; $i<$num; $i++)
                {
                    $data[$i] = mysqli_fetch_array($sql);
                }
            }
        }
        return $data;
    }


    function getLastRecordDESC()
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

    function getRecordById($id)
    {
        $id = intval($id);

        $query = "SELECT * FROM $this->tablename WHERE `id` = $id ";
        if (!$sql = mysqli_query($this->sconn,$query))
        {
            throw new Exception("Error: canno't excute query!");
        }
        else
            {
                $num = mysqli_num_rows($sql);
                while ($num > 0)
                {
                    $data = mysqli_fetch_array($sql);
                    $num--;
                }
            }

        return $data;

    }



}
