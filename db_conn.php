<?php

$sname= "localhost";
$unmae= "root";
$password = "1234";

$db_name = "login";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
function consultar(string $sql) {
    global $cnx;
    $bolsa = mysqli_query($cnx, $sql);
    $salida = array();
    if ($bolsa != null) {
        while ($row = mysqli_fetch_assoc($bolsa)) {
            $salida[] = $row;
        }
        mysqli_free_result($bolsa);
    } else {
        $salida = false;
    }
    unset($row);
    return $salida;
}