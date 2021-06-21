// const ProductForm = document.getElementById("productoForm");
// const productosContainer = document.getElementById("productosContainer");
// let editStatus = true;
// const idProducto = localStorage.getItem("idproducto");

// const getProductos = () => db.collection("productos").get();

// const getProducto = (id) => db.collection("productos").doc(id).get();

// const onGetProductos = (callback) =>
//   db.collection("productos").onSnapshot(callback);

// const deleteProduct = (id) => db.collection("productos").doc(id).delete();

// const updateProducto = (id, updatedProducto) =>
//   db.collection("productos").doc(id).update(updatedProducto);

// window.addEventListener("DOMContentLoaded", async (e) => {
//   onGetProductos((querySnapshot) => {
//     let cont = 1;
//     ProductForm["btn-producto-form"].disabled = true;
//     productosContainer.innerHTML = "";
//     querySnapshot.forEach((doc) => {
//       const producto = doc.data();
//       producto.id = doc.id;
//       console.log(producto);
//       productosContainer.innerHTML += `<tr>
//                 <th scope="row">${cont}</th>
//                 <td>${producto.proceso_1.suelo.ubicacion}</td>
//                 <td>${producto.proceso_1.maquinaria.nombre}</td>
//                 <td>${producto.proceso_1.fecha_barbechear}</td>
//                 <td>${producto.proceso_1.fecha_desterrar}</td>
//                 <td>${producto.lote}</td>
//                 <td>
//                     <button class="btn btn-secundary btn-edit" data-id="${producto.id}">FUNCIONAS</button>
//                 </td>
//             </tr>	`;

//       //los botones de edit
//       const btnEdit = document.querySelectorAll(".btn-edit");
//       btnEdit.forEach((btn) => {
//         btn.addEventListener("click", async (e) => {
//           ProductForm["btn-producto-form"].disabled = false;
//           const doc = await getProducto(e.target.dataset.id);
//           const producto = doc.data();
//           console.log(doc.id);
//           editStatus = true;
//           id = e.target.dataset.id;
//           var lote=doc.lote

//           //Número de lote en javascript
//           console.log(lote);
//           console.log(producto);

          
// //Convertir objeto a json
// productoJson= JSON.stringify(producto);
// // console.log(productoJson)
// var productLote= productoJson
// console.log(productLote);


// //generar hash del json
// var digest = sha256(productLote);
// console.log(digest);

// //Función que retorna el objeto y propiedad específica requerido por Stampiz
// // function solicitaNotaria(obj, prop){
// //     return obj[prop];
// //  }
// //  let datos= {filename: 'dummy.txt', filesize: '12345',digest: digest ,api_mode:'true'};
// //  console.log(solicitaNotaria(datos, 'api_mode'))


// // Hora
// // var hoy = new Date();
// // console.log(hoy)

// var hoy = new Date().toJSON().slice(0,10).replace(/-/g,'/');
// console.log(hoy)

// // Número de lote en PHP

// //


// //Función que retorna el objeto  requerido por Stampiz
// function solicitaNotaria(obj){
//     return obj;
//  }
//   let datos= {filename: lote + ' '+ hoy, filesize: '12345',digest: digest ,api_mode:'true',contenido_Json:productLote};
//  console.log(solicitaNotaria(datos))
//           //llenamos el formulario
//           if (producto.proceso_6) {
//             ProductForm["recepcionar_mp"].value =
//               producto.proceso_6.fecha_recepcionar_mp;
//             ProductForm["fecha_controlar_calidad_ingreso"].value =
//               producto.proceso_6.control_calidad_ingreso.fecha_controlar_calidad_ingreso;
//             ProductForm["control_calidad_ingreso"].value =
//               producto.proceso_6.control_calidad_ingreso.control_calidad_ingreso;

//             ProductForm["fecha_almacenar_mp_preparada"].value =
//               producto.proceso_6.almacenar_mp_preparada.fecha_almacenar_mp_preparada;
//             ProductForm["ubicacion_mp_preparada"].value =
//               producto.proceso_6.almacenar_mp_preparada.ubicacion_mp_preparada;
//             ProductForm["fifo_fefo_almacenar_mp"].value =
//               producto.proceso_6.almacenar_mp_preparada.fifo_fefo_almacenar_mp;
//             ProductForm["lote"].value =
//               producto.proceso_6.almacenar_mp_preparada.lote;
//             ProductForm["peso"].value =
//               producto.proceso_6.almacenar_mp_preparada.peso;

//             ProductForm["nombre_maquinaria"].value =
//               producto.proceso_6.maquinaria.nombre_maquinaria;
//             ProductForm["ID_maquinaria"].value =
//               producto.proceso_6.maquinaria.ID_maquinaria;

//             ProductForm["nombre_insumo"].value =
//               producto.proceso_6.insumo.nombre_insumo;
//             ProductForm["caracteristicas"].value =
//               producto.proceso_6.insumo.caracteristicas;
//             ProductForm["documento"].value =
//               producto.proceso_6.insumo.documento;
//             ProductForm["certificado"].value =
//               producto.proceso_6.insumo.certificado;

//             ProductForm["calidad_empaque"].value =
//               producto.proceso_6.empaque_primario.calidad_empaque;
//             ProductForm["hermeticidad"].value =
//               producto.proceso_6.empaque_primario.hermeticidad;

//             ProductForm["calidad_caja"].value =
//               producto.proceso_6.caja.calidad_caja;

//             ProductForm["control_calidad_salida"].value =
//               producto.proceso_6.control_calidad_salida.control_calidad_salida;
//             ProductForm["fecha_controlar_calidad_salida"].value =
//               producto.proceso_6.control_calidad_salida.fecha_controlar_calidad_salida;

//             ProductForm["fecha_almacenar_semilla"].value =
//               producto.proceso_6.almacenar_semilla.fecha_almacenar_semilla;
//             ProductForm["caracteristicas_almacen_semilla"].value =
//               producto.proceso_6.almacenar_semilla.caracteristicas_almacen_semilla;
//             ProductForm["ubicacion_semilla"].value =
//               producto.proceso_6.almacenar_semilla.ubicacion_semilla;

//             ProductForm["fecha_lav_reb_pel_mp"].value =
//               producto.proceso_6.lavar_pelar_rebanar_mp.fecha_lav_reb_pel_mp;
//             ProductForm["espesor_hojuela_cruda"].value =
//               producto.proceso_6.lavar_pelar_rebanar_mp.espesor_hojuela_cruda;

//             ProductForm["fecha_freir_mp"].value =
//               producto.proceso_6.freir_mp.fecha_freir_mp;
//             ProductForm["rendimiento_mp"].value =
//               producto.proceso_6.freir_mp.rendimiento_mp;
//             ProductForm["temperatura"].value =
//               producto.proceso_6.freir_mp.temperatura;
//             ProductForm["calidad_aceite"].value =
//               producto.proceso_6.freir_mp.calidad_aceite;
//             ProductForm["control_organoleptico"].value =
//               producto.proceso_6.freir_mp.control_organoleptico;

//             ProductForm["fecha_adic_sal_hojue"].value =
//               producto.proceso_6.adicionar_sal.fecha_adic_sal_hojue;
//             ProductForm["porc_sal_hojuela"].value =
//               producto.proceso_6.adicionar_sal.porc_sal_hojuela;

//             ProductForm["fecha_empacar_producto"].value =
//               producto.proceso_6.fecha_empacar_producto;
//             ProductForm["fecha_preparar_caja"].value =
//               producto.proceso_6.fecha_preparar_caja;

//             ProductForm["fecha_almacenar_producto"].value =
//               producto.proceso_6.almacenar_producto.fecha_almacenar_producto;
//             ProductForm["ubicacion_almacen_producto"].value =
//               producto.proceso_6.almacenar_producto.ubicacion_almacen_producto;
//             ProductForm["fifo_fefo_almacenar_producto"].value =
//               producto.proceso_6.almacenar_producto.fifo_fefo_almacenar_producto;

//             ProductForm["medio_transporte"].value =
//               producto.proceso_6.medio_transporte.medio_transporte;
//             ProductForm["nombre_transporte"].value =
//               producto.proceso_6.medio_transporte.nombre_transporte;
//             ProductForm["ID_transporte"].value =
//               producto.proceso_6.medio_transporte.ID_transporte;

//             ProductForm["fecha_transportar_producto"].value =
//               producto.proceso_6.transporte_producto.fecha_transportar_producto;
//             ProductForm["transportista"].value =
//               producto.proceso_6.transporte_producto.transportista;
//             ProductForm["condicion_higienica_transporte"].value =
//               producto.proceso_6.transporte_producto.condicion_higienica_transporte;
//             ProductForm["nivel_servicio"].value =
//               producto.proceso_6.transporte_producto.nivel_servicio;
//           } else {
//             ProductForm.reset();
//           }
//         });
//       });

//       cont++;
//     });
//   });

//   //vemos si etsa logueado
//   if (localStorage.getItem("user")) {
//   } else {
//     //window.location.href = '/index.html';
//   }
// });

// ProductForm.addEventListener("submit", async (e) => {
//   e.preventDefault();
//   console.log(ProductForm['lote'].value);

//   const fecha_recepcionar_mp = ProductForm["recepcionar_mp"];
//   const fecha_controlar_calidad_ingreso =
//     ProductForm["fecha_controlar_calidad_ingreso"];
//   const control_calidad_ingreso = ProductForm["control_calidad_ingreso"];
//   const fecha_almacenar_mp_preparada =
//     ProductForm["fecha_almacenar_mp_preparada"];
//   const ubicacion_mp_preparada = ProductForm["ubicacion_mp_preparada"];
//   const fifo_fefo_almacenar_mp = ProductForm["fifo_fefo_almacenar_mp"];
//   const lote = ProductForm["lote"];
//   const peso = ProductForm["peso"];

//   const fecha_almacenar_semilla = ProductForm["fecha_almacenar_semilla"];
//   const ubicacion_semilla = ProductForm["ubicacion_semilla"];
//   const caracteristicas_almacen_semilla =
//     ProductForm["caracteristicas_almacen_semilla"];

//   const nombre_maquinaria = ProductForm["nombre_maquinaria"];
//   const ID_maquinaria = ProductForm["ID_maquinaria"];

//   const nombre_insumo = ProductForm["nombre_insumo"];
//   const caracteristicas = ProductForm["caracteristicas"];
//   const documento = ProductForm["documento"];
//   const certificado = ProductForm["certificado"];

//   const calidad_empaque = ProductForm["calidad_empaque"];
//   const hermeticidad = ProductForm["hermeticidad"];

//   const calidad_caja = ProductForm["calidad_caja"];

//   const control_calidad_salida = ProductForm["control_calidad_salida"];
//   const fecha_controlar_calidad_salida =
//     ProductForm["fecha_controlar_calidad_salida"];

//   const fecha_lav_reb_pel_mp = ProductForm["fecha_lav_reb_pel_mp"];
//   const espesor_hojuela_cruda = ProductForm["espesor_hojuela_cruda"];

//   const fecha_freir_mp = ProductForm["fecha_freir_mp"];
//   const rendimiento_mp = ProductForm["rendimiento_mp"];
//   const temperatura = ProductForm["temperatura"];
//   const calidad_aceite = ProductForm["calidad_aceite"];
//   const control_organoleptico = ProductForm["control_organoleptico"];

//   const fecha_adic_sal_hojue = ProductForm["fecha_adic_sal_hojue"];
//   const porc_sal_hojuela = ProductForm["porc_sal_hojuela"];
//   const fecha_empacar_producto = ProductForm["fecha_empacar_producto"];
//   const fecha_preparar_caja = ProductForm["fecha_preparar_caja"];
//   const fecha_almacenar_producto = ProductForm["fecha_almacenar_producto"];
//   const ubicacion_almacen_producto = ProductForm["ubicacion_almacen_producto"];
//   const fifo_fefo_almacenar_producto =
//     ProductForm["fifo_fefo_almacenar_producto"];
//   const medio_transporte = ProductForm["medio_transporte"];
//   const nombre_transporte = ProductForm["nombre_transporte"];
//   const ID_transporte = ProductForm["ID_transporte"];
//   const fecha_transportar_producto = ProductForm["fecha_transportar_producto"];
//   const transportista = ProductForm["transportista"];
//   const condicion_higienica_transporte =
//     ProductForm["condicion_higienica_transporte"];
//   const nivel_servicio = ProductForm["nivel_servicio"];

//   if (!editStatus) {
//     //await saveProducto(lote.value, fecha_barbechear.value, fecha_desterrar.value, maquinaria.value, suelo.value);
//   } else {
//     await updateProducto(id, {
//       estado: "complet",
//       proceso_6: {
//         fecha_recepcionar_mp: fecha_recepcionar_mp.value,
//         control_calidad_ingreso: {
//           fecha_controlar_calidad_ingreso:
//             fecha_controlar_calidad_ingreso.value,
//           control_calidad_ingreso: control_calidad_ingreso.value,
//         },
//         almacenar_semilla: {
//           fecha_almacenar_semilla: fecha_almacenar_semilla.value,
//           ubicacion_semilla: ubicacion_semilla.value,
//           caracteristicas_almacen_semilla:
//             caracteristicas_almacen_semilla.value,
//         },
//         almacenar_mp_preparada: {
//           fecha_almacenar_mp_preparada: fecha_almacenar_mp_preparada.value,
//           ubicacion_mp_preparada: ubicacion_mp_preparada.value,
//           fifo_fefo_almacenar_mp: fifo_fefo_almacenar_mp.value,
//           lote: lote.value,
//           peso: peso.value,
//         },
//         maquinaria: {
//           nombre_maquinaria: nombre_maquinaria.value,
//           ID_maquinaria: ID_maquinaria.value,
//         },
//         insumo: {
//           nombre_insumo: nombre_insumo.value,
//           caracteristicas: caracteristicas.value,
//           documento: documento.value,
//           certificado: certificado.value,
//         },
//         empaque_primario: {
//           calidad_empaque: calidad_empaque.value,
//           hermeticidad: hermeticidad.value,
//         },
//         caja: {
//           calidad_caja: calidad_caja.value,
//         },
//         control_calidad_salida: {
//           fecha_controlar_calidad_salida: fecha_controlar_calidad_salida.value,
//           control_calidad_salida: control_calidad_salida.value,
//         },
//         lavar_pelar_rebanar_mp: {
//           fecha_lav_reb_pel_mp: fecha_lav_reb_pel_mp.value,
//           espesor_hojuela_cruda: espesor_hojuela_cruda.value,
//         },
//         freir_mp: {
//           fecha_freir_mp: fecha_freir_mp.value,
//           rendimiento_mp: rendimiento_mp.value,
//           temperatura: temperatura.value,
//           calidad_aceite: calidad_aceite.value,
//           control_organoleptico: control_organoleptico.value,
//         },
//         adicionar_sal: {
//           fecha_adic_sal_hojue: fecha_adic_sal_hojue.value,
//           porc_sal_hojuela: porc_sal_hojuela.value,
//         },
//         fecha_empacar_producto: fecha_empacar_producto.value,
//         fecha_preparar_caja: fecha_preparar_caja.value,
//         almacenar_producto: {
//           fecha_almacenar_producto: fecha_almacenar_producto.value,
//           ubicacion_almacen_producto: ubicacion_almacen_producto.value,
//           fifo_fefo_almacenar_producto: fifo_fefo_almacenar_producto.value,
//         },
//         medio_transporte: {
//           medio_transporte: medio_transporte.value,
//           nombre_transporte: nombre_transporte.value,
//           ID_transporte: ID_transporte.value,
//         },
//         transporte_producto: {
//           fecha_transportar_producto: fecha_transportar_producto.value,
//           transportista: transportista.value,
//           condicion_higienica_transporte: condicion_higienica_transporte.value,
//           nivel_servicio: nivel_servicio.value,
//         },
//       },
//     });
//   }

//   ProductForm.reset();

//   fecha_controlar_calidad_ingreso.focus();

//   //console.log(response);
// });

// window.addEventListener("DOMContentLoaded", (e) => {
//   //vemos si etsa logueado
//   if (localStorage.getItem("user")) {
//     getUserAuth();
//   } else {
//     window.location.href = "login.php";
//   }
// });
// coment