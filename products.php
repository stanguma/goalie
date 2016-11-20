<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/sidebar.css"/>
<style>
table, th, td {
     border: #666 1px solid;
}
</style>
</head>
<body>
  <header>
  <h1>Goalkeeper Gear</h1>
  </header>
  <nav>
  <ul>
  <li><a href="homepage.php">Home </a></li>
  <li><a href="products.php">Products </a></li>
  <li><a href="cart.php">Cart</a></li>
  </ul>
  </nav>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Shoppingcart";


$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
     die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM items";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr>
           <th>Image</th>
           <th>Name</th>
           
           </tr>";
     // fetch db data to table columns based on the structre
     while($row = $result->fetch_assoc()) {
         echo "<tr><td><img src='./img/".$row['image']."'></td>
                <td><a href='/details.php?p_id=".$row["p_id"]."'>". $row["name"]. "</a></td>

                </tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$connection->close();

?>



</body>
</html>
