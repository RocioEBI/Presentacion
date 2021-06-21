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
                                  <button class="btn btn-tiyapuy">Buscar</button>
                                </div>
                              </div>
                            </div>
                        </div>

                    </div>


                    <!-- Basic example section start -->
                    <section id="basic-examples">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="ag-grid-btns d-flex justify-content-between flex-wrap mb-1">
                                                
                                                <div class="ag-btns d-flex flex-wrap">
                                                    
                                                    <div class="btn-export">
                                                        <button class="btn btn-primary ag-grid-export-btn">
                                                            Export as CSV
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="div">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th>lote</th>
                                                        <th scope="col">Suelo</th>
                                                        <th scope="col">Maquinaria</th>
                                                        <th scope="col">barbecheo</th>
                                                        <th scope="col">destierro</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody id="productosContainer">
                                                                
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myGrid" class="aggrid ag-theme-material"></div>
                                </div>
                            </div>
                        </div>
                    </section>
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

    <!-- END: Page JS-->
    
    <script>
        
        const productosContainer = document.getElementById('productosContainer');

       
        const onGetProductos = (callback) => db.collection('productos').onSnapshot(callback);

        

        //listar
        window.addEventListener('DOMContentLoaded', async(e) => {
   
            onGetProductos((querySnapshot) => {
                let cont = 1;
                productosContainer.innerHTML = '';
                querySnapshot.forEach(doc => {
                    const producto = doc.data();
                    producto.id = doc.id;
                    // console.log(producto);
                    productosContainer.innerHTML += `<tr>
                        <th scope="row">${cont}</th>
                        <td>${producto.lote}</td>
                        <td>${producto.proceso_1.suelo.ubicacion}</td>
                        <td>${producto.proceso_1.maquinaria.nombre}</td>
                        <td>${producto.proceso_1.fecha_barbechear}</td>
                        <td>${producto.proceso_1.fecha_desterrar}</td>                        
                    </tr>	`;
                   
                    cont ++;
                });
            });

            //vemos si etsa logueado
            if(localStorage.getItem('user'))
            {

            }else{
                //window.location.href = '/index.html';
            }
        });

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
