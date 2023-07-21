<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATE</title>
	<!-- <link rel="stylesheet" href="./CSS/login.css"> -->
     <link rel="stylesheet" href="./CSS/logiin.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>REGISTRATE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Nombre</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Ingrese su nombre"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Ingrese su nombre"><br>
          <?php }?>

          <label>Usuario</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Ingrese su usuario"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Ingrese su usuario"><br>
          <?php }?>


     	<label>Contraseña</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Ingese su contraseña"><br>

          <label>Ingrese nuevamente su contraseña</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Ingrese nuevamente su contraseña"><br>

     	<button type="submit">CREAR CUENTA</button>
          <a href="index.php" class="ca">¿Ya tiene una cuenta?</a>
     </form>
</body>
</html>