<?php

 session_start();

 if(!isset($_SESSION['zalogowany']))
 {
	 header('Location:index.php');
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
<p style="font-size:100px;"><a href="index.php" style="font-family: 'Libre Caslon Text', serif;">Money</a><a href="index.php" style="font-family: 'Indie Flower', cursive;">Work</a></p>
</div>
<nav class="logo">
<a href="twoje finanse.php"> <!--id="link1" href="#"-->  Twoje finanse </a> |
<a href="porady finansowe.php"> <!--id="link1" href="#"-->  Porady finansowe</a> |
<a href="mój profil.php"> <!--id="link4" href="#"-->  Mój profil </a>
</nav>

<main>

<h1>Witaj w swojej aplikacji finansowej</h1>
twój budrzet miesięczny wygląda tak: <br/>
<br/>
echo: * but "haslo" and "login" whear login = $login
<br/>
<br/>





</main>




</body>

</html>
