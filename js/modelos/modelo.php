<?php
function get_carrito_db() {
require('../controladores/conexion-bd.php');
    // $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "e-shop";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

$sql = "SELECT carrito.Id_carrito, producto_por_carrito.Cantidad_producto, producto_por_carrito.Id_producto, productos.Titul, productos.URL_imagen, productos.Descripción, productos.Precio FROM carrito INNER JOIN producto_por_carrito ON producto_por_carrito.Id_carrito = carrito.Id_carrito INNER JOIN productos ON productos.Id_producto = producto_por_carrito.Id_producto WHERE carrito.DNI='68828306'";
$result = mysqli_query($enlace, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   $carrito[] = $row;
  }
} else {
  echo "0 results";
}
return $carrito;
mysqli_close($enlace);
}

function getProducto_carrito(){


}
?>