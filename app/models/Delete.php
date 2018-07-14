<?php
/**
 * To Delete The Requested id
 * User: Mido
 * Date: 7/12/2018
 * Time: 2:29 PM
 */

class Delete extends Awebarts
{

    private $tablename;

    public function __construct($tablename)
    {
        $this->tablename = $tablename;
        $this->connectToDb();
    }

    function deletRecordById($id)
    {
        $id = intval($id);
        $query = "DELETE FROM `$this->tablename` WHERE `id` = '$id'";
        $sql = mysqli_query($this->sconn,$query);
        if (!$sql)
        {
            throw new Exception("Error: not Deleted");
        }
        else
        {
            return true;
        }
    }


}