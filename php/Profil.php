<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
		<meta name="author" content="Your Name">
		<meta name="description" content="Example description">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="css/effect.css">
		<link rel="responcive" href="css/media-queries.css">
		<link rel="icon" type="image/x-icon" href="images/logo.svg"/>

    <title>Bluegram.com | profil</title>
	</head>

		<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script language="javascript" type="text/javascript" src="javascript/lib-jquery.js"></script>
		<script language="javascript" type="text/javascript" src="javascript/all-lib_js.js"></script>

<body>

        <a href="index.html">
					<object data="images/logo.svg" type="image/svg+xml" class="logo"></object>
				</a>

    <div class="gen_footer">
      <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>

        <p>C'est votre tableau de bord.</p>

          <a href="index.html">
            <button class="">
              <p>Home</p>
            </button>
          </a>

          <a href="about.html">
            <button class="">
              <p>A propos</p>
            </button>
          </a>

          <a href="logout.php">
            <button class="">
              Déconnexion
            </button>
          </a>

    </div>

		<footer>
			<p><strong>Bluegram</strong> 2022</p>
		</footer>

<?php

/*
    boucle d'initialision la session.
*/
while ($sessionstart >= 0) {
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
      header("Location: login.php");
          exit(); 
  }
}

?>

  </body>
</html>