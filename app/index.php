<?php
//$username = 'mohamed';
//$_SESSION['username'] = $username;
session_start();
if (!isset($_SESSION['username']))
{
    include 'LoginController.php';
    die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>awebarts-PHP</title>

	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">

	<script src="resources/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="resources/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>

</head>
<body>
	<div class="container">
	<!-- Header -->
	<header>
		<img src="resources/images/logo.png" alt="logo">
		<h2>Welcome
            <?php
            if (isset($_SESSION['username']))
            {
                echo $_SESSION['username']." <a href='?page=logout'>Logout</a>";
            }
            ?>
        </h2>
	</header>
	<!-- /header -->
	<div class="clear"></div>
	<!-- Clear fix -->
	<div class="contents">
		<aside>
			<nav>
				<a class="btn btn-danger active" href="index.php">Home Pages</a></li>
				<a class="btn btn-danger " href="?page=MainSettings">Main Settings</a></li>
				<a class="btn btn-danger" href="?page=Sections">Sections</a></li>
				<a class="btn btn-danger" href="?page=Pages">Pages</a></li>
				<a class="btn btn-danger" href="?page=Comments">Comments</a></li>
				<a class="btn btn-danger" href="?page=Library">Library</a></li>
			</nav>
		</aside>
		<section id="page">
			<?php
				if(@$_GET['page'])
				{
					$url = $_GET['page'].".php";
					if(is_file($url))
					{
						include $url;
					}
					else
					{
						echo "Requested file is not found";
					} 
				}
				else
				{
					include './main.php';
				}

			?>
		</section>
	</div>
	<!-- Clear fix -->
	<div class="clear"></div>
	<!-- Footer -->
	<footer>
		<p>Copyrights Reserved - Mohamed Farag</p>
	</footer>
	<!-- /Footer -->
	</div>
</body>
</html>