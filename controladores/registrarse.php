<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$data = $_POST;


// echo json_encode($data['password']); 
if($data['password'] != $data['password2']){
    echo "las contraseñas no coinciden";
    header("refresh:2;url=../vistas/registro.php");
}
    else{
    $data['password'] = password_hash ($data['password'], PASSWORD_DEFAULT);
} 
unset ($data['password2']);
$data['habilitado'] = true;

require("conexion-bd.php");

$sql = "INSERT INTO usuarios (DNI, Apellido, Nombre, Mail, Telefono, Calle, Ciudad, Password, Habilitado)
VALUES ('".$data['DNI']."', '".$data['nombre']."', '".$data['apellido']."',  '".$data['email']."',  '".$data['telefono']."',  '".$data['nro_calle']."',  '".$data['ciudad']."',  '".$data['password']."',  '".$data['habilitado']."' )";

if (mysqli_query($enlace, $sql)) {
    echo "usuario registrado correctamente";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
  }





// $hash = '$2y$10$nrjjm97YVgnSFp.v45PmCuwMFJqZj\/\/2qnbDwsns.akhup4dmXhdq';
// if (password_verify('asdasdasd', $hash)) {
//    echo '¡La contraseña es válida!';
// } else {
//    echo 'La contraseña no es válida.';
// }


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