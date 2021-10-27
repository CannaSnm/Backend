<?php
 
    function traer_productos(){
      $productos = [

        ['nombre' => 'papas fritas', 'precio' => 100 , 'imagen' => 'img/papas.fritas.png'],
        ['nombre' => 'ensalada', 'precio' => 300 , 'imagen' => 'img/ensalada.png'],
        ['nombre' => 'pizza', 'precio' => 500 , 'imagen' => 'img/pizza.png'],
        ['nombre' => 'sanwich', 'precio' => 300 , 'imagen' => 'img/sanwich.png'],
        ['nombre' => 'galletitas', 'precio' => 200 , 'imagen' => 'img/galletitas.png'],
        ['nombre' => 'pancho', 'precio' => 200 , 'imagen' => 'img/pancho.png'],
        ['nombre' => 'dona', 'precio' => 100 , 'imagen' => 'img/dona.png'],



      ];
    return($productos);
}
?>