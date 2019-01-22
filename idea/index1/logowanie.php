<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
	<link rel="stylesheet" href="styl1.css" type="text/css" />
	
</head>

<body>
<div class="header">
	<h2>DeepBook</h2>
  <p>The opensource project</p>
</div>
<div id="navbar">
  <a href="index.html">DeepBook</a>
  <a href="about us.html">About Us</a>
  <a href="contact.html">Contact</a>
	<a  class="active" href="javascript:void(0)">Login</a>
	<a href="rejestracja.html">Register</a>
</div>

	<div id="container">
		<form action="zaloguj.php" method="post" >
			
			<input name="login" type="text" placeholder="login" onfocus="this.placeholder=''" onblur="this.placeholder='login'" >
			
			<input name="haslo" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'" >
			
			<input type="submit" value="Zaloguj się">
			
		</form>
	</div>
	<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>