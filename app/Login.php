<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login/register</title>

	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">

	<script src="resources/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="resources/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
	
</head>
<body>
	<div class="container">
		<div class="contents logincont">		
			<div class="register">
				<form action="LoginController.php" method="post">
					<h1>Register new user :</h1>
					<input required="required" class="input-lg" name="name" type="text" placeholder="Please write your name">
					<input required="required" class="input-lg" name="username" type="text" placeholder="Please write your a username">
					<input required="required" class="input-lg" name="password" type="password" >
					<input required="required" class="input-lg" name="email" type="email" placeholder="please write your Email" name="">
					<input class="btn btn-primary btn-lg button" type="submit" name="submit" value="Register">
				</form>
			</div>

			<div class="login">
                <form action="LoginController.php" method="post">
                    <h1>Login :</h1>
                    <input required="required" class="input-lg" name="username" type="text" placeholder="Please write your a username">
                    <input required="required" class="input-lg" name="password" type="password" name="">
                    <input class="btn btn-primary btn-lg button" type="submit"  name="submit" value="Login">
                </form>
			</div>

		</div>
	</div>
</body>
</html>