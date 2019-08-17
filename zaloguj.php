

<?php

 session_start();

 if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
 {
 header('Location:Logowanie.php;');
 exit();
 }

require_once "connect.php";

$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);

if($polaczenie->connect_errno!=0)
{
echo "error".$polaczenie->connect_errno;

}
else
{
	$login=$_POST['login'];
	$haslo=$_POST['haslo'];

	$login= htmlentities($login, END_QUOTES, "UTF-8");
	$haslo= htmlentities($haslo, END_QUOTES, "UTF-8");




	if($rezultat =@$polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE user='%s' AND pass='%s'",
	mysqli_real_escape_string($polaczenie,$login),
	mysqli_real_escape_string($polaczenie,$haslo))))
	{
		$ilu_userow = $rezultat->num_rows;
		if($ilu_userow>0)
		{

			$_SESSION['zalogowany'] = true;


			$wiersz = $rezultat->fetch_assoc();
			$_SDESSION['id'] = $wiersz['id'];
			$_SESSION['nick'] = $wiersz['nick'];
			$_SESSION['email'] = $wiersz['email'];
			$_SESSION['przychód'] = $wiersz['przychód'];
			$_SESSION['odchód'] = $wiersz['odchód'];

			unset($_SESSION['blad']);





			$rezultat->free_result();

			header('Location:twoje finanse.php');
		}
		else
		{

			$_SESSION['blad'] = '<span style="color:red;">Nieprawidłoowy login lub chasło!</span>';
			header('Location: logowanie.php');





		}



	}




	$polaczenie->close();
}










?>
