<!DOCTYPE html>
<html>
  <head>
    <title>Goalkeepersfirst!</title>
<link rel="stylesheet" href="css/sidebar.css"/>
  </head>
  <body>
      
<?php

// Inicializa las variables necesarias para hacer la conexion al servidor MySql
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "Shoppingcart"

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

    <header>
<h1>Goalie Gear</h1>
</header>
<nav>
  <ul>
  <li><a href="homepage.php">Home </a></li>
  <li><a href="products.php">Products </a></li>
  <li><a href="cart.php">Cart</a></li>
  </ul>
</nav>
  </body>
</html>
