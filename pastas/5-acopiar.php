<?php $active = 'proceso5'; ?>
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

    <?php include 'includes/horizontalMenu.php';?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper">
           
            <!-- aqui va breadcrumb -->

            <div class="">
                <div class="content-body">
                    <div class="row justify-content-center">
                    

						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
								
						          <h4 class="card-title text-center"><strong>5.</strong>ACOPIAR Y PROCESAR</h4>
						        </div>
								<div class="card-body">
									<form id="productoForm">
										<div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Recepcionar mp y control de calidad</h6>
						                    <div class="table table-borderless">
						                    	 <div class="form-group">
					                                <label for="fecha_recepcionar_mp">Fecha de clasificación</label>
													<input type="datetime-local" id="fecha_recepcionar_mp" class="form-control" required >
					                            </div>
						                    	<div class="form-group">
						                    		<label for="humedad_mp">Humedad mp</label>
													<input type="text" id="humedad_mp" class="form-control" required placeholder="Humedad de mp">
					                            </div>
						                         <div class="form-group">
						                         	<label for="formato_calidad">Formato de calidad</label>
													<input type="text" id="formato_calidad" class="form-control" required placeholder="Formato calidad">
												</div>
					                            
						                    </div>
						                </div>
                                        <div class="table-responsive border rounded px-1 my-1">
                                            <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar MP</h6>
                                            <div class="table table-borderless">
                                                <div class="form-group">
                                                    <label for="fecha_almacenar_mp">Fecha de Almacenar mp</label>
                                                    <input type="datetime-local" id="fecha_almacenar_mp" class="form-control" required >
                                                </div>
                                                <div class="form-group">
                                                    <label for="ubicacion_mp">Ubicación de Almacen de mp</label>
                                                    <input type="text" id="ubicacion_mp" class="form-control" required placeholder="Ubicación de almacen mp">
                                                </div>
                                                <div class="form-group">
                                                    <label for="caracteristicas_almacen_mp">Características de almacén</label>
                                                    <input type="text" id="caracteristicas_almacen_mp" class="form-control" required placeholder="caracteristicas almacen de semilla">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="table-responsive border rounded px-1 my-1">
                                            <h6 class="border-bottom py-1 mb-0 font-medium-2">Registrar Maquinaria</h6>
                                            <div class="table table-borderless">
                                                <div class="form-group">
                                                    <label for="nombre_maquinaria">Nombre de la maquina</label>
                                                    <input type="text" id="nombre_maquinaria" class="form-control"  placeholder="Nombre maquina">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ID_maquinaria">ID</label>
                                                    <input type="text" id="ID_maquinaria" class="form-control"  placeholder="ID maquinaria">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive border rounded px-1 my-1">
                                            <h6 class="border-bottom py-1 mb-0 font-medium-2">Registrar Envase</h6>
                                            <div class="table table-borderless">
                                                <div class="form-group">
                                                    <label for="formato_aprobacion_bolsa">Formato aprobación bolsa</label>
                                                    <input type="text" id="formato_aprobacion_bolsa" class="form-control"  placeholder="Formato aprobación bolsa">
                                                </div>
                                                <div class="form-group">
                                                    <label for="formato_verificado">Formato verificado</label>
                                                    <input type="text" id="formato_verificado" class="form-control"  placeholder="Formato verificado">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive border rounded px-1 my-1">
                                            <h6 class="border-bottom py-1 mb-0 font-medium-2">Separar Impuresas</h6>
                                            <div class="table table-borderless">
                                                <div class="form-group">
                                                    <label for="fecha_separar_impuresas">Fecha separar impuresas</label>
                                                    <input type="datetime-local" id="fecha_separar_impuresas" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="porc_saponina">Porcentaje de saponina</label>
                                                    <input type="text" id="porc_saponina" class="form-control"  placeholder="% saponina">
                                                </div>
                                                <div class="form-group">
                                                    <label for="temp_maquina">Temperatura maquinaria</label>
                                                    <input type="text" id="temp_maquina" class="form-control"  placeholder="25 °C">
                                                </div>
                                                <div class="form-group">
                                                    <label for="presion_maquina">Presión maquinaria</label>
                                                    <input type="text" id="presion_maquina" class="form-control"  placeholder="presión">
                                                </div>
                                                <div class="form-group">
                                                    <label for="humedad_producto">Humedad producto</label>
                                                    <input type="text" id="humedad_producto" class="form-control"  placeholder="Humedad">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive border rounded px-1 my-1">
                                            <h6 class="border-bottom py-1 mb-0 font-medium-2">Seleccionar tamaño, color y detención de metales mp</h6>
                                            <div class="table table-borderless">
                                                <div class="form-group">
                                                    <label for="fecha_seleccion">Formato aprobación bolsa</label>
                                                    <input type="datetime-local" id="fecha_seleccion" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="descarte_gravimetrica">Descarte por gravimétrica</label>
                                                    <input type="text" id="descarte_gravimetrica" class="form-control"  placeholder="descarte">
                                                </div>
                                                <div class="form-group">
                                                    <label for="descarte_optico">Descarte por optico</label>
                                                    <input type="text" id="descarte_optico" class="form-control"  placeholder="descarte">
                                                </div>
                                                <div class="form-group">
                                                    <label for="descarte_dete_metales">Descarte por detención de metales</label>
                                                    <input type="text" id="descarte_dete_metales" class="form-control"  placeholder="descarte">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive border rounded px-1 my-1">
                                            <h6 class="border-bottom py-1 mb-0 font-medium-2"> Envasar mp</h6>
                                            <div class="table table-borderless">
                                                <div class="form-group">
                                                    <label for="fecha_envasado">Fecha de envasado</label>
                                                    <input type="datetime-local" id="fecha_envasado" class="form-control" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive border rounded px-1 my-1">
                                            <h6 class="border-bottom py-1 mb-0 font-medium-2"> Almacenar mp preparada</h6>
                                            <div class="table table-borderless">
                                                <div class="form-group">
                                                    <label for="fecha_almacenar">Fecha de Almacenamiento mp preparada</label>
                                                    <input type="datetime-local" id="fecha_almacenar" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="ubic_almacen_mp_preparada">Ubicación de Almacen</label>
                                                    <input type="datetime-local" id="ubic_almacen_mp_preparada" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="humedad_almacen_mpp">Humedad de Almacen</label>
                                                    <input type="datetime-local" id="humedad_almacen_mpp" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="temp_almacen_mpp">Temperatura de Almacen</label>
                                                    <input type="datetime-local" id="temp_almacen_mpp" class="form-control" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive border rounded px-1 my-1">
                                            <h6 class="border-bottom py-1 mb-0 font-medium-2">Registar Medio de Transporte</h6>
                                            <div class="table table-borderless">
                                                <div class="form-group">
                                                    <label for="medio_transporte">Nombre de la empresa</label>
                                                    <input type="text" id="medio_transporte" class="form-control" required placeholder="Ejm: Trans Service">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nombre">Medio de transporte</label>
                                                    <input type="text" id="nombre" class="form-control" required placeholder="Ejm: Terrestre">
                                                </div>
                                                <div class="form-group">
                                                    <label for="ID_mt">ID transporte</label>
                                                    <input type="text" id="ID_mt" class="form-control" required placeholder="ID transporte">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="table-responsive border rounded px-1 my-1">
                                            <h6 class="border-bottom py-1 mb-0 font-medium-2">Transportar mp preparada</h6>
                                            <div class="table table-borderless">
                                                <div class="form-group">
                                                    <label for="fecha_trans_mpp">Fecha mp preparada</label>
                                                    <input type="datetime-local" id="fecha_trans_mpp" class="form-control" required >
                                                </div>
                                                <div class="form-group">
                                                    <label for="transportista">Transportista</label>
                                                    <input type="text" id="transportista" class="form-control" required placeholder="Ejm: Juan Perez">
                                                </div>
                                                <div class="form-group">
                                                    <label for="condi_trans">condicionamiento de transporte</label>
                                                    <input type="text" id="condi_trans" class="form-control" required placeholder="condicionamiento">
                                                </div>
                                                <div class="form-group">
                                                    <label for="hoja_tec_cal">Hoja tecnica cal grano</label>
                                                    <input type="text" id="hoja_tec_cal" class="form-control" required placeholder="hoja tecnica">
                                                </div>

                                            </div>
                                        </div>

										<button class="btn btn-primary" id="btn-producto-form">Enviar</button>
								
									</form>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card">
								<table class="table">
									<thead>
									  <tr>
										<th scope="col">#</th>
										<th scope="col">Suelo</th>
										<th scope="col">Maquinaria</th>
										<th>lote</th>
										<th>Acción</th>
									  </tr>
									</thead>
									<tbody id="productosContainer">
									  				  
									</tbody>
								  </table>
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
    

	<script src="js/proceso5.js"></script>

</body>