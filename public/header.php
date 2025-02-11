<html>
<!--link to the styling-->
<link rel="stylesheet" href="./styles/css-pokemon-gameboy.css">
<head>
<!--links to other necessary pages-->
<div>
	<ul class="framed buttons compact">
		<li><a href="index.php">|Home|</a></li>
		<li><a href="register.php">|Register|</a></li>
		<?php //login/logout link in the header
		if((isset($_SESSION['userid'])) && (basename($_SERVER['PHP_SELF']) != 'logout.php')){
            echo '<li><a href="logout.php">Logout</a></li>';
        }else{
		echo '<li><a href="login.php">|Login|</a></li>';
        }
		if ((isset($_SESSION['userid'])) && ($_SESSION['userid']==5)) {
		echo '<li><a href="newblog.php">Create a Blogpost</a></li>';
		}
?>
	</ul>
</div>
<div>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

	