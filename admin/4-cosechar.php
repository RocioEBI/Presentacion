<?php $active = 'proceso4'; ?>
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
								
						          <h4 class="card-title text-center"><strong>4.</strong>COSECHAR</h4>
						        </div>
								<div class="card-body">
									<form id="productoForm">

										

										<div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Escarbar y clasificar Materia Prima </h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_escarbar_mp">Fecha de Escapar MP</label>
													<input type="datetime-local" id="fecha_escarbar_mp" class="form-control" required placeholder="fecha barbechear">
												</div>
												<div class="form-group">
													<label for="resultado">Resultado ( cantidad )</label>
													<input type="text" id="resultado" class="form-control" required placeholder="Ejm: 222222">
					                            </div>
					                            <div class="form-group">
													<label for="descarte">Descarte ( cantidad )</label>
													<input type="text" id="descarte" class="form-control" required placeholder="descarte medio transporte">
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
						                         	<label for="fecha_transporte_m">Fecha y Hora de transporte</label>
													<input type="datetime-local" id="fecha_transporte_mp" class="form-control" required >
												</div>
												<div class="form-group">
													<label for="transportista">Transportista</label>
													<input type="text" id="transportista" class="form-control" required placeholder="persona que transporte">
												</div>
																								
						                    </div>
						                </div>

						                
										<div class="form-group">
						                    <label for="fecha_cargar_mp_medio_trans">Fecha de Carga MP a Transporte</label>
											<input type="datetime-local" id="fecha_cargar_mp_medio_trans" class="form-control" required >
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
    

	<script src="js/proceso4.js"></script>

</body>