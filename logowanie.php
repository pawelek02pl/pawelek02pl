<?php

session_start();

if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{
	header('Location:twoje finanse.php');
	exit();
}


?>

<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />

	<title></title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato|Libre+Caslon+Text&display=swap" rel="stylesheet">

</head>

<body>


<div class="space"></div>

<div class="logo">
<div style="width:100px;"></div>
<p style="font-size:100px;float:left;padding-left:50px;">
 <a href="index.php" style="font-family: 'Libre Caslon Text', serif;">Money</a><a href="index.php" style="font-family: 'Indie Flower', cursive;">Work</a>
</p>
<div style="clear:both;"></div>
</div>

<main>

<div class="half">
<div class="space"></div>

<h1>Logowanie</h1>

<form action="twoje finanse.php" method="post" >
login:<br/>
<input type="text" name="login"><br/>
hasło:<br/>
<input type="password" name="password"><br/>
<br/>
<input type="submit" value="Zaloguj się">

</form>

<div class="space"></div>
</div>

<div class="half">
<div class="space"></div>



<form action="twoje finanse.php" method="post" >
	<h1>Nie masz jeszcze konta</h1>

	login:<br/>
	<input type="text" name="login"><br/>
	e-mail:<br/>
	<input type="text" name="email"><br/>
	hasło:<br/>
	<input type="password" name="haslo"><br/>
<br/>
	<input type="submit" value="Zarejestruj się">

</form>

<div class="space"></div>
<div>

	<div style="clear:both;"></div>

	<?php

 if(isset($_SESSION['blad']))
 {
 echo $_SESSION['blad'];
 unset($_SESSION['blad']);
 }

 ?>

</main>





</body>

</html>
