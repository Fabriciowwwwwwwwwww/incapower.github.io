<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<!-- <link rel="stylesheet" href="./CSS/login.css"> -->
	<link rel="stylesheet" href="./CSS/logiin.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>INICIO SESIÓN</h2>


     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>

     	<?php } ?>
     	<label>Usuario</label>
     	<input type="text" name="uname" placeholder="Ingrese su usuario"><br>

     	<label>Contraseña</label>
     	<input type="password" name="password" placeholder="Ingrese su contraseña"><br>

     	<button type="submit">Ingresar</button>
          <a href="signup.php" class="ca">Registrate</a>
     </form>
</body>
</html>