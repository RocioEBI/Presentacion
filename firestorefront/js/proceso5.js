//importar firestore
const db = firebase.firestore();

const ProductForm = document.getElementById('productoForm');
const productosContainer = document.getElementById('productosContainer');
let editStatus = true;
const idProducto = localStorage.getItem('idproducto');



const getProductos = () => db.collection('productos').get();

const getProducto = (id) => db.collection('productos').doc(id).get();

const onGetProductos = (callback) => db.collection('productos').onSnapshot(callback);

const deleteProduct = id => db.collection('productos').doc(id).delete();

const updateProducto = (id, updatedProducto) => db.collection('productos').doc(id).update(updatedProducto);


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
                <td>${producto.proceso_1.fecha_barbechear}</td>
                <td>${producto.proceso_1.fecha_desterrar}</td>
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

                    console.log(producto);
                    //llenamos el formulario
                    if(producto.proceso_5)
                    {
                        ProductForm['recepcionar_mp'].value = producto.proceso_5.recepcionar_mp;

                        ProductForm['nombre'].value = producto.proceso_5.medio_transporte.nombre;
                        ProductForm['medio_transporte'].value = producto.proceso_5.medio_transporte.medio_transporte;
                        ProductForm['ID'].value = producto.proceso_5.medio_transporte.ID;

                        ProductForm['fecha_clasificar_mp'].value = producto.proceso_5.clasificar_mp.fecha_clasificar_mp;
                        ProductForm['resultado_mp'].value = producto.proceso_5.clasificar_mp.resultado_mp;
                        ProductForm['descarte_mp'].value = producto.proceso_5.clasificar_mp.descarte_mp;
                        ProductForm['resultado_semilla'].value = producto.proceso_5.clasificar_mp.resultado_semilla;
                        ProductForm['descarte_semilla'].value = producto.proceso_5.clasificar_mp.descarte_semilla;

                        ProductForm['fecha_almacenar_mp'].value = producto.proceso_5.almacenar_mp.fecha_almacenar_mp;
                        ProductForm['ubicacion_mp'].value = producto.proceso_5.almacenar_mp.ubicacion_mp;
                        ProductForm['caracteristicas_almacen_mp'].value = producto.proceso_5.almacenar_mp.caracteristicas_almacen_mp;

                        ProductForm['fecha_almacenar_semilla'].value = producto.proceso_5.almacenar_semilla.fecha_almacenar_semilla;
                        ProductForm['ubicacion_semilla'].value = producto.proceso_5.almacenar_semilla.ubicacion_semilla;
                        ProductForm['caracteristicas_almacen_semilla'].value = producto.proceso_5.almacenar_semilla.caracteristicas_almacen_semilla;

                        ProductForm['fecha_lavar_mp'].value = producto.proceso_5.lavar_mp.fecha_lavar_mp;
                        ProductForm['origen_agua'].value = producto.proceso_5.lavar_mp.origen_agua;

                        ProductForm['fecha_ensacar_mp'].value = producto.proceso_5.ensacar_mp.fecha_ensacar_mp;
                        ProductForm['tipo_malla'].value = producto.proceso_5.ensacar_mp.tipo_malla;

                        ProductForm['fecha_almacenar_mp_preparada'].value = producto.proceso_5.almacenar_mp_preparada.fecha_almacenar_mp_preparada;
                        ProductForm['ubicacion_mp_preparada'].value = producto.proceso_5.almacenar_mp_preparada.ubicacion_mp_preparada;
                        ProductForm['caracteristicas_almacen_mp_preparada'].value = producto.proceso_5.almacenar_mp_preparada.caracteristicas_almacen_mp_preparada;

                        ProductForm['fecha_transporte_mp_preparada'].value = producto.proceso_5.transporte_mp_preparada.fecha_transporte_mp_preparada;
                        ProductForm['transportista'].value = producto.proceso_5.transporte_mp_preparada.transportista;
                        ProductForm['condicionamiento_transporte'].value = producto.proceso_5.transporte_mp_preparada.condicionamiento_transporte;


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

    const recepcionar_mp = ProductForm['recepcionar_mp'];
    const nombre = ProductForm['nombre'];
    const medio_transporte = ProductForm['medio_transporte'];
    const ID = ProductForm['ID'];
    const fecha_clasificar_mp = ProductForm['fecha_clasificar_mp'];
    const resultado_mp = ProductForm['resultado_mp'];
    const descarte_mp = ProductForm['descarte_mp'];
    const resultado_semilla = ProductForm['resultado_semilla'];
    const descarte_semilla = ProductForm['descarte_semilla'];
    const fecha_almacenar_mp = ProductForm['fecha_almacenar_mp'];
    const ubicacion_mp = ProductForm['ubicacion_mp'];
    const caracteristicas_almacen_mp = ProductForm['caracteristicas_almacen_mp'];
    const fecha_almacenar_semilla = ProductForm['fecha_almacenar_semilla'];
    const ubicacion_semilla = ProductForm['ubicacion_semilla'];
    const caracteristicas_almacen_semilla = ProductForm['caracteristicas_almacen_semilla'];
    const fecha_lavar_mp = ProductForm['fecha_lavar_mp'];
    const origen_agua = ProductForm['origen_agua'];
    const fecha_ensacar_mp = ProductForm['fecha_ensacar_mp'];
    const tipo_malla = ProductForm['tipo_malla'];
    const fecha_almacenar_mp_preparada = ProductForm['fecha_almacenar_mp_preparada'];
    const ubicacion_mp_preparada = ProductForm['ubicacion_mp_preparada'];
    const caracteristicas_almacen_mp_preparada = ProductForm['caracteristicas_almacen_mp_preparada'];
    const fecha_transporte_mp_preparada = ProductForm['fecha_transporte_mp_preparada'];
    const transportista = ProductForm['transportista'];
    const condicionamiento_transporte = ProductForm['condicionamiento_transporte'];

    if(!editStatus)
    {
        
    }else{
        await updateProducto(id, {
            //lote: lote.value,
            proceso_5: {
                medio_transporte: {
                    nombre: nombre.value,
                    medio_transporte: medio_transporte.value,
                    ID: ID.value
                },
                recepcionar_mp: recepcionar_mp.value,
                clasificar_mp: {
                    fecha_clasificar_mp: fecha_clasificar_mp.value,
                    resultado_mp: resultado_mp.value,
                    descarte_mp: descarte_mp.value,
                    resultado_semilla: resultado_semilla.value,
                    descarte_semilla: descarte_semilla.value,
                },
                almacenar_mp: {
                    fecha_almacenar_mp: fecha_almacenar_mp.value,
                    ubicacion_mp: ubicacion_mp.value,
                    caracteristicas_almacen_mp: caracteristicas_almacen_mp.value
                },
                almacenar_semilla: {
                    fecha_almacenar_semilla: fecha_almacenar_semilla.value,
                    ubicacion_semilla: ubicacion_semilla.value,
                    caracteristicas_almacen_semilla: caracteristicas_almacen_semilla.value
                },
                lavar_mp: {
                    fecha_lavar_mp: fecha_lavar_mp.value,
                    origen_agua: origen_agua.value
                },
                ensacar_mp: {
                    fecha_ensacar_mp: fecha_ensacar_mp.value,
                    tipo_malla: tipo_malla.value
                },
                almacenar_mp_preparada: {
                    fecha_almacenar_mp_preparada: fecha_almacenar_mp_preparada.value,
                    ubicacion_mp_preparada: ubicacion_mp_preparada.value,
                    caracteristicas_almacen_mp_preparada: caracteristicas_almacen_mp_preparada.value
                },
                transporte_mp_preparada: {
                    fecha_transporte_mp_preparada: fecha_transporte_mp_preparada.value,
                    transportista: transportista.value,
                    condicionamiento_transporte: condicionamiento_transporte.value
                },
            }
        });
    }

    ProductForm.reset();

    nombre.focus();

    //console.log(response);

});


const logout = () => {
    localStorage.removeItem('user');
    window.location.href = 'index.html';
};


const getUserAuth = () => {
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          // User is signed in.
          var displayName = user.displayName;
          var email = user.email;
          var emailVerified = user.emailVerified;
          var photoURL = user.photoURL;
          var isAnonymous = user.isAnonymous;
          var uid = user.uid;
          var providerData = user.providerData;
          console.log(user.email);
        } else {
          // User is signed out.
          // ...
        }
      });
}