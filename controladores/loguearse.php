<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$data = $_POST;



$enlace = mysqli_connect("localhost", "root", "", "curso_backend");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


  $sql = "SELECT * FROM usuario WHERE DNI= '".$data["DNI"]."'";


  $result = mysqli_query($enlace, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($usuario = mysqli_fetch_assoc($result)) {
      echo "DNI: " . $usuario["DNI"]. " - Nombre: " . $usuario["nombre"]. " " . $usuario["apellido"]. "<br>";
      $hash = $usuario['password'];


          if (password_verify($data['password'], $hash)) {
            echo '¡La contraseña es válida!';
        } else {
            echo 'La contraseña no es válida.';
        }
       
    }
  } else {
    echo "Su usuario no se encuentra registrado.";
  }

  





 
 


?>



 <?php
// $data = $_POST;

//  $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);



// $hash ='$2y$10$HMCMTS/xkQaIcBhLnlWMRu/V64.jZwxYsyfKPKy5PXtLHPyGSFIxy';



// if (password_verify('123123', $hash)) {
//     echo '¡La contraseña es válida!';
// } else {
//     echo 'La contraseña no es válida.';
// }


 // ?>