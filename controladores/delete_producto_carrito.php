<?php
require("conexion-bd.php");
$sql_hay_carrito = "DELETE FROM `producto_por_carrito` WHERE producto_por_carrito.Id_carrito='".$_POST['id_carrito']."' AND producto_por_carrito.Id_producto='".$_POST['id_producto']."'";
$result = mysqli_query($enlace, $sql_hay_carrito);
?>