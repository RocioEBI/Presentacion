<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="">

    <meta name="author" content="Evolution Blockchain">
    <title>Tiyapuy</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">

     <!-- Styles-->
    <?php include 'includes/styles.php';?>

    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/aggrid.css">


</head>

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    
    <!-- Aqui va el sidebar -->

    <?php include 'includes/header-navbar.php';?>

    <?php include 'includes/header-navbar.php';?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper">
           
            <!-- aqui va breadcrumb -->

            <div class="h-100 ">
                <div class="content-body container ">
                     

                    
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10 col-sm-12 ">
                            <div class="card box-tiyapuy text-center bg-transparent">
                              <div class="card-content">
                               
                                <div class="card-body">
                                  <h4 class="card-title">Crear Trazabilidad</h4>
                                  <p class="card-text">Nuevo Proceso</p>
                                  <a href="start-process.php" class="btn btn-tiyapuy">INICIAR</a>
                                </div>
                              </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-10 col-sm-12 align-self-center">
                            <div class="card box-tiyapuy text-center bg-transparent">
                              <div class="card-content">
                                
                                <div class="card-body">
                                  <h4 class="card-title">Buscar</h4>
                                  <p class="card-text">Por codigo de Trazabilidad</p>
                                  <a href="blockchain.php" class="btn btn-tiyapuy">Buscar</a>
                                </div>
                              </div>
                            </div>
                        </div>

                    </div>


                    <!-- Basic example section start -->
                   
                    <!-- // Basic example section end -->
                </div>
            </div>
        </div>
    </div>
    <!-- End: Content-->

    <?php include 'includes/customizer.php';?>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include 'includes/footer.php';?>

    <?php include 'includes/scripts.php';?>

     <!-- BEGIN: Page JS-->
	  <script src="js/tokenverification.js"></script>
    <!-- END: Page JS-->
    
    

</body>
<!--  -->