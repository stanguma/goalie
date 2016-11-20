<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "Shoppingcart";


$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
     die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $id = $_REQUEST['p_id'];
}

$sql = "SELECT * FROM items WHERE p_id={$id}";
$result = $connection->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 0.5px solid black;
}
</style>
</head>
<body>

<?php
if($result->num_rows > 0) {
     echo "<table><tr><th>ID</th>
           <th>Name</th>
           <th>Description</th>
           <th>Image</th>
           <th>Price</th>
          <th>Quantity</th>

           </tr>";
     // fetch db data to table columns based on the structre
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["p_id"]. "</td>
                <td><a href='/products.php?id=".$row["p_id"]."'>". $row["name"]. "</a></td>
                <td>" . $row["description"]. "</td>
                <td><img src='./img/".$row['image']."'></td>
                <td>" . $row["price"] . "</td>
                <td><form id='form1' name='form1' method='post' action='cart.php'>
        <input type='hidden' name='p_id' id='p_id' value='{$row["p_id"]}' />
        <input type='text' name='quantity' id='quantity' value='1' />
        <input type='submit' name='button' id='button' value='Add to Cart' />
      </form></td>
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
