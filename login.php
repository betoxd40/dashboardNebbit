<?php
  session_start();
  if (isset($_SESSION['session_admin'])){
    echo '<script> window.location="index.php" </script>';
  }
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Nebbit Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login-page">
  <div class="form">
	    <form class="login-form" action="inc/verificar_login.php" method="POST">
		    <input required name="usuario" type="text" placeholder="username"/>
		    <input required name="password" type="password" placeholder="password"/>
		    <button type="submit" name="entrar">ENTRAR</button>
	    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>
</body>
</html>

