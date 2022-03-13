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

    <title>Bluegram.com | logout</title>
	</head>

		<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script language="javascript" type="text/javascript" src="javascript/lib-jquery.js"></script>
		<script language="javascript" type="text/javascript" src="javascript/all-lib_js.js"></script>

<body>

        <a href="index.html">
					<object data="images/logo.svg" type="image/svg+xml" class="logo"></object>
				</a>

    <div class="gen">
      <h1>A bientôt <?php echo $_SESSION['username']; ?>!</h1>

        <h2></h2>
        <p>
        Jespere que vous avez passé un bon moment. <br />
        Merci pour votre visite.
        </p>

    </div>

		<footer>
			<p><strong>Bluegram</strong> 2022</p>
		</footer>


  </body>
</html>