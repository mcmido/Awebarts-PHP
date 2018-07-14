<h3>Sections</h3>

<h2><a href="?page=Sections&action=add">Add New Section</a></h2>

<?php
if ($_POST OR @$_GET['action'])
{
    if (isset($_GET['action']) AND $_GET['action'] == "add" )
    {
        include 'views/addSection.php';
    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Add")
    {
        //sectionId sectionName, sectionStatus,
        // sectionLocation,sectionDesc, sectionDate,username

        $newSecData['sectionName']     = $_POST['sectionName'];
        $newSecData['sectionStatus']   = $_POST['sectionStatus'];
        $newSecData['sectionLocation'] = $_POST['sectionLocation'];
        $newSecData['sectionDesc']     = $_POST['sectionDesc'];
        $newSecData['username']        = $_SESSION['username'];

        $tablename = "sections";

        try
        {
            include "models/Awebarts.php";
            include 'models/Add.php';

            $addNewSec = new Add($newSecData,$tablename);

            if ($addNewSec)
            {
                echo '<script type="text/javascript">alert("new section was addded");history.back();</script>';
            }
        }
        catch (Exception $exception)
        {
            echo $exception->getMessage();
        }
    }
    // delete
    if (isset($_GET['action']) AND $_GET['action'] == "delete" )
    {
        try
        {
            include "models/Awebarts.php";
            include 'models/Delete.php';
            $id = $_GET['id'];

            $tablename = "sections";
            $deSec = new Delete($tablename);
            $deSec->deletRecordById($id);
        }
        catch (Exception $exception)
        {
            echo $exception->getMessage();
        }
    }
    //edit
    if (isset($_GET['action']) AND $_GET['action'] == "edit" )
    {
        //
        $id = $_GET['id'];
        $tablename = "sections";
        include "models/Awebarts.php";
        include 'models/Display.php';
        $editSecDisplay = new Display($tablename);
        $recordSecData = $editSecDisplay->getRecordById($id);

        print_r($recordSecData);

        include 'views/editSection.php';
    }
}
else
{
    include "models/Awebarts.php";
    include 'models/Display.php';
    $tablename = "sections";

    $displaySec = new Display($tablename);
    $SecDataDisplay = $displaySec->getAllData();
    include 'views/sections.php';
}
