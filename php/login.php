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

		  <title>Bluegram.com | log-in</title>

</head>

      <script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script language="javascript" type="text/javascript" src="javascript/lib-jquery.js"></script>
		  <script language="javascript" type="text/javascript" src="javascript/all-lib_js.js"></script>

<body>
        <a href="index.html">
					<object data="images/logo.svg" type="image/svg+xml" class="logo"></object>
				</a>

    <?php
      require('config.php');
        session_start();

if (isset($_POST['username'])){
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: index.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>

  <form class="box" action="" method="post" name="login">
    <h1 class="box-logo box-title"><a href="login.php">Bluegram.com</a></h1>
    <h1 class="box-title">Connexion</h1>
        <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
        <input type="password" class="box-input" name="password" placeholder="Mot de passe">
        <input type="submit" value="Connexion " name="submit" class="box-button">
          <p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>

  <?php
    if (! empty($message)) {
  ?>

    <p class="errorMessage"><?php echo $message; ?></p>

  <?php
    } 
  ?>

</form>

</body>
</html>