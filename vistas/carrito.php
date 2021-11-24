<!DOCTYPE html>
<html lang="en">
     <!-- head -->
     <?php include('../controladores/funciones.php');  ?>
     <?php include('head.php');  ?>
      <?php $carrito = traer_carrito();
         
       ?> 

    <!-- cierre head -->
    <body id="page-top">
       <!-- Navigation-->
       <?php 
          if ($_SESSION['usuarioLogueado'] != "") {
             include('navbar_logueado.php'); 
          }
          else {
            include('navbar_nologueado.php');
          }?>
        <!-- cierre nav--> 
        <!-- Carrito-->
        <section class="carrito-section" id="carrito">
            <div class="container">
                <div class="row mx-auto text-center">
                  <h3 class="mb-4"><i class="fas fa-shopping-basket fa-lg pr-3"></i>carrito de compras</h3>
                </div>
                <div class="row">

                  <div class="container">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="col-1"></th>
                          <th class="col-6 text-left">producto</th>
                          <th class="col-1 text-center">cantidad</th>
                          <th class="col-2 text-center">precio</th>
                          <th class="col-2 text-center">subtotal</th>
                        </tr>
                      </thead>
                      <tbody> 
                        <?php foreach($carrito as $producto): ?> 
                        <tr>                       
                          <td class="align-middle"> <img alt="<?php echo $producto['Titul'] ?>"  src=<?php echo $producto['URL_imagen'] ?>> </td>
                          <td class="align-middle text-left"><?php echo $producto['Titul'] ?><?php echo $producto['Cantidad_producto'] ?></td>
                          <td class="align-middle text-center">
                            <input type="number" class="form-control input-cantidad" data-id-producto="<?php echo $producto['Id_producto'] ?>" data-id-carrito="<?php echo $producto['Id_carrito'] ?>" min="0" placeholder="00" value= "<?php echo $producto['Cantidad_producto']?>">
                          </td>
                        
                          <td class="align-middle text-center">$ <?php echo $producto['Precio'] ?></td>
                          <td class="align-middle text-center">$ <?php echo $producto['Cantidad_producto'] * $producto['Precio'] ?></td>
                        </tr>  
                        <?php endforeach; ?>
                        </tbody>
                    </table>


                  </div>
                </div>
                <div class="row justify-content-end">
                  <button class="btn btn-comprar">Iniciar compra</button>
                </div>
            </div>
        </section>
        <div class="fluid-container img-footer"></div>



        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>
