<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <title>DeepBook</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styl1.css" type="text/css" />
</head>

<body>
  <div id="loader-wrapper">
    <div class="load">
      <hr />
      <hr />
      <hr />
      <hr />
    </div>
  </div>
  <div class="header">
    <h2>DeepBook</h2>
    <p>The opensource project</p>
  </div>

  <div id="navbar">
    <a class="active" href="javascript:void(0)">DeepBook</a>
    <a href="about us.html">About Us</a>
    <a href="contact.html">Contact</a>
    <a href="logowanie.php">Login</a>
    <a href="rejestracja.php">Register</a>
  </div>

  <div class="content">
    <h3>DeepBook-Panel</h3>
<!--

Tu

menu

zrobić

prosze

-->
  <script>
    window.onscroll = function () {
      myFunction()
    };

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
  <script>
    $('html').addClass('js');
    $(window).load(function () {
      $("#loader-wrapper").fadeOut();
    });
  </script>
</body>

</html>