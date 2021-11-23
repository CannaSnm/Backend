<?php
  require("conexion-bd.php");
   $sql_hay_carrito = "SELECT * FROM carrito WHERE DNI='".$_POST['id_usuario']."'";
    // "SELECT * FROM carrito WHERE DNI=$_POST['id_usuario']"; 
   $result = mysqli_query($enlace, $sql_hay_carrito);
   if (!mysqli_num_rows($result) > 0) {
      // output data of each row
     
     //GENERAS UNO NUEVO      
     $insertar_en_carrito = "INSERT INTO carrito (DNI) VALUES ('".$_POST['id_usuario']."')";
     mysqli_query($enlace, $insertar_en_carrito);

     // traes de nuevo todos los carritos
     //los guardas en el resultado 
     $result = mysqli_query($enlace, $sql_hay_carrito);


     
   }
  
     while($row = mysqli_fetch_assoc($result)) {
        $carrito[] = $row;
      }
    //AGREGAR EL PRODUCTO A LA LISTA DEL CARRITO 
     $insertarProducto = "INSERT INTO producto_por_carrito(Id_carrito, Id_producto, Cantidad_producto) VALUES('".$carrito[0]['Id_carrito']."', '".$_POST['Id_producto']."', 1)";
     $result = mysqli_query($enlace, $insertarProducto);
 
  var_dump($carrito)
  


?>






<!-- // alert($result);
  if (mysqli_num_rows($result) > 0){
      //si hay carrito
      var_dump($result);  
  }else{ //si no hay carrito, genero uno nuevo
      $sql = "INSERT INTO carrito (DNI)  VALUES ('".$_POST['id_usuario']."')";
      // $last_id = $enlace->lastInsertId();
      $carrito = mysqli_query($enlace, $sql);

      echo mysql_insert_id();
       if ($carrito) {
          echo "carrito iniciado correctamente";
      }   
      else {
          echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
     }
    exit;
     -->