<?php $active = 'proceso1'; ?>
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
								
						          <h4 class="card-title text-center"><strong>1.</strong>Elegir y Preparar Suelo</h4>
						        </div>
								<div class="card-body">
									<form id="productoForm">

										<div class="">
											<div class="form-group">
												<label for="lote" class="text-bold-400 font-medium-1">LOTE</label>
												<span class="waves-effect waves-light" data-toggle="popover" data-content="Código que los usuarios ingresaran en la pagina para conocer la trazabilidad del producto. " data-trigger="hover" data-original-title="Numero de Lote"><i class="feather icon-help-circle"></i></span>

												<input type="text" id="lote" class="form-control form-control-lg" placeholder="LT 123456789" autofocus required>
											</div>
										</div>

										<div class="table-responsive border rounded px-1 ">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2" >Datos del Suelo <span class="action-edit" data-toggle="tooltip" data-placement="right" data-original-title="Datos de la Parcela"><i class="feather icon-help-circle"></i></span> </h6>
						                    
						                    <div class="table table-borderless">
												<div class="form-group">
													<label for="dueno">DUEÑO</label>
													<input type="text" id="dueno" class="form-control" required placeholder="Ejm: Alex">
												</div>
						                        <div class="form-group mt-1">
						                         	<label for="ubicacion">UBICACIÓN DEL SUELO ( Pueblo )</label>
													<input type="text" id="ubicacion" class="form-control" required placeholder="Ejm: Condorcoccha">
												</div>
												<div class="form-group">
													<label for="dimension">DIMENSIONES ( Hectárea )</label>
													<input type="text" id="dimension" class="form-control" required placeholder="Ejm: 1">
												</div>
												<div class="form-group">
													<label for="altitud">ALTITUD (msnm) </label>
													<input type="text" id="altitud" class="form-control" required placeholder="Ejm: 4300">
												</div>
												<div class="form-group">
													<label for="anios_descanso">AÑOS DE DESCANSO</label>
													<input type="text" id="anios_descanso" class="form-control" required placeholder="Ejm: 1">
												</div>
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Datos de la Máquina</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="nombre">NOMBRE</label>
													<input type="text" id="nombre" class="form-control" required placeholder="Ejm: Tractor Toyota x400">
												</div>
												<div class="form-group">
													<label for="id">ID DE LA MÁQUINA</label>
													<input type="text" id="ID" class="form-control" required placeholder="Ejm: X4000S5">
												</div>
												
						                    </div>
						                </div>

										<div class="form-group">
													<label for="id">FECHA DE ARAR</label>
													<input type="datetime-local" id="fecha_arar" class="form-control" required placeholder="fecha barbechear">
										</div>

										<div class="form-group">
											<label for="fecha_desterrar">FECHA NIVELAR Y SURCAR</label>
											<input type="datetime-local" id="fecha_nivelar" class="form-control" required placeholder="fecha desterrar">
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
	<script src="js/proceso1.js"></script>

</body>