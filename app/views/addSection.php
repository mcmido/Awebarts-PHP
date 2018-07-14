
<!-- Add new section

sectionId sectionName, sectionStatus, sectionLocation,sectionDesc, sectionDate,username

-->

<form class="mainSettingsForm add" action="" method="post">

    <h1>Add new section</h1>
    <label>Section Name</label>
    <input type="text" name="sectionName" placeholder="please write a section title">
    <p>
        <label>Section Status:</label>
        <select name="sectionStatus">
            <option value="active">active</option>
            <option value="disActive">disActive</option>
        </select>
    </p>
    <p>
        <label>Section Location:</label>
        <select name="sectionLocation">
            <option value="Side">Side</option>
            <option value="Body">Body</option>
        </select>
    </p>
    <label>Section Description</label>
    <textarea name="sectionDesc" placeholder="please write a section description"></textarea>

    <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Add">

</form>

