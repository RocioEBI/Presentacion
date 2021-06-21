<?php $active = 'proceso3'; ?>
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
								
						          <h4 class="card-title text-center"><strong>3.</strong>MANEJAR CULTIVO</h4>
						        </div>
								<div class="card-body">
									<form id="productoForm">

										

										<div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Insumo <span class="action-edit" data-toggle="tooltip" data-placement="right" data-original-title="Ingrediente principal del producto"><i class="feather icon-help-circle"></i></span> </h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="nombre">Nombre del insumo</label>
													<input type="text" id="nombre" class="form-control" required placeholder="Ejm: Queqorani">
												</div>
												<div class="form-group">
													<label for="caracteristicas">Características</label>
													<input type="text" id="caracteristicas" class="form-control" required placeholder="Ejm: Papa Nativa">
					                            </div>
					                            <div class="form-group">
					                            	<label for="documento">Documento</label>
													<input type="text" id="documento" class="form-control" required placeholder="Ejem: Ficha 002">
					                            </div>
					                            <div class="form-group">
					                            	<label for="documento">Certificado</label>
													<input type="text" id="certificado" class="form-control" required placeholder="Ejm: Organico">
												</div>
						                    </div>
						                </div>

	
										<div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Aplicar Insumo</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_aplicar_insumo">Fecha de la aplicación del insumo</label>
													<input type="datetime-local" id="fecha_aplicar_insumo" class="form-control" required >
												</div>
												<div class="form-group">
													<label for="documento_aplicar_insumo">Documento</label>
													<input type="text" id="documento_aplicar_insumo" class="form-control" required placeholder="FICHA 003">
												</div>
												
						                    </div>
						                </div>

						                
										<div class="form-group">
											<label for="fecha_retirar_malesa">Fecha de retirar maleza</label>
											<input type="datetime-local" id="fecha_retirar_malesa" class="form-control" required placeholder="fecha barbechear">
										</div>

										<div class="form-group">
											<label for="fecha_distribuir_insumo">Fecha de distribución del insumo</label>
											<input type="datetime-local" id="fecha_distribuir_insumo" class="form-control" required >
										</div>

										<div class="form-group">
											<label for="fecha_acumular_insumo">Fecha de acumular insumo en planta</label>
											<input type="datetime-local" id="fecha_acumular_insumo" class="form-control" required >
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
    

	<script src="js/proceso3.js"></script>

</body>