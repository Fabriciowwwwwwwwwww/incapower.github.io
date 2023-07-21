
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <link rel="stylesheet" href="./CSS/tablacontactanos.css">
</head>
<body>
    
</body>
</html>
<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$nombres = $_POST["nombres"] ;
$apellidos = $_POST["apellidos"] ;
$email = $_POST["email"] ;
$celular = $_POST["celular"] ;
$mensaje = $_POST["mensaje"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
           /*  echo "<b><h3>Hemos conectado al servidor</h3></b>" ; */
        }
        //indicamos el nombre de la base datos
        $datab = "dbformulario";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        /* echo "No se ha podido encontrar la Tabla"; */
        }
        else
        {
        /* echo "<h3>Tabla seleccionada:</h3>" ; */
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO form_contactanos (nombres, apellidos, email, celular, mensaje)
                             VALUES ('$nombres','$apellidos','$email','$celular','$mensaje')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM form_contactanos";

        $result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Apellido</th></h1>";
echo "<th><h1>Email</th></h1>";
echo "<th><h1>Celular</th></h1>";
echo "<th><h1>Mensaje</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id']. "</td></h2>";
    echo "<td><h2>" . $colum['nombres']. "</td></h2>";
    echo "<td><h2>" . $colum['apellidos'] . "</td></h2>";
    echo "<td><h2>" . $colum['email'] . "</td></h2>";
    echo "<td><h2>" . $colum['celular'] . "</td></h2>";
    echo "<td><h2>" . $colum['mensaje'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="inicio.html">INICIO</a>';


?>
        
        
