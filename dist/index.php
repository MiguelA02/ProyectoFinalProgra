
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Small Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
      <?php  include  ('nav.php')?>
    <body>
       
        <!-- Page Content-->
        <div class="container px-4 px-lg-5" id="home">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded w-100" src="https://e.rpp-noticias.io/normal/2022/12/05/035703_1356717.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Ronaldo confiesa que no logró “el sueño más grande y ambicioso” de su carrera</h1>
                    <p>La eliminación de Portugal en los cuartos de final del mundial de Catar 2022, implicó que Cristiano Ronaldo no logrará ser campeón del mundo, lo cual, fue reconocido por el crack luso en un posteo en sus redes sociales.</p>
                    <a class="btn btn-primary" href=".\noticias\ronaldo.php">Ver mas</a>
                </div>
            </div>
            
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Jóvenes ticas visitan la NASA para aprender de tecnología espacial</h2>
                            <img class="card-img" src="https://www.larepublica.net/storage/images/2022/12/07/20221207174234.2.jpg" alt="">
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="http://localhost/ProyectoFinalProgra/dist/noticias/jovenes.php#">Leer más</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Colocar más peajes para poder financiar asi la ruta 32 </h2>
                            <img class="card-img" src="https://www.larepublica.net/storage/images/2022/12/08/20221208095540.4.jpg" alt="">
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Leer más</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title">Sherman Güity es nominado a "Mejor Paratleta de América"</h2>
                            <img class="card-img" src="https://www.larepublica.net/storage/images/2022/12/07/20221207110410.guity111.jpg" alt="">
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Leer más</a></div>
                    </div>
                </div>
            </div>

            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded w-100" src="https://www.larepublica.net/storage/images/2022/12/11/20221211122607.014.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Costa Rica debe firmar tratados fiscales internacionales para evitar el cobro doble impuestos</h1>
                    <p>Para evitar la aplicación de un doble impuesto de renta en el país, es necesario hacer una mejor interpretación de la ley y al mismo tiempo, firmar tratados fiscales internacionales para que existan reglas claras, aseguró Mario Hidalgo, socio de impuestos y legal de Grant Thornton.</p>
                    <a class="btn btn-primary" href="#!">Ver mas</a>
                </div>
            </div>

        </div>

         <!--About-->
         <?php
            include ('about.php');
        ?>
        
              <!-- Contact-->
              <?php
            include ('contacto.php');
            ?>
              


        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
include ('user.php');
?>