//importar firestore

const ProductForm = document.getElementById('productoForm');
const productosContainer = document.getElementById('productosContainer');
let editStatus = true;
const idProducto = localStorage.getItem('idproducto');



const getProductos = () => db.collection('pastas').get();

const getProducto = (id) => db.collection('pastas').doc(id).get();

const onGetProductos = (callback) => db.collection('pastas').onSnapshot(callback);

const deleteProduct = id => db.collection('pastas').doc(id).delete();

const updateProducto = (id, updatedProducto) => db.collection('pastas').doc(id).update(updatedProducto);


window.addEventListener('DOMContentLoaded', async(e) => {
   
    onGetProductos((querySnapshot) => {
        let cont = 1;
        ProductForm['btn-producto-form'].disabled = true;
        productosContainer.innerHTML = '';
        querySnapshot.forEach(doc => {
            const producto = doc.data();
            producto.id = doc.id;
           //console.log(producto);
            productosContainer.innerHTML += `<tr>
                <th scope="row">${cont}</th>
                <td>${producto.proceso_1.suelo.ubicacion}</td>
                <td>${producto.proceso_1.maquinaria.nombre}</td>
                <td>${producto.lote}</td>
                <td>
                    <button class="btn btn-secundary btn-edit" data-id="${producto.id}">Edit</button>
                </td>
            </tr>	`;

            

            //los botones de edit
            const btnEdit = document.querySelectorAll('.btn-edit');
            btnEdit.forEach(btn => {
                btn.addEventListener('click', async (e) => {
                    ProductForm['btn-producto-form'].disabled = false;
                    const doc = await getProducto(e.target.dataset.id);
                    const producto = doc.data();
                    //console.log(doc.id);
                    editStatus = true;
                    id = e.target.dataset.id;

                    //console.log(producto);
                    //llenamos el formulario
                    if(producto.proceso_5)
                    {
                        console.log('prod',producto);
                        ProductForm['fecha_recepcionar_mp'].value = producto.proceso_5.recepcionar_mp.fecha_recepcionar_mp;
                        ProductForm['humedad_mp'].value = producto.proceso_5.recepcionar_mp.humedad_mp;
                        ProductForm['formato_calidad'].value = producto.proceso_5.recepcionar_mp.formato_calidad;

                        ProductForm['fecha_almacenar_mp'].value = producto.proceso_5.almacenar_mp.fecha_almacenar_mp;
                        ProductForm['ubicacion_mp'].value = producto.proceso_5.almacenar_mp.ubicacion_mp;
                        ProductForm['caracteristicas_almacen_mp'].value = producto.proceso_5.almacenar_mp.caracteristicas_almacen_mp;

                        ProductForm['nombre_maquinaria'].value = producto.proceso_5.registrar_maquinaria.nombre_maquinaria;
                        ProductForm['ID_maquinaria'].value = producto.proceso_5.registrar_maquinaria.ID_maquinaria;

                        ProductForm['formato_aprobacion_bolsa'].value = producto.proceso_5.registrar_envase.formato_aprobacion_bolsa;
                        ProductForm['formato_verificado'].value = producto.proceso_5.registrar_envase.formato_verificado;

                        ProductForm['fecha_separar_impuresas'].value = producto.proceso_5.separar_impuresas.fecha_separar_impuresas;
                        ProductForm['porc_saponina'].value = producto.proceso_5.separar_impuresas.porc_saponina;
                        ProductForm['temp_maquina'].value= producto.proceso_5.separar_impuresas.temp_maquina;
                        ProductForm['presion_maquina'].value = producto.proceso_5.separar_impuresas.presion_maquina;
                        ProductForm['humedad_producto'].value= producto.proceso_5.separar_impuresas.humedad_producto;

                        ProductForm['fecha_seleccion'].value = producto.proceso_5.seleccionar_tamano.fecha_seleccion;
                        ProductForm['descarte_gravimetrica'].value = producto.proceso_5.seleccionar_tamano.descarte_gravimetrica;
                        ProductForm['descarte_optico'].value = producto.proceso_5.seleccionar_tamano.descarte_optico;
                        ProductForm['descarte_dete_metales'].value = producto.proceso_5.seleccionar_tamano.descarte_dete_metales;

                        ProductForm['fecha_envasado'].value = producto.proceso_5.envasar_mp;

                        ProductForm['fecha_almacenar'].value = producto.proceso_5.almacenar_mpp.fecha_almacenar;
                        ProductForm['ubic_almacen_mp_preparada'].value = producto.proceso_5.almacenar_mpp.ubic_almacen_mp_preparada;
                        ProductForm['humedad_almacen_mpp'].value = producto.proceso_5.almacenar_mpp.humedad_almacen_mpp;
                        ProductForm['temp_almacen_mpp'].value = producto.proceso_5.almacenar_mpp.temp_almacen_mpp;

                        ProductForm['medio_transporte'].value = producto.proceso_5.medio_transporte.medio_transporte;
                        ProductForm['nombre'].value = producto.proceso_5.medio_transporte.nombre;
                        ProductForm['ID_mt'].value = producto.proceso_5.medio_transporte.ID_mt;

                        ProductForm['fecha_trans_mpp'].value = producto.proceso_5.transportar_mpp.fecha_trans_mpp;
                        ProductForm['transportista'].value = producto.proceso_5.transportar_mpp.transportista;
                        ProductForm['condi_trans'].value = producto.proceso_5.transportar_mpp.condi_trans;
                        ProductForm['hoja_tec_cal'].value = producto.proceso_5.transportar_mpp.hoja_tec_cal;

                    }else{
                        ProductForm.reset();
                    }
                });
            });

            cont ++;
        });
    });
    
    //vemos si etsa logueado
    if(localStorage.getItem('user'))
    {

    }else{
        //window.location.href = '/index.html';
    }
});

ProductForm.addEventListener('submit', async(e) => {
    e.preventDefault();
    //console.log(ProductForm['lote'].value);

    const fecha_recepcionar_mp = ProductForm['fecha_recepcionar_mp'];
    const humedad_mp = ProductForm['humedad_mp'];
    const formato_calidad = ProductForm['formato_calidad'];

    const fecha_almacenar_mp = ProductForm['fecha_almacenar_mp'];
    const ubicacion_mp = ProductForm['ubicacion_mp'];
    const caracteristicas_almacen_mp = ProductForm['caracteristicas_almacen_mp'];

    const nombre_maquinaria = ProductForm['nombre_maquinaria'];
    const ID_maquinaria = ProductForm['ID_maquinaria'];

    const formato_aprobacion_bolsa = ProductForm['formato_aprobacion_bolsa'];
    const formato_verificado = ProductForm['formato_verificado'];

    const fecha_separar_impuresas = ProductForm['fecha_separar_impuresas'];
    const porc_saponina = ProductForm['porc_saponina'];
    const temp_maquina = ProductForm['temp_maquina'];
    const presion_maquina = ProductForm['presion_maquina'];
    const humedad_producto = ProductForm['humedad_producto'];

    const fecha_seleccion = ProductForm['fecha_seleccion'];
    const descarte_gravimetrica = ProductForm['descarte_gravimetrica'];
    const descarte_optico = ProductForm['descarte_optico'];
    const descarte_dete_metales = ProductForm['descarte_dete_metales'];

    const fecha_envasado = ProductForm['fecha_envasado'];

    const fecha_almacenar = ProductForm['fecha_almacenar'];
    const ubic_almacen_mp_preparada = ProductForm['ubic_almacen_mp_preparada'];
    const humedad_almacen_mpp = ProductForm['humedad_almacen_mpp'];
    const temp_almacen_mpp = ProductForm['temp_almacen_mpp'];

    const medio_transporte = ProductForm['medio_transporte'];
    const nombre = ProductForm['nombre'];
    const ID_mt = ProductForm['ID_mt'];

    const fecha_trans_mpp = ProductForm['fecha_trans_mpp'];
    const transportista = ProductForm['transportista'];
    const condi_trans = ProductForm['condi_trans'];
    const hoja_tec_cal = ProductForm['hoja_tec_cal'];

    if(!editStatus)
    {
        
    }else{
        await updateProducto(id, {
            //lote: lote.value,
            proceso_5: {
                recepcionar_mp: {
                    fecha_recepcionar_mp: fecha_recepcionar_mp.value,
                    humedad_mp: humedad_mp.value,
                    formato_calidad: formato_calidad.value,
                },
                almacenar_mp: {
                    ubicacion_mp: ubicacion_mp.value,
                    fecha_almacenar_mp: fecha_almacenar_mp.value,
                    caracteristicas_almacen_mp: caracteristicas_almacen_mp.value,
                },
                registrar_maquinaria: {
                    nombre_maquinaria: nombre_maquinaria.value,
                    ID_maquinaria: ID_maquinaria.value,
                },
                registrar_envase: {
                    formato_aprobacion_bolsa: formato_aprobacion_bolsa.value,
                    formato_verificado: formato_verificado.value
                },
                separar_impuresas: {
                    fecha_separar_impuresas: fecha_separar_impuresas.value,
                    porc_saponina: porc_saponina.value,
                    temp_maquina: temp_maquina.value,
                    presion_maquina: presion_maquina.value,
                    humedad_producto: humedad_producto.value,
                },
                envasar_mp: fecha_envasado.value,
                seleccionar_tamano: {
                    fecha_seleccion: fecha_seleccion.value,
                    descarte_gravimetrica: descarte_gravimetrica.value,
                    descarte_optico: descarte_optico.value,
                    descarte_dete_metales: descarte_dete_metales.value,
                },
                almacenar_mpp: {
                    ubic_almacen_mp_preparada: ubic_almacen_mp_preparada.value,
                    fecha_almacenar: fecha_almacenar.value,
                    humedad_almacen_mpp: humedad_almacen_mpp.value,
                    temp_almacen_mpp: temp_almacen_mpp.value,
                },
                medio_transporte: {
                    nombre: nombre.value,
                    medio_transporte: medio_transporte.value,
                    ID_mt: ID_mt.value
                },
                transportar_mpp: {
                    fecha_trans_mpp: fecha_trans_mpp.value,
                    transportista: transportista.value,
                    condi_trans: condi_trans.value,
                    hoja_tec_cal: hoja_tec_cal.value,
                },


            }
        });
    }

    ProductForm.reset();

    fecha_recepcionar_mp.focus();

    //console.log(response);

});


window.addEventListener('DOMContentLoaded', e => {                 
    //vemos si etsa logueado
    if(localStorage.getItem('user'))
    {
        getUserAuth();
    }else{
        window.location.href = 'login.php';
    }
});