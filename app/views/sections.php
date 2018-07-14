
<!-- Display All Sections -->

<!--

sectionId sectionName, sectionStatus, sectionLocation,sectionDesc, sectionDate,username

-->

<table class="table table-hover table-bordered sectionTable">
    <tr class="danger">
        <th>Id</th>
        <th>Section Name</th>
        <th>Status</th>
        <th>Location</th>
        <th>Section Desc</th>
        <th>Date</th>
        <th>Created By</th>
        <th>Actions</th>
    </tr>
    <?php

    for ($i=0; $i<count($SecDataDisplay); $i++)
    {
        echo "
        
        <tr>
            <td>{$SecDataDisplay[$i]['id']}</td>
            <td>{$SecDataDisplay[$i]['sectionName']}</td>
            <td>{$SecDataDisplay[$i]['sectionStatus']}</td>
            <td>{$SecDataDisplay[$i]['sectionLocation']}</td>
            <td>{$SecDataDisplay[$i]['sectionDesc']}</td>
            <td>{$SecDataDisplay[$i]['sectionDate']}</td>
            <td>{$SecDataDisplay[$i]['username']}</td>
            <td>
                <a href='?page=Sections&action=delete&id={$SecDataDisplay[$i]['id']}'><img src='resources/images/delete.png' alt='delete'></a>
                <a href='?page=Sections&action=edit&id={$SecDataDisplay[$i]['id']}'><img src='resources/images/edit.png' alt='edit'></a>
            </td>
        </tr>
               ";
    }

    ?>

</table>
