<?php
 require("conexion-bd.php");
 $sql_hay_carrito = "UPDATE `producto_por_carrito` SET `Cantidad_producto`='".$_POST['Cantidad_producto']."' WHERE producto_por_carrito.Id_carrito='".$_POST['id_carrito']."' AND producto_por_carrito.Id_producto='".$_POST['id_producto']."'";
  // "SELECT * FROM carrito WHERE DNI=$_POST['id_usuario']"; 
 $result = mysqli_query($enlace, $sql_hay_carrito);
 

?>