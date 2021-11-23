<?php
 include('../js/modelos/modelo.php');

    function traer_productos() {
require("conexion-bd.php");
      $sql = "SELECT * FROM productos WHERE Habilitado=1";
      $result = mysqli_query($enlace, $sql);
      // $productos = [

      //   ['nombre' => 'papas fritas', 'precio' => 100 , 'imagen' => 'img/papas.fritas.png'],
      //   ['nombre' => 'ensalada', 'precio' => 300 , 'imagen' => 'img/ensalada.png'],
      //   ['nombre' => 'pizza', 'precio' => 500 , 'imagen' => 'img/pizza.png'],
      //   ['nombre' => 'sanwich', 'precio' => 300 , 'imagen' => 'img/sanwich.png'],
      //   ['nombre' => 'galletitas', 'precio' => 200 , 'imagen' => 'img/galletitas.png'],
      //   ['nombre' => 'pancho', 'precio' => 200 , 'imagen' => 'img/pancho.png'],
      //   ['nombre' => 'dona', 'precio' => 100 , 'imagen' => 'img/dona.png'],



      // ];
    return($result);
}
function traer_carrito(){
// require("conexion-bd.php");

    $carrito = get_carrito_db();
//$sql = "INSERT INTO carrito (DNI)
//VALUES ('".$data['DNI']"')";

// if (mysqli_query($enlace, $sql)) {
//     echo "usuario registrado correctamente";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
//   }ler
// echo 'algo';]]alert('algo'); 
// echo $_SESSION["usuarioLogueado"];
return $carrito;
}
?>