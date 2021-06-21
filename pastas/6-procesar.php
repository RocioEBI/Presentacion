<?php $active = 'proceso6'; ?>
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
 <script src='../node_modules/js-sha256/build/sha256.min.js'></script>


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
                    

						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
								
						          <h4 class="card-title text-center"><strong>6.</strong>PRODUCIR</h4>
						        </div>
								<div class="card-body">
									<form id="productoForm">

										
										<div class="form-group">
						                    <label for="recepcionar_mp">Recepcionar Materia Prima</label>
											<input type="datetime-local" id="recepcionar_mp" class="form-control" required >
										</div>

										<div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Control de calidad de Materia Prima</h6>
						                    <p>Ingreso a almacén</p>
						                    <div class="table table-borderless">
						                    	 <div class="form-group">
					                                <label for="fecha_controlar_calidad_ingreso">Fecha de controlar calidad ingreso</label>
													<input type="datetime-local" id="fecha_controlar_calidad_ingreso" class="form-control" >
					                            </div>
						                    	<div class="form-group">
						                    		<label for="control_calidad_ingreso">Control de Calidad </label>
													<input type="text" id="control_calidad_ingreso" class="form-control"  placeholder="doc. control calidad">
					                            </div>
						                         
					                            
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Materia Prima</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="ubicacion_mp_preparada">Ubicación almacén</label>
													<input type="text" id="ubicacion_mp_preparada" class="form-control"  placeholder="Ubicacion de almacen mp preparada">
												</div>
												<div class="form-group">
													<label for="fecha_almacenar_mp_preparada">Fecha almacenar materia prima</label>
													<input type="datetime-local" id="fecha_almacenar_mp_preparada" class="form-control"  >
												</div>
												<div class="form-group">
													<label for="fifo_fefo_almacenar_mp">FIFO/FEFO</label>
													<input type="text" id="fifo_fefo_almacenar_mp" class="form-control"  placeholder="FIFO/FEFO de almacenar mp">
												</div>
												<div class="form-group">
													<label for="lote">Lote</label>
													<input type="text" id="lote" class="form-control"  placeholder="Lote">
												</div>
												<div class="form-group">
													<label for="peso">Peso</label>
													<input type="text" id="peso" class="form-control"  placeholder="Peso">
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
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Registrar Maquinaria</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_lavar_mp">Nombre de la maquina</label>
													<input type="text" id="nombre_maquinaria" class="form-control"  placeholder="nombre maquina">
												</div>
												<div class="form-group">
													<label for="origen_agua">ID</label>
													<input type="text" id="ID_maquinaria" class="form-control"  placeholder="ID maquinaria">
												</div>												
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Insumo</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="nombre_insumo">Nombre_insumo</label>
													<input type="text" id="nombre_insumo" class="form-control"  placeholder="nombre insumo">
												</div>
												<div class="form-group">
													<label for="caracteristicas">Características</label>
													<input type="text" id="caracteristicas" class="form-control"  placeholder="caracteristicas insumo">
												</div>
												<div class="form-group">
													<label for="documento">Documentos</label>
													<input type="text" id="documento" class="form-control"  placeholder="documento insumo">
												</div>
												<div class="form-group">
													<label for="certificado">Certificado</label>
													<input type="text" id="certificado" class="form-control"  placeholder="certificado insumo">
												</div>										
												
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Registrar Empaque Primerio</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="calidad_empaque">Calidad empaque</label>
													<input type="text" id="calidad_empaque" class="form-control"  placeholder="calidad del empaque">
												</div>
												<div class="form-group">
													<label for="hermeticidad">Hermeticidad</label>
													<input type="text" id="hermeticidad" class="form-control"  placeholder="Hermeticidad">
												</div>												
						                    </div>
						                </div>
						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Registrar Caja</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="calidad_caja">Calidad empaque</label>
													<input type="text" id="calidad_caja" class="form-control"  placeholder="calidad de la caja">
												</div>											
						                    </div>
						                </div>

	
										<div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Controlar calidad mp salida almacén</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_controlar_calidad_salida">Fecha Control de calidad de Salida</label>
													<input type="datetime-local" id="fecha_controlar_calidad_salida" class="form-control" >
												</div>
												<div class="form-group">
													<label for="nombre">Control de calidad (doc)</label>
													<input type="text" id="control_calidad_salida" class="form-control"  placeholder="documento control de calidad salida">
												</div>
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Lavar Materia Prima</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_lav_reb_pel_mp">Fecha de Lavar Pelar Rebanar MP</label>
													<input type="datetime-local" id="fecha_lav_reb_pel_mp" class="form-control" >
												</div>
												<div class="form-group">
													<label for="fecha_lav_reb_pel_mp">Espesor hojuela cruda</label>
													<input type="text" id="espesor_hojuela_cruda" class="form-control"  placeholder="espesor hojuela cruda">
												</div>												
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Freír Materia Prima</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_freir_mp">Fecha de Freir Materia Prima</label>
													<input type="datetime-local" id="fecha_freir_mp" class="form-control" >
												</div>
												<div class="form-group">
													<label for="rendimiento_mp">Rendimiento mp</label>
													<input type="text" id="rendimiento_mp" class="form-control"  placeholder="rendimiento mp">
												</div>
												<div class="form-group">
													<label for="temperatura">Temperatura</label>
													<input type="text" id="temperatura" class="form-control"  placeholder="temperatura">
												</div>
												<div class="form-group">
													<label for="calidad_aceite">Calidad aceite</label>
													<input type="text" id="calidad_aceite" class="form-control"  placeholder="calidad del aceite">
												</div>
												<div class="form-group">
													<label for="calidad_aceite">Control organoléptico</label>
													<input type="text" id="control_organoleptico" class="form-control"  placeholder="control organoleptico">
												</div>											
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Adicionar sal a hojuela frita</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_lav_reb_pel_mp">Fecha de adicionar Sal</label>
													<input type="datetime-local" id="fecha_adic_sal_hojue" class="form-control" >
												</div>
												<div class="form-group">
													<label for="porc_sal_hojuela">Porcentaje</label>
													<input type="text" id="porc_sal_hojuela" class="form-control"  placeholder="porcentaje de sal en la hojuela">
												</div>												
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Empacar producto</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_lav_reb_pel_mp">Fecha de empacar</label>
													<input type="datetime-local" id="fecha_empacar_producto" class="form-control" >
												</div>										
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Empacar producto</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_preparar_caja">Preparar caja</label>
													<input type="datetime-local" id="fecha_preparar_caja" class="form-control" >
												</div>										
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Producto</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_lav_reb_pel_mp">Ubicación Almacén</label>
													<input type="text" id="ubicacion_almacen_producto" class="form-control"  placeholder="ubicacion almacen producto">
												</div>
												<div class="form-group">
													<label for="porc_sal_hojuela">Fecha</label>
													<input type="datetime-local" id="fecha_almacenar_producto" class="form-control" >
												</div>
												<div class="form-group">
													<label for="porc_sal_hojuela">FIFO / FEFO</label>
													<input type="text" id="fifo_fefo_almacenar_producto" class="form-control"  placeholder="FIFO/FEFO almacenar producto">
												</div>													
						                    </div>
						                </div>

						                <div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Registrar Medio de Transporte</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="nombre_transporte">Nombre de Transporte</label>
													<input type="text" id="nombre_transporte" class="form-control"  placeholder="nombre transporte">
												</div>
												<div class="form-group">
													<label for="medio_transporte">Medio de transporte</label>
													<input type="text" id="medio_transporte" class="form-control"  placeholder="medio transporte">
												</div>	
												<div class="form-group">
													<label for="ID_transporte">ID Transporte</label>
													<input type="text" id="ID_transporte" class="form-control"  placeholder="ID transporte">
												</div>
																								
						                    </div>
						                </div>


										<div class="table-responsive border rounded px-1 my-1">
						                    <h6 class="border-bottom py-1 mb-0 font-medium-2">Transportar Producto</h6>
						                    <div class="table table-borderless">
						                         <div class="form-group">
						                         	<label for="fecha_transporte_m">Fecha y Hora de transporte MP Preparada</label>
													<input type="datetime-local" id="fecha_transportar_producto" class="form-control" >
												</div>
												<div class="form-group">
													<label for="transportista">Transportista</label>
													<input type="text" id="transportista" class="form-control"  placeholder="transportista">
												</div>
												<div class="form-group">
													<label for="condicion_higienica_transporte">Condicionamiento transporte</label>
													<input type="text" id="condicion_higienica_transporte" class="form-control"  placeholder="condicion higiénica del transporte">
					                            </div>
					                            <div class="form-group">
													<label for="nivel_servicio">Nivel de servicio</label>
													<input type="text" id="nivel_servicio" class="form-control"  placeholder="Nivel de servicio">
					                            </div>
																								
						                    </div>
						                </div>
<?php

function stampizReg($url)
    {
$url = "https://stampiz.eu/reg";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = <<<DATA
{ 
 "account_name": "omarebi", 
 "email": "omarebi@foobar.com", 
 "password": "Dontusethispassword1" 
 }
DATA;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
return ($resp);


    }
    function stampizLogin($url){

        $url = "https://stampiz.eu/login";
        
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $headers = array(
           "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
        $data = <<<DATA
        { 
         "email": "omarebi@foobar.com", 
         "password": "Dontusethispassword1" 
         }
        DATA;
        
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        
        $resp = curl_exec($curl);
        curl_close($curl);
        return($resp);
        }
        function stampizNotary($url) {
            $url = "https://stampiz.eu/notary";
            
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            
            $headers = array(
               "Content-Type: application/json",
               "x-access-token: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MTE5LCJuYW1lIjoib21hcmViaSIsImVtYWlsIjoib21hcmViaUBmb29iYXIuY29tIiwiY2FwYWJpbGl0aWVzIjp7ImRhc2hib2FyZCI6dHJ1ZSwiZGF5c19sZWZ0IjoyOSwiZHVtbXkiOmZhbHNlfSwiaWF0IjoxNjIyMDQxOTY3LCJuYmYiOjE2MjIwNDE5NjgsImV4cCI6MTYyMjEyODM2NywiaXNzIjoiU3RhbXBpeiJ9.1M7Dn9180S4LNNiokvNRNSxfCTxkssC6sDhaMNpye_I",
            );
            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            
            $data = <<<DATA
            {  
             "filename": "dumm.txt", 
             "filesize": 12345, 
             "digest": "bc4b7e067b8117fa523746f840bba7c8a2445f492ff8df7f2fc9fb023fcba8d9",
             "api_mode": true  
             }
            DATA;
            
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            
            $resp = curl_exec($curl);
            curl_close($curl);
            return($resp);
                }
 
    ?>

                                          <input class="btn btn-primary" type="submit" value="Enviar" id="btn-producto-form" onclick = "funcion();">

                                    

                                        <script>
  function funcion(){
   
    console.log('<?php echo stampizReg("https://stampiz.eu/reg") ?>');
    console.log('<?php echo stampizLogin("https://stampiz.eu/login") ?>');
    console.log('<?php echo stampizNotary("https://stampiz.eu/notary") ?>');

  }
</script>


                    <!-- rocio -->
                    
                    <!-- rocio -->
                                

						                
										
								
								
								
									</form>
								</div>
							</div>
						</div>

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
					</div>
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
    

	<!-- <script src="js/proceso6.js"></script> -->
<script>



	const ProductForm = document.getElementById('productoForm');
const productosContainer = document.getElementById('productosContainer');
let editStatus = true;
const idProducto = localStorage.getItem('idproducto');

const getProductos = () => db.collection('productos').get();

const getProducto = (id) => db.collection('productos').doc(id).get();

const onGetProductos = (callback) =>
  db.collection('productos').onSnapshot(callback);

const deleteProduct = (id) => db.collection('productos').doc(id).delete();

const updateProducto = (id, updatedProducto) =>
  db.collection('productos').doc(id).update(updatedProducto);

window.addEventListener('DOMContentLoaded', async (e) => {
  onGetProductos((querySnapshot) => {
    let cont = 1;
    ProductForm['btn-producto-form'].disabled = true;
    productosContainer.innerHTML = '';
    querySnapshot.forEach((doc) => {
      const producto = doc.data();
      producto.id = doc.id;
      producto.lote=doc.lote;
      // console.log(producto.lote)
      // console.log(producto);
      productosContainer.innerHTML += `<tr>
                <th scope='row'>${cont}</th>
                <td>${producto.proceso_1.suelo.ubicacion}</td>
                <td>${producto.proceso_1.maquinaria.nombre}</td>
                <td>${producto.proceso_1.fecha_arar}</td>
                <td>${producto.proceso_1.fecha_nivelar}</td>
                <td>${producto.lote}</td>
                <td>
                    <button class='btn btn-secundary btn-edit' data-id='${producto.id}'>Edit</button>
                </td>
            </tr>	`;

      //los botones de edit
      const btnEdit = document.querySelectorAll('.btn-edit');
      btnEdit.forEach((btn) => {
        btn.addEventListener('click', async (e) => {
          ProductForm['btn-producto-form'].disabled = false;
          const doc = await getProducto(e.target.dataset.id);
          const producto = doc.data();
          // console.log(doc.id);
          editStatus = true;
          id = e.target.dataset.id;
          var lote=doc.lote

//Número de lote en javascript
// console.log(lote);

// Número de lote en php
<?php $results = "<script>document.write(lote)</script>"?>   


//Objeto en javascript
          // console.log(producto);


//Convertir objeto a json
          productoJson= JSON.stringify(producto);
// console.log(productoJson)
var productLote= productoJson
// console.log(productLote);


//generar hash del json
var digest = sha256(productLote);
// console.log(digest);

//Función que retorna el objeto y propiedad específica requerido por Stampiz
// function solicitaNotaria(obj, prop){
//     return obj[prop];
//  }
//  let datos= {filename: 'dummy.txt', filesize: '12345',digest: digest ,api_mode:'true'};
//  console.log(solicitaNotaria(datos, 'api_mode'))


// Hora
// var hoy = new Date();
// console.log(hoy)

var hoy = new Date().toJSON().slice(0,10).replace(/-/g,'/');
// console.log(hoy)

// Número de lote en PHP

//


//Función que retorna el objeto  requerido por Stampiz
function solicitaNotaria(obj){
    return obj;
 }
  let datos= {filename: lote + ' '+ hoy, filesize: '12345',digest: digest ,api_mode:'true',contenido_Json:productLote};
//  console.log(solicitaNotaria(datos))


 

          //llenamos el formulario
          if (producto.proceso_6) {
            ProductForm['fecha_controlar_calidad_ingreso'].value =
              producto.proceso_6.control_calidad_ingreso.fecha_controlar_calidad_ingreso;
            ProductForm['control_calidad_ingreso'].value =
              producto.proceso_6.control_calidad_ingreso.control_calidad_ingreso;

            ProductForm['fecha_almacenar_mp_preparada'].value =
              producto.proceso_6.almacenar_mp_preparada.fecha_almacenar_mp_preparada;
            ProductForm['ubicacion_mp_preparada'].value =
              producto.proceso_6.almacenar_mp_preparada.ubicacion_mp_preparada;
            ProductForm['fifo_fefo_almacenar_mp'].value =
              producto.proceso_6.almacenar_mp_preparada.fifo_fefo_almacenar_mp;
            ProductForm['lote'].value =
              producto.proceso_6.almacenar_mp_preparada.lote;
            ProductForm['peso'].value =
              producto.proceso_6.almacenar_mp_preparada.peso;

            ProductForm['nombre_maquinaria'].value =
              producto.proceso_6.maquinaria.nombre_maquinaria;
            ProductForm['ID_maquinaria'].value =
              producto.proceso_6.maquinaria.ID_maquinaria;

            ProductForm['nombre_insumo'].value =
              producto.proceso_6.insumo.nombre_insumo;
            ProductForm['caracteristicas'].value =
              producto.proceso_6.insumo.caracteristicas;
            ProductForm['documento'].value =
              producto.proceso_6.insumo.documento;
            ProductForm['certificado'].value =
              producto.proceso_6.insumo.certificado;

            ProductForm['calidad_empaque'].value =
              producto.proceso_6.empaque_primario.calidad_empaque;
            ProductForm['hermeticidad'].value =
              producto.proceso_6.empaque_primario.hermeticidad;

            ProductForm['calidad_caja'].value =
              producto.proceso_6.caja.calidad_caja;

            ProductForm['control_calidad_salida'].value =
              producto.proceso_6.control_calidad_salida.control_calidad_salida;
            ProductForm['fecha_controlar_calidad_salida'].value =
              producto.proceso_6.control_calidad_salida.fecha_controlar_calidad_salida;

            ProductForm['fecha_lav_reb_pel_mp'].value =
              producto.proceso_6.lavar_pelar_rebanar_mp.fecha_lav_reb_pel_mp;
            ProductForm['espesor_hojuela_cruda'].value =
              producto.proceso_6.lavar_pelar_rebanar_mp.espesor_hojuela_cruda;

            ProductForm['fecha_freir_mp'].value =
              producto.proceso_6.freir_mp.fecha_freir_mp;
            ProductForm['rendimiento_mp'].value =
              producto.proceso_6.freir_mp.rendimiento_mp;
            ProductForm['temperatura'].value =
              producto.proceso_6.freir_mp.temperatura;
            ProductForm['calidad_aceite'].value =
              producto.proceso_6.freir_mp.calidad_aceite;
            ProductForm['control_organoleptico'].value =
              producto.proceso_6.freir_mp.control_organoleptico;

            ProductForm['fecha_adic_sal_hojue'].value =
              producto.proceso_6.adicionar_sal.fecha_adic_sal_hojue;
            ProductForm['porc_sal_hojuela'].value =
              producto.proceso_6.adicionar_sal.porc_sal_hojuela;

            ProductForm['fecha_empacar_producto'].value =
              producto.proceso_6.fecha_empacar_producto;
            ProductForm['fecha_preparar_caja'].value =
              producto.proceso_6.fecha_preparar_caja;

            ProductForm['fecha_almacenar_producto'].value =
              producto.proceso_6.almacenar_producto.fecha_almacenar_producto;
            ProductForm['ubicacion_almacen_producto'].value =
              producto.proceso_6.almacenar_producto.ubicacion_almacen_producto;
            ProductForm['fifo_fefo_almacenar_producto'].value =
              producto.proceso_6.almacenar_producto.fifo_fefo_almacenar_producto;

            ProductForm['medio_transporte'].value =
              producto.proceso_6.medio_transporte.medio_transporte;
            ProductForm['nombre_transporte'].value =
              producto.proceso_6.medio_transporte.nombre_transporte;
            ProductForm['ID_transporte'].value =
              producto.proceso_6.medio_transporte.ID_transporte;

            ProductForm['fecha_transportar_producto'].value =
              producto.proceso_6.transporte_producto.fecha_transportar_producto;
            ProductForm['transportista'].value =
              producto.proceso_6.transporte_producto.transportista;
            ProductForm['condicion_higienica_transporte'].value =
              producto.proceso_6.transporte_producto.condicion_higienica_transporte;
            ProductForm['nivel_servicio'].value =
              producto.proceso_6.transporte_producto.nivel_servicio;
          } else {
            ProductForm.reset();
          }
        });
      });

      cont++;
    });
  });

  //vemos si etsa logueado
  if (localStorage.getItem("user")) {
  } else {
    //window.location.href = '/index.html';
  }
});

ProductForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  //console.log(ProductForm['lote'].value);

  const fecha_controlar_calidad_ingreso =
    ProductForm['fecha_controlar_calidad_ingreso'];
  const control_calidad_ingreso = ProductForm['control_calidad_ingreso'];
  const fecha_almacenar_mp_preparada =
    ProductForm['fecha_almacenar_mp_preparada'];
  const ubicacion_mp_preparada = ProductForm['ubicacion_mp_preparada'];
  const fifo_fefo_almacenar_mp = ProductForm['fifo_fefo_almacenar_mp'];
  const lote = ProductForm['lote'];
  const peso = ProductForm['peso'];

  const nombre_maquinaria = ProductForm['nombre_maquinaria'];
  const ID_maquinaria = ProductForm['ID_maquinaria'];

  const nombre_insumo = ProductForm['nombre_insumo'];
  const caracteristicas = ProductForm['caracteristicas'];
  const documento = ProductForm['documento'];
  const certificado = ProductForm['certificado'];

  const calidad_empaque = ProductForm['calidad_empaque'];
  const hermeticidad = ProductForm['hermeticidad'];

  const calidad_caja = ProductForm['calidad_caja'];

  const control_calidad_salida = ProductForm['control_calidad_salida'];
  const fecha_controlar_calidad_salida =
    ProductForm['fecha_controlar_calidad_salida'];

  const fecha_lav_reb_pel_mp = ProductForm['fecha_lav_reb_pel_mp'];
  const espesor_hojuela_cruda = ProductForm['espesor_hojuela_cruda'];

  const fecha_freir_mp = ProductForm['fecha_freir_mp'];
  const rendimiento_mp = ProductForm['rendimiento_mp'];
  const temperatura = ProductForm['temperatura'];
  const calidad_aceite = ProductForm['calidad_aceite'];
  const control_organoleptico = ProductForm['control_organoleptico'];

  const fecha_adic_sal_hojue = ProductForm['fecha_adic_sal_hojue'];
  const porc_sal_hojuela = ProductForm['porc_sal_hojuela'];
  const fecha_empacar_producto = ProductForm['fecha_empacar_producto'];
  const fecha_preparar_caja = ProductForm['fecha_preparar_caja'];
  const fecha_almacenar_producto = ProductForm['fecha_almacenar_producto'];
  const ubicacion_almacen_producto = ProductForm['ubicacion_almacen_producto'];
  const fifo_fefo_almacenar_producto =
    ProductForm['fifo_fefo_almacenar_producto'];
  const medio_transporte = ProductForm['medio_transporte'];
  const nombre_transporte = ProductForm['nombre_transporte'];
  const ID_transporte = ProductForm['ID_transporte'];
  const fecha_transportar_producto = ProductForm['fecha_transportar_producto'];
  const transportista = ProductForm['transportista'];
  const condicion_higienica_transporte =
    ProductForm['condicion_higienica_transporte'];
  const nivel_servicio = ProductForm['nivel_servicio'];

  if (!editStatus) {
    //await saveProducto(lote.value, fecha_barbechear.value, fecha_desterrar.value, maquinaria.value, suelo.value);
  } else {
    await updateProducto(id, {
      //lote: lote.value,
      proceso_6: {
        control_calidad_ingreso: {
          fecha_controlar_calidad_ingreso:
            fecha_controlar_calidad_ingreso.value,
          control_calidad_ingreso: control_calidad_ingreso.value,
        },
        almacenar_mp_preparada: {
          fecha_almacenar_mp_preparada: fecha_almacenar_mp_preparada.value,
          ubicacion_mp_preparada: ubicacion_mp_preparada.value,
        },
        maquinaria: {
          nombre_maquinaria: nombre_maquinaria.value,
          ID_maquinaria: ID_maquinaria.value,
        },
        insumo: {
          nombre_insumo: nombre_insumo.value,
          caracteristicas: caracteristicas.value,
          documento: documento.value,
          certificado: certificado.value,
        },
        empaque_primario: {
          calidad_empaque: calidad_empaque.value,
          hermeticidad: hermeticidad.value,
          formato_envasado: formato_envasado.value,
        },
        control_calidad_salida: {
          fecha_controlar_calidad_salida: fecha_controlar_calidad_salida.value,
          control_calidad_salida: control_calidad_salida.value,
        },
        docificar_mezclar: {
          fecha_docificar: fecha_docificar.value,
          granulometria: granulometria.value,
          calidad_agua: calidad_agua.value,
        },
        amasar_prensar: {
          fecha_amasar_prensar: fecha_amasar_prensar.value,
          homogenizacion_masa: homogenizacion_masa.value,
          verificacion_modelado: verificacion_modelado.value,
        },
        secar_producto: {
          fecha_secar_producto: fecha_secar_producto.value,
          temp_ini_maq: temp_ini_maq.value,
          temp_fin_maq: temp_fin_maq.value,
          hum_ini_prod: hum_ini_prod.value,
          hum_fin_prod: hum_fin_prod.value,
          formato_calidad: formato_calidad.value,
        },
        fecha_empacar_producto: fecha_empacar_producto.value,
        almacenar_producto: {
          fecha_almacenar_producto: fecha_almacenar_producto.value,
          ubicacion_almacen_producto: ubicacion_almacen_producto.value,
          fifo_fefo_almacenar_producto: fifo_fefo_almacenar_producto.value,
          lote_almacenar_prod: lote_almacenar_prod.value,
          hoja_tecnica_alm: hoja_tecnica_alm.value,
        },
        caja: {
          calidad_caja: calidad_caja.value,
        },
        medio_transporte: {
          nombre_mt: nombre_mt.value,
          medio_transporte: medio_transporte.value,
          ID: ID.value,
        },
        fecha_preparar_caja: fecha_preparar_caja.value,
        transporte_producto: {
          fecha_transportar_producto: fecha_transportar_producto.value,
          transportista: transportista.value,
          condicion_higienica_transporte: condicion_higienica_transporte.value,
          nivel_servicio: nivel_servicio.value,
        },
      }
    });
  }

  ProductForm.reset();

  fecha_controlar_calidad_ingreso.focus();

  //console.log(response);
});

window.addEventListener('DOMContentLoaded', (e) => {
  //vemos si etsa logueado
  if (localStorage.getItem("user")) {
    getUserAuth();
  } else {
    window.location.href = 'login.php';s
  }
});


	</script>
                    


</body>

