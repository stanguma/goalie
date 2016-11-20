<?php

// Inicializa las variables necesarias para hacer la conexion al servidor MySql
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "Goalkeepersfirst"

$phphost = trim('hostname');

if ( $phphost == $host )
{ 
    $host = 'localhost';
}

// Establece la conexion con el servidor
$db_obj = new mysqli($host,$user,$pass,$dbname);

// Valida si la conexion fue exitosa o no
if (mysqli_connect_errno())
{
    printf("Can't connect to $host $dbname. Errorcode: %s\n",
    mysqli_connect_error());
    exit;
}
else
{
    //printf("Successful connection to $host, database $dbname.\n");
}

?>

