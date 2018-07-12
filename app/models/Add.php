<?php
/**
 * add Class
 * insert data into mysql database
 * User: Mido
 * Date: 7/11/2018
 * Time: 10:36 PM
 */

class Add extends Awebarts
{
    private $data;
    private $tablename;


    public function __construct($data, $tablename)
    {
        if (is_array($data))
        {
            $this->data      = $data;
            $this->tablename = $tablename;
        }
        else
        {
            throw new Exception("Error:The Data must be in an array");
        }
        //connect to db

        $this->connectToDb();


        // insert the data into the tables
        $this->AddData();

        $this->close();
    }
    function AddData()
    {
        foreach ($this->data as $key => $value)
        {
            $keys[]  = $key;
            $values[] = $value;
        }

        $tblKeys = implode($keys,",");
        $dataValues = '"'. implode($values,'","').'"';



        $query = "INSERT INTO $this->tablename ($tblKeys) VALUES ($dataValues)";
        if ($sql = mysqli_query($this->sconn,$query))
            {
                return true;
            }
            else
            {
                throw new Exception("Error: cannot excute the query!");
                return false;
            }

    }
}
