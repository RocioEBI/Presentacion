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
  <?php include 'includes/styles.php'; ?>
  <script src='../node_modules/js-sha256/build/sha256.min.js'></script>

</head>

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

  <!-- Aqui va el sidebar -->

  <?php include 'includes/header-navbar.php'; ?>

  <?php include 'includes/horizontalMenu.php'; ?>

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

                  <h4 class="card-title text-center"><strong>6.</strong>PRODUCIR</h4>
                </div>
                <div class="card-body">
                  <form id="productoForm">


                    <div class="form-group">
                      <label for="recepcionar_mp">Recepcionar Materia Prima</label>
                      <input type="datetime-local" id="recepcionar_mp" class="form-control" required>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Control de calidad de Materia Prima</h6>
                      <p>Ingreso a almacén</p>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="fecha_controlar_calidad_ingreso">Fecha de controlar calidad ingreso</label>
                          <input type="datetime-local" id="fecha_controlar_calidad_ingreso" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="control_calidad_ingreso">Control de Calidad </label>
                          <input type="text" id="control_calidad_ingreso" class="form-control" placeholder="doc. control calidad">
                        </div>


                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Materia Prima</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="ubicacion_mp_preparada">Ubicación almacén</label>
                          <input type="text" id="ubicacion_mp_preparada" class="form-control" placeholder="Ubicacion de almacen mp preparada">
                        </div>
                        <div class="form-group">
                          <label for="fecha_almacenar_mp_preparada">Fecha almacenar materia prima</label>
                          <input type="datetime-local" id="fecha_almacenar_mp_preparada" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="fifo_fefo_almacenar_mp">FIFO/FEFO</label>
                          <input type="text" id="fifo_fefo_almacenar_mp" class="form-control" placeholder="FIFO/FEFO de almacenar mp">
                        </div>
                        <div class="form-group">
                          <label for="lote">Lote</label>
                          <input type="text" id="lote" class="form-control" placeholder="Lote">
                        </div>
                        <div class="form-group">
                          <label for="peso">Peso</label>
                          <input type="text" id="peso" class="form-control" placeholder="Peso">
                        </div>

                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Semilla</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="fecha_almacenar_semilla">Fecha de Almacenar Semilla</label>
                          <input type="datetime-local" id="fecha_almacenar_semilla" class="form-control" required>
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
                          <input type="text" id="nombre_maquinaria" class="form-control" placeholder="nombre maquina">
                        </div>
                        <div class="form-group">
                          <label for="origen_agua">ID</label>
                          <input type="text" id="ID_maquinaria" class="form-control" placeholder="ID maquinaria">
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Insumo</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="nombre_insumo">Nombre_insumo</label>
                          <input type="text" id="nombre_insumo" class="form-control" placeholder="nombre insumo">
                        </div>
                        <div class="form-group">
                          <label for="caracteristicas">Características</label>
                          <input type="text" id="caracteristicas" class="form-control" placeholder="caracteristicas insumo">
                        </div>
                        <div class="form-group">
                          <label for="documento">Documentos</label>
                          <input type="text" id="documento" class="form-control" placeholder="documento insumo">
                        </div>
                        <div class="form-group">
                          <label for="certificado">Certificado</label>
                          <input type="text" id="certificado" class="form-control" placeholder="certificado insumo">
                        </div>

                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Registrar Empaque Primerio</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="calidad_empaque">Calidad empaque</label>
                          <input type="text" id="calidad_empaque" class="form-control" placeholder="calidad del empaque">
                        </div>
                        <div class="form-group">
                          <label for="hermeticidad">Hermeticidad</label>
                          <input type="text" id="hermeticidad" class="form-control" placeholder="Hermeticidad">
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Registrar Caja</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="calidad_caja">Calidad empaque</label>
                          <input type="text" id="calidad_caja" class="form-control" placeholder="calidad de la caja">
                        </div>
                      </div>
                    </div>


                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Controlar calidad mp salida almacén</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="fecha_controlar_calidad_salida">Fecha Control de calidad de Salida</label>
                          <input type="datetime-local" id="fecha_controlar_calidad_salida" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="nombre">Control de calidad (doc)</label>
                          <input type="text" id="control_calidad_salida" class="form-control" placeholder="documento control de calidad salida">
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Lavar Materia Prima</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="fecha_lav_reb_pel_mp">Fecha de Lavar Pelar Rebanar MP</label>
                          <input type="datetime-local" id="fecha_lav_reb_pel_mp" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="fecha_lav_reb_pel_mp">Espesor hojuela cruda</label>
                          <input type="text" id="espesor_hojuela_cruda" class="form-control" placeholder="espesor hojuela cruda">
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Freír Materia Prima</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="fecha_freir_mp">Fecha de Freir Materia Prima</label>
                          <input type="datetime-local" id="fecha_freir_mp" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="rendimiento_mp">Rendimiento mp</label>
                          <input type="text" id="rendimiento_mp" class="form-control" placeholder="rendimiento mp">
                        </div>
                        <div class="form-group">
                          <label for="temperatura">Temperatura</label>
                          <input type="text" id="temperatura" class="form-control" placeholder="temperatura">
                        </div>
                        <div class="form-group">
                          <label for="calidad_aceite">Calidad aceite</label>
                          <input type="text" id="calidad_aceite" class="form-control" placeholder="calidad del aceite">
                        </div>
                        <div class="form-group">
                          <label for="calidad_aceite">Control organoléptico</label>
                          <input type="text" id="control_organoleptico" class="form-control" placeholder="control organoleptico">
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Adicionar sal a hojuela frita</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="fecha_lav_reb_pel_mp">Fecha de adicionar Sal</label>
                          <input type="datetime-local" id="fecha_adic_sal_hojue" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="porc_sal_hojuela">Porcentaje</label>
                          <input type="text" id="porc_sal_hojuela" class="form-control" placeholder="porcentaje de sal en la hojuela">
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Empacar producto</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="fecha_lav_reb_pel_mp">Fecha de empacar</label>
                          <input type="datetime-local" id="fecha_empacar_producto" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Empacar producto</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="fecha_preparar_caja">Preparar caja</label>
                          <input type="datetime-local" id="fecha_preparar_caja" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Almacenar Producto</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="fecha_lav_reb_pel_mp">Ubicación Almacén</label>
                          <input type="text" id="ubicacion_almacen_producto" class="form-control" placeholder="ubicacion almacen producto">
                        </div>
                        <div class="form-group">
                          <label for="porc_sal_hojuela">Fecha</label>
                          <input type="datetime-local" id="fecha_almacenar_producto" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="porc_sal_hojuela">FIFO / FEFO</label>
                          <input type="text" id="fifo_fefo_almacenar_producto" class="form-control" placeholder="FIFO/FEFO almacenar producto">
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Registrar Medio de Transporte</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="nombre_transporte">Nombre de Transporte</label>
                          <input type="text" id="nombre_transporte" class="form-control" placeholder="nombre transporte">
                        </div>
                        <div class="form-group">
                          <label for="medio_transporte">Medio de transporte</label>
                          <input type="text" id="medio_transporte" class="form-control" placeholder="medio transporte">
                        </div>
                        <div class="form-group">
                          <label for="ID_transporte">ID Transporte</label>
                          <input type="text" id="ID_transporte" class="form-control" placeholder="ID transporte">
                        </div>

                      </div>
                    </div>

                    <div class="table-responsive border rounded px-1 my-1">
                      <h6 class="border-bottom py-1 mb-0 font-medium-2">Transportar Producto</h6>
                      <div class="table table-borderless">
                        <div class="form-group">
                          <label for="fecha_transporte_m">Fecha y Hora de transporte MP Preparada</label>
                          <input type="datetime-local" id="fecha_transportar_producto" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="transportista">Transportista</label>
                          <input type="text" id="transportista" class="form-control" placeholder="transportista">
                        </div>
                        <div class="form-group">
                          <label for="condicion_higienica_transporte">Condicionamiento transporte</label>
                          <input type="text" id="condicion_higienica_transporte" class="form-control" placeholder="condicion higiénica del transporte">
                        </div>
                        <div class="form-group">
                          <label for="nivel_servicio">Nivel de servicio</label>
                          <input type="text" id="nivel_servicio" class="form-control" placeholder="Nivel de servicio">
                        </div>

                      </div>
                    </div>
                    <?php include 'includes/scripts.php'; ?>

                    <input class="btn btn-primary" type="submit" value="Enviar" id="btn-producto-form">

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

  <?php include 'includes/customizer.php'; ?>

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <?php include 'includes/footer.php'; ?>

  <script>
    const ProductForm = document.getElementById("productoForm");
    const productosContainer = document.getElementById("productosContainer");
    let editStatus = true;
    const idProducto = localStorage.getItem("idproducto");

    const getProductos = () => db.collection("productos").get();

    const getProducto = (id) => db.collection("productos").doc(id).get();

    const onGetProductos = (callback) =>
      db.collection("productos").onSnapshot(callback);

    const deleteProduct = (id) => db.collection("productos").doc(id).delete();

    let notaryIdValidation,documentoActual;

    //FUNCTION TO INSERT DATA
    async function insertData(e){
      notaryIdValidation=e;
      return console.log('Im insertData function -',notaryIdValidation);
    }
    //FUNCTION TO GET DOCUMENT ACTUAL
    async function getDocumentAct(e){
      documentoActual=e;
      return console.log('Im getDocumentAct function -',documentoActual);
    }

    const updateProducto = (id, updatedProducto) =>
      db.collection("productos").doc(id).update(updatedProducto);

    window.addEventListener("DOMContentLoaded", async (e) => {
      onGetProductos((querySnapshot) => {
        let cont = 1;
        ProductForm["btn-producto-form"].disabled = true;
        productosContainer.innerHTML = "";
        querySnapshot.forEach((doc) => {
          const producto = doc.data();
          producto.id = doc.id;
          // console.log(producto);
          productosContainer.innerHTML += `<tr>
                <th scope="row">${cont}</th>
                <td>${producto.proceso_1.suelo.ubicacion}</td>
                <td>${producto.proceso_1.maquinaria.nombre}</td>
                <td>${producto.proceso_1.fecha_barbechear}</td>
                <td>${producto.proceso_1.fecha_desterrar}</td>
                <td>${producto.lote}</td>
                <td>
                    <button class="btn btn-secundary btn-edit" data-id="${producto.id}">Edit</button>
                </td>
            </tr> `;

          //los botones de edit
          const btnEdit = document.querySelectorAll(".btn-edit");

          btnEdit.forEach((btn) => {
            btn.addEventListener("click", async (e) => {


              ProductForm["btn-producto-form"].disabled = false;
              const doc = await getProducto(e.target.dataset.id);
              const producto = doc.data();
              console.log('AquiToy',doc.id);
              insertData(producto.notary);
              getDocumentAct(doc.id);
              // console.log(doc.id);
              editStatus = true;
              id = e.target.dataset.id;
              // ENVIAR HASH A BLOCKCHAIN

              // 1- CREANDO DIGEST
              // 1.1-Obtener documento
              console.log('Im doc.ic on edit button -',doc.id);

              //1.2-Convertir objeto(documento) a json
              productoJson = JSON.stringify(doc.id);
              // console.log(productoJson)
              const productDoc = productoJson
              // console.log(productDoc);

              //1.3- Crear el hash del documento
              const digest = sha256(productDoc);
              console.log('Im the digest value on edit button -',digest);

              // 2- CREANDO FILENAME
              //2.1-Obtener el lote
              const lote = producto.lote;
              //2.2-Obtener la fecha 
              const hoy = new Date().toJSON().slice(0, 10).replace(/-/g, '/');
              // console.log(hoy)
              const filename = lote + " " + hoy;
              console.log('Im filename value on edit button -',filename)

              // 5- CREANDO FETCH PARA CONSUMIR STAMPIZ
              document.getElementById('btn-producto-form').addEventListener('click', stampizNotary);
              const dataNotary = {
                "filename": filename,
                "filesize": 12345,
                "digest": digest,
                "api_mode": true
              }

              //TEST UPDATE INFO
              async function updateData(e,i){
                db.collection("productos")
                .doc(e)
                .update({
                  "notary": i,
                  // "favorites.color": "Red"
                });
                console.log('Data actualizada♻');
              }
              //LOGIN PROVISIONARIO
              // let tempVar;
              // async function login(email, password) {
              // let response = await fetch("https://stampiz.eu/login", {
              //   method: "POST",
              //   headers: {
              //       "Content-Type": "application/json",
              //     },
              // body: JSON.stringify({
              //   email: email,
              //   password: password,
              // }),
              //   });
              // let result = await response.json();
              // if (result && result.accessToken) {
              //     sessionStorage.setItem("token_data", JSON.stringify(result.accessToken));
              //   return result;
              // } else throw Error("Invalid AccesToken");
            
              // }
              //////////////////////
              const docRef = db.collection("productos").doc();

              const idDocuProducts = doc.id;
              //:::: ADD DOC_ID TO FIRESTORE ::::
              function createDoc(notary) {
                const doc_id = {
                  "notary": notary,
                  "idDocusProd": idDocuProducts,
                }
                const docRef = db.collection("solicitarNotarizar").doc().set(doc_id)
                  .catch(err => console.error("err", err))
              }
              let documentoNece;

              function stampizNotary() {
                //:::::LOGIN WITH TOKEN 🔴  ::::
                // let loginS= login("anthoni@blockchainebi.com", "elenayel5A");
                // console.log("Log", loginS);
                // //Fetch notary
                let accessToken = JSON.parse(sessionStorage.getItem('token_data'));//ANTHONY
                console.log("acccessToken", accessToken);
                let response = fetch('https://stampiz.eu/notary', {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/json',
                      //:::: DYNAMIC TOKEN (NOT WORKING AT ALL) ::::
                      "X-Access-Token": `Bearer ${accessToken}`,
                      // "X-Access-Token": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NTkxLCJuYW1lIjoiYW50aG9uaSIsImVtYWlsIjoiYW50aG9uaUBibG9ja2NoYWluZWJpLmNvbSIsImNhcGFiaWxpdGllcyI6eyJkYXNoYm9hcmQiOnRydWUsImRheXNfbGVmdCI6MjcsImR1bW15IjpmYWxzZX0sImlhdCI6MTYyNDAyNjg1MCwibmJmIjoxNjI0MDI2ODUxLCJleHAiOjE2MjQxMTMyNTAsImlzcyI6IlN0YW1waXoifQ.rBjrEPgtptTOIgSlOUfw4y_wf1B3j4UVjOdE_2EXFYo"
                    },
                    body: JSON.stringify(dataNotary)
                  })
                  .then(res => res.json())
                  .then(data => {
                    var utilidad=data.doc_id;
                    // var dataToValidate=product.notary;
                    // console.log(dataToValidate);
                    if(!notaryIdValidation){
                    createDoc(utilidad);
                    updateData(documentoActual,utilidad);
                    // serNotaryDoc(utilidad)
                    console.log(utilidad);
                    }else if(notaryIdValidation){
                      console.log('Already exist an docNotary',notaryIdValidation);
                      // function_alert('Ya existe un registro');
                    }
                    // createDoc(utilidad);
                    // console.log(utilidad);
                  })
              }
              // agrear notary de blockchain
              // async function serNotaryDoc(i){
              //  docRef.set({ notary: i});
              //  return console.log(docRef);
              // }
              // TERMINA ENVÍO A BLOCKCHAIN

              
              //llenamos el formulario
              if (producto.proceso_6) {
                ProductForm["recepcionar_mp"].value =
                  producto.proceso_6.fecha_recepcionar_mp;
                ProductForm["fecha_controlar_calidad_ingreso"].value =
                  producto.proceso_6.control_calidad_ingreso.fecha_controlar_calidad_ingreso;
                ProductForm["control_calidad_ingreso"].value =
                  producto.proceso_6.control_calidad_ingreso.control_calidad_ingreso;

                ProductForm["fecha_almacenar_mp_preparada"].value =
                  producto.proceso_6.almacenar_mp_preparada.fecha_almacenar_mp_preparada;
                ProductForm["ubicacion_mp_preparada"].value =
                  producto.proceso_6.almacenar_mp_preparada.ubicacion_mp_preparada;
                ProductForm["fifo_fefo_almacenar_mp"].value =
                  producto.proceso_6.almacenar_mp_preparada.fifo_fefo_almacenar_mp;
                ProductForm["lote"].value =
                  producto.proceso_6.almacenar_mp_preparada.lote;
                ProductForm["peso"].value =
                  producto.proceso_6.almacenar_mp_preparada.peso;

                ProductForm["nombre_maquinaria"].value =
                  producto.proceso_6.maquinaria.nombre_maquinaria;
                ProductForm["ID_maquinaria"].value =
                  producto.proceso_6.maquinaria.ID_maquinaria;

                ProductForm["nombre_insumo"].value =
                  producto.proceso_6.insumo.nombre_insumo;
                ProductForm["caracteristicas"].value =
                  producto.proceso_6.insumo.caracteristicas;
                ProductForm["documento"].value =
                  producto.proceso_6.insumo.documento;
                ProductForm["certificado"].value =
                  producto.proceso_6.insumo.certificado;

                ProductForm["calidad_empaque"].value =
                  producto.proceso_6.empaque_primario.calidad_empaque;
                ProductForm["hermeticidad"].value =
                  producto.proceso_6.empaque_primario.hermeticidad;

                ProductForm["calidad_caja"].value =
                  producto.proceso_6.caja.calidad_caja;

                ProductForm["control_calidad_salida"].value =
                  producto.proceso_6.control_calidad_salida.control_calidad_salida;
                ProductForm["fecha_controlar_calidad_salida"].value =
                  producto.proceso_6.control_calidad_salida.fecha_controlar_calidad_salida;

                ProductForm["fecha_almacenar_semilla"].value =
                  producto.proceso_6.almacenar_semilla.fecha_almacenar_semilla;
                ProductForm["caracteristicas_almacen_semilla"].value =
                  producto.proceso_6.almacenar_semilla.caracteristicas_almacen_semilla;
                ProductForm["ubicacion_semilla"].value =
                  producto.proceso_6.almacenar_semilla.ubicacion_semilla;

                ProductForm["fecha_lav_reb_pel_mp"].value =
                  producto.proceso_6.lavar_pelar_rebanar_mp.fecha_lav_reb_pel_mp;
                ProductForm["espesor_hojuela_cruda"].value =
                  producto.proceso_6.lavar_pelar_rebanar_mp.espesor_hojuela_cruda;

                ProductForm["fecha_freir_mp"].value =
                  producto.proceso_6.freir_mp.fecha_freir_mp;
                ProductForm["rendimiento_mp"].value =
                  producto.proceso_6.freir_mp.rendimiento_mp;
                ProductForm["temperatura"].value =
                  producto.proceso_6.freir_mp.temperatura;
                ProductForm["calidad_aceite"].value =
                  producto.proceso_6.freir_mp.calidad_aceite;
                ProductForm["control_organoleptico"].value =
                  producto.proceso_6.freir_mp.control_organoleptico;

                ProductForm["fecha_adic_sal_hojue"].value =
                  producto.proceso_6.adicionar_sal.fecha_adic_sal_hojue;
                ProductForm["porc_sal_hojuela"].value =
                  producto.proceso_6.adicionar_sal.porc_sal_hojuela;

                ProductForm["fecha_empacar_producto"].value =
                  producto.proceso_6.fecha_empacar_producto;
                ProductForm["fecha_preparar_caja"].value =
                  producto.proceso_6.fecha_preparar_caja;

                ProductForm["fecha_almacenar_producto"].value =
                  producto.proceso_6.almacenar_producto.fecha_almacenar_producto;
                ProductForm["ubicacion_almacen_producto"].value =
                  producto.proceso_6.almacenar_producto.ubicacion_almacen_producto;
                ProductForm["fifo_fefo_almacenar_producto"].value =
                  producto.proceso_6.almacenar_producto.fifo_fefo_almacenar_producto;

                ProductForm["medio_transporte"].value =
                  producto.proceso_6.medio_transporte.medio_transporte;
                ProductForm["nombre_transporte"].value =
                  producto.proceso_6.medio_transporte.nombre_transporte;
                ProductForm["ID_transporte"].value =
                  producto.proceso_6.medio_transporte.ID_transporte;

                ProductForm["fecha_transportar_producto"].value =
                  producto.proceso_6.transporte_producto.fecha_transportar_producto;
                ProductForm["transportista"].value =
                  producto.proceso_6.transporte_producto.transportista;
                ProductForm["condicion_higienica_transporte"].value =
                  producto.proceso_6.transporte_producto.condicion_higienica_transporte;
                ProductForm["nivel_servicio"].value =
                  producto.proceso_6.transporte_producto.nivel_servicio;
              } else {
                ProductForm.reset();
              }



              // rocio
            });
          });

          cont++;
        });
      });

      //vemos si etsa logueado
      if (localStorage.getItem("user")) {} else {
        //window.location.href = '/index.html';
      }
    });

    ProductForm.addEventListener("submit", async (e) => {
      e.preventDefault();
      //   console.log(ProductForm['lote'].value);

      const fecha_recepcionar_mp = ProductForm["recepcionar_mp"];
      const fecha_controlar_calidad_ingreso =
        ProductForm["fecha_controlar_calidad_ingreso"];
      const control_calidad_ingreso = ProductForm["control_calidad_ingreso"];
      const fecha_almacenar_mp_preparada =
        ProductForm["fecha_almacenar_mp_preparada"];
      const ubicacion_mp_preparada = ProductForm["ubicacion_mp_preparada"];
      const fifo_fefo_almacenar_mp = ProductForm["fifo_fefo_almacenar_mp"];
      const lote = ProductForm["lote"];
      const peso = ProductForm["peso"];

      const fecha_almacenar_semilla = ProductForm["fecha_almacenar_semilla"];
      const ubicacion_semilla = ProductForm["ubicacion_semilla"];
      const caracteristicas_almacen_semilla =
        ProductForm["caracteristicas_almacen_semilla"];

      const nombre_maquinaria = ProductForm["nombre_maquinaria"];
      const ID_maquinaria = ProductForm["ID_maquinaria"];

      const nombre_insumo = ProductForm["nombre_insumo"];
      const caracteristicas = ProductForm["caracteristicas"];
      const documento = ProductForm["documento"];
      const certificado = ProductForm["certificado"];

      const calidad_empaque = ProductForm["calidad_empaque"];
      const hermeticidad = ProductForm["hermeticidad"];

      const calidad_caja = ProductForm["calidad_caja"];

      const control_calidad_salida = ProductForm["control_calidad_salida"];
      const fecha_controlar_calidad_salida =
        ProductForm["fecha_controlar_calidad_salida"];

      const fecha_lav_reb_pel_mp = ProductForm["fecha_lav_reb_pel_mp"];
      const espesor_hojuela_cruda = ProductForm["espesor_hojuela_cruda"];

      const fecha_freir_mp = ProductForm["fecha_freir_mp"];
      const rendimiento_mp = ProductForm["rendimiento_mp"];
      const temperatura = ProductForm["temperatura"];
      const calidad_aceite = ProductForm["calidad_aceite"];
      const control_organoleptico = ProductForm["control_organoleptico"];

      const fecha_adic_sal_hojue = ProductForm["fecha_adic_sal_hojue"];
      const porc_sal_hojuela = ProductForm["porc_sal_hojuela"];
      const fecha_empacar_producto = ProductForm["fecha_empacar_producto"];
      const fecha_preparar_caja = ProductForm["fecha_preparar_caja"];
      const fecha_almacenar_producto = ProductForm["fecha_almacenar_producto"];
      const ubicacion_almacen_producto = ProductForm["ubicacion_almacen_producto"];
      const fifo_fefo_almacenar_producto =
        ProductForm["fifo_fefo_almacenar_producto"];
      const medio_transporte = ProductForm["medio_transporte"];
      const nombre_transporte = ProductForm["nombre_transporte"];
      const ID_transporte = ProductForm["ID_transporte"];
      const fecha_transportar_producto = ProductForm["fecha_transportar_producto"];
      const transportista = ProductForm["transportista"];
      const condicion_higienica_transporte =
        ProductForm["condicion_higienica_transporte"];
      const nivel_servicio = ProductForm["nivel_servicio"];

      if (!editStatus) {
        //await saveProducto(lote.value, fecha_barbechear.value, fecha_desterrar.value, maquinaria.value, suelo.value);
      } else {
        await updateProducto(id, {
          estado: "complet",
          proceso_6: {
            fecha_recepcionar_mp: fecha_recepcionar_mp.value,
            control_calidad_ingreso: {
              fecha_controlar_calidad_ingreso: fecha_controlar_calidad_ingreso.value,
              control_calidad_ingreso: control_calidad_ingreso.value,
            },
            almacenar_semilla: {
              fecha_almacenar_semilla: fecha_almacenar_semilla.value,
              ubicacion_semilla: ubicacion_semilla.value,
              caracteristicas_almacen_semilla: caracteristicas_almacen_semilla.value,
            },
            almacenar_mp_preparada: {
              fecha_almacenar_mp_preparada: fecha_almacenar_mp_preparada.value,
              ubicacion_mp_preparada: ubicacion_mp_preparada.value,
              fifo_fefo_almacenar_mp: fifo_fefo_almacenar_mp.value,
              lote: lote.value,
              peso: peso.value,
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
            },
            caja: {
              calidad_caja: calidad_caja.value,
            },
            control_calidad_salida: {
              fecha_controlar_calidad_salida: fecha_controlar_calidad_salida.value,
              control_calidad_salida: control_calidad_salida.value,
            },
            lavar_pelar_rebanar_mp: {
              fecha_lav_reb_pel_mp: fecha_lav_reb_pel_mp.value,
              espesor_hojuela_cruda: espesor_hojuela_cruda.value,
            },
            freir_mp: {
              fecha_freir_mp: fecha_freir_mp.value,
              rendimiento_mp: rendimiento_mp.value,
              temperatura: temperatura.value,
              calidad_aceite: calidad_aceite.value,
              control_organoleptico: control_organoleptico.value,
            },
            adicionar_sal: {
              fecha_adic_sal_hojue: fecha_adic_sal_hojue.value,
              porc_sal_hojuela: porc_sal_hojuela.value,
            },
            fecha_empacar_producto: fecha_empacar_producto.value,
            fecha_preparar_caja: fecha_preparar_caja.value,
            almacenar_producto: {
              fecha_almacenar_producto: fecha_almacenar_producto.value,
              ubicacion_almacen_producto: ubicacion_almacen_producto.value,
              fifo_fefo_almacenar_producto: fifo_fefo_almacenar_producto.value,
            },
            medio_transporte: {
              medio_transporte: medio_transporte.value,
              nombre_transporte: nombre_transporte.value,
              ID_transporte: ID_transporte.value,
            },
            transporte_producto: {
              fecha_transportar_producto: fecha_transportar_producto.value,
              transportista: transportista.value,
              condicion_higienica_transporte: condicion_higienica_transporte.value,
              nivel_servicio: nivel_servicio.value,
            },
          },
        });
      }

      ProductForm.reset();

      fecha_controlar_calidad_ingreso.focus();

      //console.log(response);
    });

    window.addEventListener("DOMContentLoaded", (e) => {
      //vemos si etsa logueado
      if (localStorage.getItem("user")) {
        getUserAuth();
      } else {
        window.location.href = "login.php";
      }
    });
  </script>
<!-- commentary -->


</body>