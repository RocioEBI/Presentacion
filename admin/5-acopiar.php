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
                    
                    	<div class="col-md-8">
							<div class="card">
								<table class="table">
									<thead>
									  <tr>
										<th scope="col">#</th>
										<th scope="col">Suelo</th>
										<th scope="col">Maquinaria</th>
										<th scope="col">barbecheo</th>
										<th scope="col">destierro</th>
										<th>lote</th>
										<th>Acción</th>
									  </tr>
									</thead>
									<tbody id="productosContainer">
									  				  
									</tbody>
								  </table>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
								
						          <h4 class="card-title text-center"><strong>5.</strong>ACOPIAR Y PROCESAR</h4>
						        </div>
								<div class="card-body">
									<form id="productoForm">

										
										<div class="form-group">
						                    <label for="recepcionar_mp">Recepcionar Materia Prima</label>
											<input type="datetime-local" id="recepcionar_mp" class="form-control" required >
										</div>

										<div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Clasificar mp y semilla</h6>
						                    <div class="table table-borderless">
						                    	 <div class="form-group">
					                                <label for="fecha_clasificar_mp">Fecha de clasificación</label>
													<input type="datetime-local" id="fecha_clasificar_mp" class="form-control" required >
					                            </div>
						                    	<div class="form-group">
						                    		<label for="resultado_mp">Resultado de Materia Prima ( cantidad )</label>
													<input type="text" id="resultado_mp" class="form-control" required placeholder="resultado materia prima">
					                            </div>
						                         <div class="form-group">
						                         	<label for="descarte_mp">Descarte de Materia Prima ( cantidad )</label>
													<input type="text" id="descarte_mp" class="form-control" required placeholder="descarte materia prima">
												</div>
												<div class="form-group">
													<label for="resultado_semilla">Resultado ( cantidad )</label>
													<input type="text" id="resultado_semilla" class="form-control" required placeholder="resultado semilla">
					                            </div>
					                            <div class="form-group">
													<label for="descarte_semilla">Descarte de Semilla( cantidad )</label>
													<input type="text" id="descarte_semilla" class="form-control" required placeholder="descarte semilla">
					                            </div>
					                            
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Materia Prima</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="medio_transporte">Ubicación almacén</label>
													<input type="text" id="ubicacion_mp" class="form-control" required placeholder="Ubicacion de almacen mp">
												</div>
												<div class="form-group">
													<label for="fecha_almacenar_mp">Fecha almacenar materia prima</label>
													<input type="datetime-local" id="fecha_almacenar_mp" class="form-control" required >
												</div>
												<div class="form-group">
													<label for="caracteristicas_almacen_mp">Características almacén</label>
													<input type="text" id="caracteristicas_almacen_mp" class="form-control" required placeholder="caracteristicas almacen materia prima">
												</div>
												
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Semilla</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_almacenar_semilla">Fecha de Almacenar Semilla</label>
													<input type="datetime-local" id="fecha_almacenar_semilla" class="form-control" required >
												</div>
												<div class="form-group">
													<label for="ubicacion_semilla">Ubicación de Almacen de Semilla</label>
													<input type="text" id="ubicacion_semilla" class="form-control" required placeholder="Ubicacion de almacen mp">
												</div>
												<div class="form-group">
													<label for="caracteristicas_almacen_semilla">Características de almacén</label>
													<input type="text" id="caracteristicas_almacen_semilla" class="form-control" required placeholder="caracteristicas almacen de semilla">
												</div>
												
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Lavar Materia Prima</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_lavar_mp">Fecha de Lavar Materia Prima</label>
													<input type="datetime-local" id="fecha_lavar_mp" class="form-control" required >
												</div>
												<div class="form-group">
													<label for="origen_agua">Origen del agua</label>
													<input type="text" id="origen_agua" class="form-control" required placeholder="origen del agua">
												</div>												
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Semilla</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_ensacar_mp">Fecha de Ensacar Materia Prima</label>
													<input type="datetime-local" id="fecha_ensacar_mp" class="form-control" required >
												</div>
												<div class="form-group">
													<label for="tipo_malla">Tipo de Malla</label>
													<input type="text" id="tipo_malla" class="form-control" required placeholder="tipo de malla">
												</div>									
												
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Materia Prima Preparada</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="ubicacion_mp_preparada">Ubicación almacén</label>
													<input type="text" id="ubicacion_mp_preparada" class="form-control" required placeholder="Ubicacion de almacen mp preparada">
												</div>
												<div class="form-group">
													<label for="fecha_almacenar_mp_preparada">Fecha de Materia Prima Preparada</label>
													<input type="datetime-local" id="fecha_almacenar_mp_preparada" class="form-control" required >
												</div>
												<div class="form-group">
													<label for="caracteristicas_almacen_mp_preparada">Características de almacén de Materia Prima Preparada</label>
													<input type="text" id="caracteristicas_almacen_mp_preparada" class="form-control" required placeholder="caracteristicas almacen materia prima preparada">
												</div>
												
						                    </div>
						                </div>


	
										<div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Nombre del Medio de Transporte</h6>
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
													<label for="ID">ID transporte</label>
													<input type="text" id="ID" class="form-control" required placeholder="ID transporte">
												</div>
												
						                    </div>
						                </div>


										<div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Transportar Materia Prima Cosechada</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_transporte_m">Fecha y Hora de transporte MP Preparada</label>
													<input type="datetime-local" id="fecha_transporte_mp_preparada" class="form-control" required >
												</div>
												<div class="form-group">
													<label for="transportista">Transportista</label>
													<input type="text" id="transportista" class="form-control" required placeholder="Transportista">
												</div>
												<div class="form-group">
													<label for="condicionamiento_transporte">Condicionamiento transporte</label>
													<input type="text" id="condicionamiento_transporte" class="form-control" required placeholder="condicionemiento del transporte">
					                            </div>
																								
						                    </div>
						                </div>

						                
										
								
										<button class="btn btn-primary" id="btn-producto-form">Enviar</button>
								
									</form>
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
    

	<script src="js/proceso5.js"></script>

</body>