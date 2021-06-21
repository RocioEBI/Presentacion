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

            <div class="">
                <div class="content-body">
                    <div class="s">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card process-item  text-center bg-white">
                                    <div class="card-content">
                                        <div class="card-body" onclick="ver_vista(1);">
                                            <a href="er-suelo.php">
                                                <h4 class="card-title">1. Elegir y preparar suelo</h4>
                                                <p class="card-text">0 procesos</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card process-item text-center bg-white">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <a href="2-sembrar.php">
                                                <h4 class="card-title">2. Sembrar</h4>
                                                <p class="card-text">0 procesos</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card process-item text-center bg-white">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <a href="3-cultivar.php">
                                                <h4 class="card-title">3. Manejar cultivo</h4>
                                                <p class="card-text">0 procesos</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card process-item text-center bg-white">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <a href="4-cosechar.php">
                                                <h4 class="card-title">4. Cosechar.</h4>
                                                <p class="card-text">0 procesos</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card process-item text-center bg-white">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <a href="5-acopiar.php">
                                                <h4 class="card-title">5. Acopiar y procesar</h4>
                                                <p class="card-text">0 procesos</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card process-item text-center bg-white">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <a href="6-procesar.php">
                                                <h4 class="card-title">6. Producir.</h4>
                                                <p class="card-text">0 procesos</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: Content-->

  

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include 'includes/footer.php';?>

    <?php include 'includes/scripts.php';?>

    <script>
        window.addEventListener('DOMContentLoaded', e => {                 
            //vemos si etsa logueado
            if(localStorage.getItem('user'))
            {
                getUserAuth();
            }else{
                window.location.href = 'login.php';
            }
        });
    </script>

</body>
