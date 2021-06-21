<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="">
  <meta name="author" content="Evolution Blockchain">
  <!-- <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
  <!-- <script src='../node_modules/js-sha256/build/sha256.min.js'></script> -->
  <!-- Styles-->
    <?php include 'includes/styles.php';?>
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/aggrid.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
</head>
<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
     <!-- Aqui va el sidebar -->
    <?php include 'includes/header-navbar.php';?>
 <div style="padding-top:90px;">
  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>#</th>
        <th>Lote</th>
        <th>Suelo</th>
        <th>Maquinaria</th>
        <th>Barbecheo</th>
        <th>Destierro</th>

        <th></th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>#</th>
        <th>Lote</th>
        <th>Suelo</th>
        <th>Maquinaria</th>
        <th>Barbecheo</th>
        <th>Destierro</th>

        <th></th>
      </tr>
    </tfoot>
  </table>
  </div>
  <?php include 'includes/scripts.php'; ?>
  <script>
    window.addEventListener("DOMContentLoaded", (e) => {
      //vemos si etsa logueado
      if (localStorage.getItem("user")) {
        getUserAuth();
      } else {
        window.location.href = "login.php";
      }
    });
    // FUNCIÓN QUE GENERA PDF CON EL BOTÓN CERTIFICADO
    function pdf() {
      var doc = new jsPDF()
      doc.text('Hola Ebi!', 10, 10)
      doc.save('Certificado Blockchain.pdf')
    }
  </script>
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
  <script>
    // FIRESTORE COLECCION PAPITAS
    const ProductForm = document.getElementById("productoForm");
    const productosContainer = document.getElementById("productosContainer");
    let editStatus = true;
    const idProducto = localStorage.getItem("idproducto"); // me parece que essto siempre da null a menos que se sette en otro lado, en esta instacia da nul;
    const getProductos = () => db.collection("productos").get();
    const getProducto = (id) => db.collection("productos").doc(id).get();
    const getSolicitarNotarizar = (id) => db.collection('solicitarNotarizar').where("idDocusProd", '==', id).get()
    const onGetProductos = (callback) =>
    db.collection("productos").onSnapshot(callback);

    //CODIGO ANTHONI
    ////////////////
    let dataGetIt;
    let dataToManage=[];

    async function getMarkers() {
      const events = await db.collection('productos')
      events.get().then((querySnapshot) => {
      var data = querySnapshot.docs.map((doc) => {
        return { id: doc.id}
       })
       dataGetIt=data;
      console.log('XDXDXD',dataGetIt[0].id);

      for(i=0;i<Object.keys(dataGetIt).length;i++){
        var dataAqui=i;
        dataToManage.push(dataAqui);
      }
      console.log(dataToManage);
      // console.log('XDXDXD',data);
      })
  }
    
       const validateData=function(e){
      for(i=0;i<Object.keys(dataGetIt).length;i++){
                 var dataAqui=i;
                if(dataGetIt[dataAqui].id==e){
                  console.log(`${e} si coincide con ${dataGetIt[dataAqui].id}`);
                }else{
                  console.log('NO COINCIDE CON NADA');
                }
      }
    }

     ////////////////   
    window.addEventListener("DOMContentLoaded", async (e) => {
      getMarkers();
      onGetProductos((querySnapshot) => {
        querySnapshot.forEach((doc) => {
          const producto = doc.data();
          producto.id = doc.id;
          var xd = getSolicitarNotarizar(producto.id)
          // var dataxd=dataToDataTable(producto.id)
          .then(function(querySnapshot) {
          return querySnapshot.docs.map(doc => Object.assign(doc.data(), {id: doc.id}));
          }).then((result) => {
            for(key in result) {
              if(result.hasOwnProperty(key)) {
              var value = result[key];
              console.log('value',value);
              var valueWithDocusProd=value.idDocusProd;
              console.log('valueWithDocusProd',valueWithDocusProd);
              validateData(valueWithDocusProd);
             }
              };
          });

          // console.log('xdxdxd', xd) 
          // BOTÓN CERTIFICADO QUE AL HACER CLICK SELECCIONARÁ UNA FILA
          const btnCertificate = document.querySelectorAll(".btn-certificate");
          btnCertificate.forEach((btn) => {
            btn.addEventListener("click", async (e) => {
              id = e.target.dataset.id;
              editStatus = true;
              const doc = await getProducto(e.target.dataset.id);
              const producto = doc.data();
              const solicitarNotarizarData = await getSolicitarNotarizar(id);
              const solicitarNotarizar = solicitarNotarizarData.data() 
              console.log('idProductoidProducto', solicitarNotarizar) 
              // ENVIAR HASH A BLOCKCHAIN
              // 1- CREANDO DIGEST
              // 1.1-Obtener documento
              console.log('doc.id>>>>>>>', doc.id);
              //1.2-Convertir objeto(documento) a json
              productoJson = JSON.stringify(doc.id);
              // console.log(productoJson)
              const productDoc = productoJson
              // console.log(productDoc);
              //1.3- Crear el hash del documento
              const digest = sha256(productDoc);
              console.log(digest);
              // 2- CREANDO FILENAME
              //2.1-Obtener el lote
              const lote = producto.lote;
              //2.2-Obtener la fecha
              const hoy = new Date().toJSON().slice(0, 10).replace(/-/g, '/');
              // console.log(hoy)
              const filename = lote + " " + hoy;
              console.log(filename)
              // TERMINA ENVÍO A BLOCKCHAIN
              // FETCH RAWCERT PARA GENERAR PDF
              // TERMINA FETCH
            });
          });

              // const dataRawcert = {
              //   "doc_id": 2137
              // }
              // fetch('https://stampiz.eu/rawcert', {
              //     method: 'POST',
              //     headers: {
              //       'Content-Type': 'application/json',
              //       "X-Access-Token": `Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NTkwLCJuYW1lIjoiYW50aG9uaSIsImVtYWlsIjoiYW50aG9uaUBmb29iYXIuY29tIiwiY2FwYWJpbGl0aWVzIjp7ImRhc2hib2FyZCI6dHJ1ZSwiZGF5c19sZWZ0IjozMCwiZHVtbXkiOmZhbHNlfSwiaWF0IjoxNjIzNzY4OTQwLCJuYmYiOjE2MjM3Njg5NDEsImV4cCI6MTYyMzg1NTM0MCwiaXNzIjoiU3RhbXBpeiJ9.tDTR-JQk0ThgEYLsDl13jsFnbcIapLfqbL93xtC7jkg`
              //     },
              //     // mode: 'no-cors',
              //     body: JSON.stringify(dataRawcert)
              //   }).then(resp => resp.json())
              //   .then(data => { //<-- Me faltaba este then()
              //     console.log(data)
              //   });

         // DATATABLE FILTER
          $(document).ready(function() {
            var t = $('#example').DataTable({
             retrieve: true,
                  // destroy: true,
                        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
 dom: 'Bfrtip',
                buttons: [
           {
                extend: 'copy',
                filename: 'Evoluzione Blockchain Internazionale',
                title: 'Evoluzione Blockchain Internazionale',
                messageTop: "Lote"
            },
            {
                extend: 'csv',
                filename: 'Evoluzione Blockchain Internazionale',
                title: 'Evoluzione Blockchain Internazionale',
                messageTop: "Lote"
            },
            {
                extend: 'excel',
                filename: 'Evoluzione Blockchain Internazionale',
                title: 'Evoluzione Blockchain Internazionale',
                messageTop: "Lote"
            },
            {
                extend: 'pdf',
                filename: 'Evoluzione Blockchain Internazionale',
               title: 'Evoluzione Blockchain Internazionale',
               messageTop: "Lote"
            },
            {
                extend: 'print',
                filename: 'Evoluzione Blockchain Internazionale',
                title: 'Evoluzione Blockchain Internazionale',
                messageTop: "Lote"
            },

                    // 'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                
              });
            var counter = "";
          
             t.row.add([
              producto.lote,
              producto.proceso_1.suelo.ubicacion,
              producto.proceso_1.maquinaria.nombre,
              producto.proceso_1.fecha_barbechear,
              producto.proceso_1.fecha_desterrar,
              `<input class="btn btn-primary btn-certificate" type="submit" value="Certificado" data-id="${producto.id}"  onclick="pdf()"></td>`,
            ]).draw(false)
            
            counter++;
         
          });
        });
      });

      
      //vemos si etsa logueado
      if (localStorage.getItem("user")) {} else {
        //window.location.href = '/index.html';
      }
    });
  </script>
  <!-- <script src="js/blockchain.js" > </script>   -->
      <?php include 'includes/footer.php';?>

</body>
