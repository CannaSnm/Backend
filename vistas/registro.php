<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    <?php include('head.php')  ?>
    <!-- cierre head -->
    <body id="page-top">
        
        <!-- Navigation
        <nav>
        <?php include('navbar.php') ?>
        </nav>
          Masthead-->
        <header class="masthead-login">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4">
                <div class="text-left">
                      <h1 class="my-0 txt-black mb-4">Registro</h1>   
                      <form method="post" action="../controladores/registrarse.php">  
                      <input type="text" name="DNI" class="form-control mb-4" placeholder="DNI" >
                      <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" >
                      <input type="text" name="apellido" class="form-control mb-4" placeholder="Apellido" >
                      <input type="email" name="email" class="form-control mb-4" placeholder="E-mail" >
                      <input type="text" name="telefono" class="form-control mb-4" placeholder="Teléfono" >
                      <input type="text" name="ciudad" class="form-control mb-4" placeholder="Ciudad" >
                      <input type="text" name="nro_calle" class="form-control mb-4" placeholder="N° Calle" >
                      <input type="password" name="password" class="form-control mb-4" placeholder="Contraseña" >
                      <input type="password" name="password2" class="form-control mb-4" placeholder="Confirme Contraseña" >
                     
                     <button type="submit" class="btn btn-login btn-block">Registrar</button>
                    </form>



                   
                </div>
              </div>


            </div>
        </header>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
