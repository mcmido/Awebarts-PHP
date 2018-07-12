
<form action="" method="post"class="mainSettingsForm">

    <label>Site name</label>
    <input type="text" name="site_name" value="<?php echo $displayData['site_name'];?>">
    <label>Site url</label>
    <input type="text" name="site_url" value="<?php echo $displayData['site_url'];?>">
    <label>Email</label>
    <input type="email" name="site_email" value="<?php echo $displayData['site_email'];?>">
    <label>site Description</label>
    <textarea name="site_dcsc"><?php echo $displayData['site_dcsc'];?></textarea>
    <label>Site Tags</label>
    <textarea name="site_tags"><?php echo $displayData['site_tags'];?></textarea>
    <label>Home panel notes</label>
    <textarea name="site_homepanel"><?php echo $displayData['site_homepanel'];?></textarea>
    <label>Facebook link</label>
    <input type="text" name="fb" value="<?php echo $displayData['fb'];?>">
    <label>Twitter link</label>
    <input type="text" name="tw" value="<?php echo $displayData['tw'];?>">
    <label>Youtube link</label>
    <input type="text" name="yt" value="<?php echo $displayData['yt'];?>">
    <label>RSS link</label>
    <input type="text" name="rss" value="<?php echo $displayData['rss'];?>">

    <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>">

    <input class="btn btn-lg btn-primary" name="submit" type="submit" value="Update">
</form>