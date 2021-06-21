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
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/aggrid.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script src='../node_modules/js-sha256/build/sha256.min.js'></script>
    <?php include 'includes/styles.php';?>
    
</head>

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <?php include 'includes/header-navbar.php';?>

    <div style="padding-top:90px;">

     <table class="table">
                  <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Suelo</th>
                    <th scope="col">Maquinaria</th>
                    <th scope="col">Barbecheo</th>
                    <th scope="col">Destierro</th>
                    <th scope="col">Lote</th>

                    <th>Notary</th>
                    <th></th>
                    
                    </tr>
                  </thead>
                  <tbody id="productosContainer">
                  </tbody>
                     <tfoot>
      <tr>
       <th scope="col">#</th>
                    <th scope="col">Suelo</th>
                    <th scope="col">Maquinaria</th>
                    <th scope="col">Barbecheo</th>
                    <th scope="col">Destierro</th>
                   <th scope="col">Lote</th>

                    <th>Notary</th>
                    <th></th>
      </tr>
    </tfoot>
                  </table>
            </div>
                           



    <script>
const productosContainer = document.getElementById("productosContainer");
let editStatus = true;
const idProducto = localStorage.getItem("idproducto");

const getProductos = () => db.collection("productos").get();

const getProducto = (id) => db.collection("productos").doc(id).get();

const onGetProductos = (callback) =>
  db.collection("productos").onSnapshot(callback);

const deleteProduct = (id) => db.collection("productos").doc(id).delete();

const updateProducto = (id, updatedProducto) =>
  db.collection("productos").doc(id).update(updatedProducto);

window.addEventListener("DOMContentLoaded", async (e) => {
  onGetProductos((querySnapshot) => {
    let cont = 1;
    productosContainer.innerHTML = "";
    querySnapshot.forEach((doc) => {
      const producto = doc.data();
      producto.id = doc.id;
      productosContainer.innerHTML += `<tr>
                <th scope="row">${cont}</th>
                <td>${producto.proceso_1.suelo.ubicacion}</td>
                <td>${producto.proceso_1.maquinaria.nombre}</td>
                <td>${producto.proceso_1.fecha_barbechear}</td>
                <td>${producto.proceso_1.fecha_desterrar}</td>
                <td>${producto.lote}</td>
                <td>${producto.notary}</td>
                <td><button class="btn btn-primary btn-certificate" data-id="${producto.id}">Certificado</button></td>
            </tr> `;

      //los botones de edit
      const btnCertificate = document.querySelectorAll(".btn-certificate");
      btnCertificate.forEach((btn) => {
        btn.addEventListener("click", async (e) => {
         const doc = await getProducto(e.target.dataset.id);
          const producto = doc.data();
          // console.log(doc.id);
          editStatus = true;
          id = e.target.dataset.id;
    
    // código del lote


// ENVIAR HASH A BLOCKCHAIN

// 1- CREANDO DIGEST
// 1.1-Obtener documento
console.log(doc.id);

//1.2-Convertir objeto(documento) a json
productoJson= JSON.stringify(doc.id );
// console.log(productoJson)
const productDoc= productoJson
// console.log(productDoc);

//1.3- Crear el hash del documento
const digest = sha256(productDoc);
console.log(digest);

// 2- CREANDO FILENAME
//2.1-Obtener el lote
const lote=producto.lote;
//2.2-Obtener la fecha 
const hoy = new Date().toJSON().slice(0,10).replace(/-/g,'/');
// console.log(hoy)
const filename= lote + " " + hoy;
console.log(filename)

let certificate;
const doc_id=producto.notary;
console.log(doc_id)


              const dataRawcert = {
                "doc_id": doc_id
              }
              fetch('https://stampiz.eu/rawcert', {
                  method: 'POST',
                  headers: {
                    'Content-Type': 'application/json',
                    "X-Access-Token": `Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6NTkxLCJuYW1lIjoiYW50aG9uaSIsImVtYWlsIjoiYW50aG9uaUBibG9ja2NoYWluZWJpLmNvbSIsImNhcGFiaWxpdGllcyI6eyJkYXNoYm9hcmQiOnRydWUsImRheXNfbGVmdCI6MjQsImR1bW15IjpmYWxzZX0sImlhdCI6MTYyNDI4NTcyMCwibmJmIjoxNjI0Mjg1NzIxLCJleHAiOjE2MjQzNzIxMjAsImlzcyI6IlN0YW1waXoifQ.zFVo1JUKLdvq6z4qb6fUT9IugGaAEaABoNBLLuWUsME`
                  },
                  // mode: 'no-cors',
                  body: JSON.stringify(dataRawcert)
                }).then(resp => resp.json())
                .then(data => { //<-- Me faltaba este then()
                 
 
  console.log(data)
  console.log(data.notarizations[0])
  console.log(data.notarizations[0].txid)
  console.log(data.notarizations[0].block)
  console.log(data.notarizations[0].timestamp)
const txid=data.notarizations[0].txid;
const block=data.notarizations[0].block;
const timestamp=data.notarizations[0].timestamp;


  var docu = new jsPDF()
      docu.text(timestamp, 10, 10)
      docu.text(txid, 10, 20)
      // docu.text(block, 10, 30)




      docu.save('Certificado Blockchain.pdf')


 
  

  
  

  















                });
async function getdataCertificate(e){
  certificate=e;
  return console.log('certificate✔',certificate);

  
}
// CÓDIGO FUNCIÓN PDF
async function generarPDF(e){
   var docu = new jsPDF()
      docu.text(e, 10, 10)


      docu.save('Certificado Blockchain.pdf')
} });
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

window.addEventListener("DOMContentLoaded", (e) => {
  //vemos si etsa logueado
  if (localStorage.getItem("user")) {
    getUserAuth();
  } else {
    window.location.href = "login.php";
  }
});
  </script>
     <?php include 'includes/scripts.php';?>
     <?php include 'includes/footer.php';?>
<!-- commentary -->
</body>