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
    <h3>DeepBook</h3>


    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac orci nulla. Duis luctus urna vitae erat congue
      iaculis. Mauris pulvinar mi et eros pellentesque tincidunt. Vivamus in augue a tortor semper efficitur non eu
      lorem. Curabitur pulvinar volutpat elit vel suscipit. Curabitur sit amet tellus elit. Phasellus eget egestas
      justo. Vestibulum rutrum aliquet sem sed pharetra. Vestibulum dictum nulla nec massa commodo, et accumsan sem
      porta. Sed pretium felis ac urna accumsan, at lobortis ex sagittis. Cras egestas scelerisque diam non tristique.
      Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi nec ultrices
      quam, at auctor purus. Integer auctor mi orci, at pellentesque tellus placerat quis. Fusce id nisl molestie,
      iaculis lacus sed, molestie massa.</p>

    <p>Sed pretium magna id nisi malesuada, a blandit neque sodales. Donec id diam tincidunt, accumsan nisi a,
      tincidunt velit. Nunc sollicitudin molestie ipsum, eu varius augue luctus a. Fusce pellentesque lacus sed lorem
      aliquet, eu pretium ex tincidunt. Donec efficitur porta efficitur. Maecenas sed turpis dolor. In auctor tellus
      massa, ut maximus ipsum varius a.</p>

    <p>Mauris viverra, mauris vitae facilisis sodales, velit felis ultrices metus, vel pharetra mi sapien et mi.
      Quisque dolor leo, molestie id nisl ac, condimentum hendrerit sapien. Ut dignissim, neque vitae faucibus rutrum,
      metus nibh convallis nibh, non dictum nulla magna sit amet lorem. Etiam in nisi urna. Quisque maximus odio quis
      est faucibus, ut vulputate quam dignissim. Cras lobortis in nibh sed volutpat. Cras facilisis nulla vel eros
      aliquam lacinia.</p>

    <p>Cras ullamcorper eu massa at lacinia. Quisque ut suscipit ex, ut tempor felis. Donec tristique vehicula nibh,
      vel ultrices dui varius eu. Donec eu odio porttitor, condimentum arcu at, aliquet dui. Curabitur lacinia tortor
      nec ante rutrum pretium. Cras eu viverra tortor, in pharetra felis. Sed cursus sollicitudin interdum. Suspendisse
      ultricies neque felis, quis tristique velit consectetur non. Etiam congue nunc sapien, at gravida dui porta a.
      Praesent vehicula lorem eu elementum mattis. Nunc quis lectus leo.</p>

    <p>Proin vulputate lectus tortor, in viverra mauris venenatis sit amet. Aliquam euismod sem vel dui sagittis
      vulputate. Nulla interdum laoreet eros, et volutpat leo varius vitae. Sed vel ipsum auctor turpis porta lobortis.
      Vivamus ut ligula massa. Nam ut lorem quis tellus sodales mollis. Fusce gravida, urna ac tempor euismod, dolor
      ligula faucibus justo, nec molestie tellus odio elementum elit. Vestibulum tincidunt enim lacinia dolor cursus,
      vitae ultrices sem elementum. Nunc a varius quam, ultricies varius velit. Vivamus nibh mi, tincidunt vel est
      quis, tincidunt posuere ipsum. Integer finibus pretium nisi, quis vestibulum massa scelerisque in.</p>

    <p>Aenean metus nisi, maximus in ipsum ut, accumsan iaculis purus. Sed arcu leo, sollicitudin nec congue id, cursus
      a justo. Duis placerat molestie suscipit. Praesent lacinia faucibus est, quis eleifend nibh. In arcu lacus,
      laoreet id diam vitae, mattis rhoncus lacus. Quisque non orci sed risus maximus fringilla a et elit. Donec vel
      mattis mauris. Etiam malesuada faucibus sapien, ut iaculis ante. Quisque a sem velit. Donec eu suscipit magna.
      Phasellus rutrum nulla nisi, ac laoreet diam eleifend vitae. Praesent pretium id ligula ac lobortis.</p>

    <p>Vestibulum tincidunt aliquet urna eleifend pulvinar. Pellentesque habitant morbi tristique senectus et netus et
      malesuada fames ac turpis egestas. Cras ullamcorper convallis turpis, viverra suscipit turpis laoreet at. Sed sed
      tempor arcu. Morbi quam diam, ultrices nec nisl iaculis, tincidunt porta eros. Sed tristique tristique dui
      sollicitudin dapibus. Fusce eleifend faucibus ornare. Vestibulum ante ipsum primis in faucibus orci luctus et
      ultrices posuere cubilia Curae; Cras egestas tristique aliquam. Fusce mollis metus a dolor facilisis, quis
      maximus odio fermentum.</p>

    <p>Integer ultrices, est vitae dictum faucibus, risus neque interdum nibh, quis semper tellus nulla ac nisi.
      Pellentesque vel cursus urna. Cras tempus imperdiet tristique. Suspendisse vel consequat metus. Mauris cursus a
      justo eget consectetur. Nunc faucibus turpis vitae velit sollicitudin tempus. Phasellus consectetur dui et enim
      blandit aliquam. In et ornare nisl, ac pretium ligula. Nam in tellus ex.</p>

    <p>In sit amet mi erat. Pellentesque sollicitudin et felis non aliquet. Donec interdum turpis purus, vitae euismod
      leo ullamcorper eu. Pellentesque ac porta arcu. Praesent rutrum feugiat ipsum in vehicula. Nunc dignissim
      consequat ligula, eu fermentum lectus tincidunt sed. Donec erat velit, facilisis convallis sodales sit amet,
      ullamcorper sed sem. Nunc dictum rhoncus lorem, sit amet euismod ex ultrices non. Mauris feugiat nisi pretium est
      commodo cursus. Donec dictum ex ac ipsum sollicitudin, vel viverra lacus fermentum. Cras vitae urna volutpat,
      rutrum nunc in, dapibus urna. Curabitur nisl risus, consectetur sed venenatis eget, tempus quis ex. Donec vitae
      magna accumsan, dignissim ante a, tristique ex. Sed consequat purus vitae nibh sodales, iaculis pharetra tortor
      lacinia. Nunc dignissim vestibulum pulvinar.</p>

    <p>Donec rhoncus facilisis mi vitae consectetur. Mauris ante dui, ornare sit amet finibus vel, finibus a magna.
      Aenean libero ex, ultrices eu scelerisque vel, eleifend vitae velit. Nullam vehicula nisl nec risus placerat
      porttitor. Donec vel tristique est. Praesent sit amet luctus nisi. Suspendisse a mauris sit amet quam congue
      efficitur. Nulla efficitur luctus sem sed vulputate. </p>
  </div>

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