<?php $active = 'proceso2'; ?>
<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="">

    <meta name="author" content="Evolution Blockchain">
    <title>Tiyapay</title>
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
                    	<!-- <div class="col-md-6">
                    		<section id="number-tabs">
			                    <div class="row">
			                        <div class="col-12">
			                            <div class="card">
			                                <div class="card-header">
			                                    <h4 class="card-title text-center">Elegir y Prepara Suelo</h4>
			                                </div>
			                                <div class="card-content">
			                                    <div class="card-body">
			                                        
			                                        <form action="#" class="number-tab-steps wizard-circle">

			                                            <h6>Registrar Suelo</h6>
			                                            <fieldset>
			                                                
			                                            </fieldset>

			                                            <h6>Registrar Maquina</h6>
			                                            <fieldset>
			                                                
			                                            </fieldset>

			                                            <h6>Paso 3: Barbechar y desterrar</h6>
			                                            <fieldset>
	                                                        <div class="card">
																<div class="card-header">
																
														          <h4 class="card-title text-center"><strong>1.</strong>Elegir y Preparar Suelo</h4>
														        </div>
																<div class="card-body">
																	<form id="productoForm">
																		<div class="form-group">
																			<input type="text" id="lote" class="form-control form-control form-control-lg" placeholder="lote" autofocus required>
																		</div>
																		<div class="form-group">
																			<input type="text" id="suelo" class="form-control  form-control-lg" required placeholder="suelo">
																		</div>
																		<div class="form-group">
																			<input type="text" id="maquinaria" class="form-control form-control-lg" required placeholder="maquinaria">
																		</div>
																		<div class="form-group">
																			<input type="datetime-local" id="fecha_barbechear" class="form-control  form-control-lg" required placeholder="fecha barbechear">
																		</div>
																
																		<div class="form-group">
																			<input type="datetime-local" id="fecha_desterrar" class="form-control form-control-lg" required placeholder="fecha desterrar">
																		</div>
																
																		<button class="btn btn-primary" id="btn-producto-form">Registrar</button>
																
																	</form>
																</div>
															</div>
			                                            </fieldset>
			                                        </form>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </section>
                    	</div> -->

                    	<div class="col-md-8 card">
							<div class="card-header">
                                <h4 class="card-title">Seleccionar Lote</h4>
                            </div>
                            <div class="card-content">
                            	<div class="">
                                    <p class="card-text">Agregue el siguiente proceso al lote.</p>
									<div class="table-responsive">
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
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
								
						          <h4 class="card-title text-center"><strong>2.</strong> Sembrar</h4>
						        </div>
								<div class="card-body">
									<form id="productoForm">

										<div class="table-responsive border rounded px-1 ">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2" >Semilla</h6>
						                    
						                    <div class="table table-borderless">
						                         <div class="form-group mt-1">
						                         	<label for="origen">Origen de Semilla ( Pueblo )</label>
													<div class="form-group">
														<input type="text" id="origen" class="form-control" placeholder="Ejm: Cocharcas" autofocus required>
						                            </div>
												</div>
												<div class="form-group">
													<label for="variedad">Variedad ( Tipo )</label>
													<input type="text" id="variedad" class="form-control" placeholder="Ejm: Queqorani" autofocus required>
												</div>
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Insumo <span class="action-edit" data-toggle="tooltip" data-placement="right" data-original-title="Ingrediente principal del producto"><i class="feather icon-help-circle"></i></span> </h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="nombre">Nombre del insumo</label>
													<input type="text" id="nombre" class="form-control" required placeholder="Ejm: Papa Nativa">
												</div>
												<div class="form-group">
													<label for="caracteristicas">Características</label>
													<input type="text" id="caracteristicas" class="form-control" required placeholder="Ejm: Organico Natural">
					                            </div>
					                            <div class="form-group">
					                            	<label for="documento">Documento</label>
													<input type="text" id="documento" class="form-control" required placeholder="Ejem: Ficha 001">
					                            </div>
					                            <div class="form-group">
					                            	<label for="documento">Certificado</label>
													<input type="text" id="certificado" class="form-control" required placeholder="Ejm: Organico">
												</div>
						                    </div>
						                </div>

										<div class="form-group">
											<label for="id">Fecha Enterrar Semilla</label>
											<input type="datetime-local" id="fecha_enterrar" class="form-control" required placeholder="fecha enterrar">
										</div>

										<div class="form-group">
											<label for="fecha_aplicar">Aplicación del insumo</label>
											<input type="datetime-local" id="fecha_aplicar" class="form-control" required >
										</div>
								
										<button class="btn btn-primary" id="btn-producto-form">Actualizar</button>
								
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
    

    

	<script src="js/proceso2.js"></script>

</body>