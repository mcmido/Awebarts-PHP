<h3>Main-Settings</h3>
<!--
`site_name`, `site_url`, `site_dcsc`, `site_email`, `site_tags`,
 `site_homepanel`, `fb`, `tw`, `rss`, `yt`
-->
<?php
if ($_POST)
{
    if(isset($_POST['submit']) AND $_POST['submit'] == "Update" )
    {
      $mainsettings['site_name'] = $_POST['site_name'];
      $mainsettings['site_url'] = $_POST['site_url'];
      $mainsettings['site_dcsc'] = $_POST['site_dcsc'];
      $mainsettings['site_email'] = $_POST['site_email'];
      $mainsettings['site_tags'] = $_POST['site_tags'];
      $mainsettings['site_homepanel'] = $_POST['site_homepanel'];
      $mainsettings['fb'] = $_POST['fb'];
      $mainsettings['tw'] = $_POST['tw'];
      $mainsettings['rss'] = $_POST['rss'];
      $mainsettings['yt'] = $_POST['yt'];
      $mainsettings['username'] = $_POST['username'];

    try
    {
        include 'models/Awebarts.php';
        include 'models/Add.php';
        $addMainSettings = new Add($mainsettings,"main_settings");
        if($addMainSettings == true)
        {
            echo "Successfully Added.";
        }
    }
    catch (Exception $exception)
    {
        echo $exception->getMessage();
    }

    }
}
else
{
    try
    {

        include 'models/Awebarts.php';
        include 'models/Display.php';
        $data =  new Display('main_settings');
        $displayData = $data->getData();

    }
    catch (Exception $exception)
    {
        echo $exception->getMessage();
    }
    include 'views/v_mainSettings.php';
}





?>



