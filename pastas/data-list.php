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

    <?php include 'includes/header-navbar.php';?>
    <?php include 'includes/horizontalMenu.php';?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Papitas</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">E/P Suelo</a>
                                    </li>
                                    <li class="breadcrumb-item active">Listar
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                            <div class="btn-group dropdown actions-dropodown">
                                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>ID</th>
                                    <th>AGRICULTOR</th> 
                                    <th>LOTE</th>
                                    <th>ESTADO</th>
                                    <th>FECHA</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody id="renderSuelo">
                                <tr>
                                    <td></td>
                                    <td class="product-name">014402</td>
                                    <td class="product-category">Jose Caseres</td>
                                    <td>
                                        LT 123456789
                                    </td>
                                    <td>
                                        <div class="chip chip-warning">
                                            <div class="chip-body">
                                                <div class="chip-text">Pendiente</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">11/08/2020</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="product-name">014403</td>
                                    <td class="product-category">Emilio Tudap</td>
                                    <td>
                                        LT 123456789
                                    </td>
                                    <td>
                                        <div class="chip chip-success">
                                            <div class="chip-body">
                                                <div class="chip-text">Procesdo</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">11/08/220</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
                                </tr>
                                
                                
                              
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">Elegir y preparar suelo</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col">
                                            <label class="text-bold-400 font-medium-1" for="data-name">Numero de Operacion</label>
                                            <input type="text" class="form-control" id="data-name" readonly="readonly" value="000000">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label class="text-bold-400 font-medium-1" for="data-name">Agriculor</label>
                                            <input type="text" class="form-control" id="agricultor">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-category" class="text-bold-400 font-medium-1"> Suelo </label>
                                            <span class="action-edit" data-toggle="tooltip" data-placement="right" data-original-title="Registrar Suelo"><i class="feather icon-plus-circle"></i></span>
                                            <select class="form-control" id="sueloid">
                                                <option>Etapa 01 - Edgar Rosales</option>
                                                <option>Etapa B - Pricila Robles</option>
                                                <option>Etapa W14 - Josefino Sola</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-status" class="text-bold-400 font-medium-1">Maquinas</label>
                                             <span class="action-edit" data-toggle="tooltip" data-placement="right" data-original-title="Registrar Nueva Maquina"><i class="feather icon-plus-circle"></i></span>

                                            <select class="form-control" id="maquinariaid">
                                                <option>Maquina 01</option>
                                                <option>Maquina 02</option>
                                                <option>Maquina 03</option>
                                                <option>Maquina 04</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-price" class="text-bold-400 font-medium-1">Fecha de Barbechear suelo</label>
                                            <input type="datetime-local" class="form-control form-control-lg" id="fechabarbecheo">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-price" class="text-bold-400 font-medium-1">Fecha Desterrar,  nivelar y surcar suelo</label>
                                            <input type="datetime-local" class="form-control form-control-lg" id="fechadesterrar">
                                        </div>
                                        <!-- <div class="col-sm-12 data-field-col data-list-upload">
                                            <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                                <div class="dz-message">Upload Image</div>
                                            </form>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button class="btn btn-primary" onclick="addProceso()">Registar</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

     <?php include 'includes/customizer.php';?>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include 'includes/footer.php';?>

    <?php include 'includes/scripts.php';?>


</body>
<!-- END: Body-->

</html>