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
                    if(producto.proceso_4)
                    {
                        ProductForm['resultado'].value = producto.proceso_4.medio_transporte.resultado;
                        ProductForm['descarte'].value = producto.proceso_4.medio_transporte.descarte;
                        ProductForm['medio_transporte'].value = producto.proceso_4.medio_transporte.medio_transporte;
                        ProductForm['nombre'].value = producto.proceso_4.medio_transporte.nombre;
                        ProductForm['ID'].value = producto.proceso_4.medio_transporte.ID;

                        ProductForm['fecha_escarbar_mp'].value = producto.proceso_4.fecha_escarbar_mp;
                        ProductForm['fecha_cargar_mp_medio_trans'].value = producto.proceso_4.fecha_cargar_mp_medio_trans;
                        
                        ProductForm['fecha_transporte_mp'].value = producto.proceso_4.transportar_mp.fecha_transporte_mp;
                        ProductForm['transportista'].value = producto.proceso_4.transportar_mp.transportista;
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

    const resultado = ProductForm['resultado'];
    const descarte = ProductForm['descarte'];
    const medio_transporte = ProductForm['medio_transporte'];
    const nombre = ProductForm['nombre'];
    const ID = ProductForm['ID'];
    const fecha_escarbar_mp = ProductForm['fecha_escarbar_mp'];
    const fecha_cargar_mp_medio_trans = ProductForm['fecha_cargar_mp_medio_trans'];
    const fecha_transporte_mp = ProductForm['fecha_transporte_mp'];
    const transportista = ProductForm['transportista'];

    if(!editStatus)
    {
        //await saveProducto(lote.value, fecha_barbechear.value, fecha_desterrar.value, maquinaria.value, suelo.value);
    }else{
        await updateProducto(id, {
            //lote: lote.value,
            proceso_4: {
                medio_transporte: {
                    resultado: resultado.value,
                    descarte: descarte.value,
                    nombre: nombre.value,
                    medio_transporte: medio_transporte.value,
                    ID: ID.value
                },
                fecha_escarbar_mp: fecha_escarbar_mp.value,
                fecha_cargar_mp_medio_trans: fecha_cargar_mp_medio_trans.value,
                transportar_mp: {
                    fecha_transporte_mp: fecha_transporte_mp.value,
                    transportista: transportista.value,
                }
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