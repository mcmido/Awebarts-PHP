
<!--
 * Created by PhpStorm.
 * User: Mido
 * Date: 7/12/2018
 * Time: 2:52 PM
 -->


<!-- edit new section

sectionId sectionName, sectionStatus, sectionLocation,sectionDesc, sectionDate,username

-->

<form class="mainSettingsForm add" action="" method="post">

    <h1>Edit new section</h1>
    <label>Section Name</label>
    <input type="text" name="sectionName" placeholder="please write a section title" value="<?php echo $recordSecData['sectionName'];?>">
    <p>
        <label>Section Status:</label>
        <select name="sectionStatus">
            <?php
                if ($recordSecData['sectionStatus'] == "active")
                {
                   echo '<option value="active">active</option>
                         <option value="disActive">disActive</option> 
                        ';
                }else
                {

                    echo '<option value="disActive">disActive</option>
                         <option value="active">active</option> 
                        ';
                }
            ?>



        </select>
    </p>
    <p>
        <label>Section Location:</label>
        <select name="sectionLocation">
            <?php
            if ($recordSecData['sectionLocation'] == "Side")
            {
                echo '

                     <option value="Side">Side</option>
                     <option value="Body">Body</option>
                    
                    ';

            }else
            {

                echo '
                     <option value="Body">Body</option>
                     <option value="Side">Side</option>
                      
                     ';
            }
            ?>

        </select>
    </p>
    <label>Section Description</label>
    <textarea name="sectionDesc" placeholder="please write a section description"><?php echo $recordSecData['sectionDesc'];?></textarea>

    <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Edit">

</form>

