



<!DOCTYPE html>
<html lang="en">
  
  <!-- head -->
    <?php include('head.php')  ?>
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
                <img src="../img/hero.png"/>
              </div>

            </div>
        </header>
        
        <!-- footer-->
        <?php include('footer.php'); ?>
        <!-- cierre footer-->


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
