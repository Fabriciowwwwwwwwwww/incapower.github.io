<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<!-- <link rel="stylesheet" href="./CSS/logiin.css"> -->
     <link rel="stylesheet" href="./CSS/logiin.css">
</head>
<body>
     <h1>Bienvenido, <?php echo $_SESSION['name']; ?></h1>
     <a href="inicio.php">Ingresar</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>