<?php
  $productos = [

    ['nombre' => 'papas fritas', 'precio' => 100 , 'imagen' => 'img/papas.fritas.png'],
    ['nombre' => 'ensalada', 'precio' => 300 , 'imagen' => 'img/ensalada.png'],
    ['nombre' => 'pizza', 'precio' => 500 , 'imagen' => 'img/pizza.png'],
    ['nombre' => 'sanwich', 'precio' => 300 , 'imagen' => 'img/sanwich.png'],
    ['nombre' => 'galletitas', 'precio' => 200 , 'imagen' => 'img/galletitas.png'],
    ['nombre' => 'pancho', 'precio' => 200 , 'imagen' => 'img/pancho.png'],
    ['nombre' => 'dona', 'precio' => 100 , 'imagen' => 'img/dona.png'],



  ]


?>



<!DOCTYPE html>
<html lang="en">
  <!-- head -->
    <?php include('head.php')  ?>
    <!-- cierre head -->
    <body id="page-top">
        <!-- Navigation-->
        <?php include('navbar.php') ?>
        
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-6 mx-auto">
                <div class="text-left">
                    <h1 class="my-0">Comprá online desde tu casa.</h1>
                    <h2 class="mt-3 mb-5">¡Nosotros te lo llevamos!</h2>
                </div>
              </div>
              <div class="col-6">
                <img src="img/hero.png"/>
              </div>

            </div>
        </header>
        <!-- Productos-->
        <section class="productos-section" id="productos">
            <div class="container">
                <div class="row mx-auto text-center">
                  <div class="col-lg-8 mx-auto">
                      <h3 class="mb-4">nuestros productos</h3>
                  </div>
                </div>
                <div class="row align-items-end">


                <?php foreach($productos as $producto): ?>

                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="img/papas-fritas.png" />
                      <h4 class="text-left"><?php echo $producto['nombre'] ?></h4>
                      <h5 class="text-left">$<?php echo $producto['precio'] ?></h5>
                      <button class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                  <?php endforeach; ?>                  
                  </div>
                </div>
            </div>
        </section>
        <!-- Contacto-->
        <section class="contacto-section" id="contacto">
            <div class="container">
              <div class="row mx-auto text-center">
                <div class="col-lg-8 mx-auto">
                    <h3 class="mb-4">contacto</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                <form>
                  <div class="row mb-3">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Nombre" id="name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Apellido" id="lastname">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Teléfono" id="phone">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Email" id="email">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                      <textarea type="text" class="form-control" placeholder="Mensaje" id="message"></textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col">
                    </div>
                    <div class="col">
                      <button type="submit" class="btn btn-enviar">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
              </div>

            </div>
          <footer class="footer small text-center"><div class="container">Plantilla web didáctica - Potrero Digital 2021</div></footer>
        </section>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
