//importar firestore
const db = firebase.firestore();

const ProductForm = document.getElementById('productoForm');
const productosContainer = document.getElementById('productosContainer');
let editStatus = false;
let id = '';

const saveProducto = (lote,dueno,
    fecha_barbechear,
    fecha_desterrar,
    nombre,
    ID,
    ubicacion,
    dimension,
    altitud,
    anios_descanso) => {
    db.collection('productos').doc().set({
        lote: lote,        
        proceso_1: {
            dueno: dueno,
            fecha_barbechear: fecha_barbechear,
            fecha_desterrar: fecha_desterrar,
            maquinaria: {
                ID: ID,
                nombre: nombre
            },
            suelo: {
                altitud: altitud,
                anios_descanso: anios_descanso,
                dimension: dimension,
                ubicacion: ubicacion
            }
        }
        
    });

   
};

const getProductos = () => db.collection('productos').get();

const getProducto = (id) => db.collection('productos').doc(id).get();

const onGetProductos = (callback) => db.collection('productos').onSnapshot(callback);

const deleteProduct = id => db.collection('productos').doc(id).delete();

const updateProducto = (id, updatedProducto) => db.collection('productos').doc(id).update(updatedProducto);


window.addEventListener('DOMContentLoaded', async(e) => {
   
    onGetProductos((querySnapshot) => {
        let cont = 1;
        productosContainer.innerHTML = '';
        querySnapshot.forEach(doc => {
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
                    <button class="btn btn-primary btn-delete" data-id="${producto.id}">Delete</button>	
                </td>
            </tr>	`;

            const btnsDelete = document.querySelectorAll('.btn-delete');
            btnsDelete.forEach(btn => {
                btn.addEventListener('click', async (e) => {
                    //console.log(e.target.dataset.id);
                    await deleteProduct(e.target.dataset.id);
                    ProductForm.reset();
                    editStatus = false;
                    ProductForm['btn-producto-form'].innerText = 'Enviar';
                });
            });

            //los botones de edit
            const btnEdit = document.querySelectorAll('.btn-edit');
            btnEdit.forEach(btn => {
                btn.addEventListener('click', async (e) => {
                    ProductForm['btn-producto-form'].innerText = 'Actualizar';
                    const doc = await getProducto(e.target.dataset.id);
                    const producto = doc.data();

                    editStatus = true;
                    id = e.target.dataset.id;

                    //llenamos el formulario
                    ProductForm['lote'].value = producto.lote;
                    ProductForm['ubicacion'].value = producto.proceso_1.suelo.ubicacion;
                    ProductForm['dimension'].value = producto.proceso_1.suelo.dimension;
                    ProductForm['altitud'].value = producto.proceso_1.suelo.altitud;
                    ProductForm['anios_descanso'].value = producto.proceso_1.suelo.anios_descanso;
                    ProductForm['nombre'].value = producto.proceso_1.maquinaria.nombre;
                    ProductForm['ID'].value = producto.proceso_1.maquinaria.ID;
                    ProductForm['fecha_barbechear'].value = producto.proceso_1.fecha_barbechear;
                    ProductForm['fecha_desterrar'].value = producto.proceso_1.fecha_desterrar;
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

    const lote = ProductForm['lote'];
    const dueno = ProductForm['dueno'];
    const fecha_barbechear = ProductForm['fecha_barbechear'];
    const fecha_desterrar = ProductForm['fecha_desterrar'];
    const nombre = ProductForm['nombre'];
    const ID = ProductForm['ID'];
    const ubicacion = ProductForm['ubicacion'];
    const dimension = ProductForm['dimension'];
    const altitud = ProductForm['altitud'];
    const anios_descanso = ProductForm['anios_descanso'];

    if(!editStatus)
    {
        let response = await saveProducto(lote.value,
            dueno.value,
            fecha_barbechear.value,
            fecha_desterrar.value,
            nombre.value,
            ID.value,
            ubicacion.value,
            dimension.value,
            altitud.value,
            anios_descanso.value,
            );

    }else{
        await updateProducto(id, {
            //lote: lote.value,
            proceso_1: {
                dueno: dueno.value,
                fecha_barbechear: fecha_barbechear.value,
                fecha_desterrar: fecha_desterrar.value,
                suelo: {
                    ubicacion: ubicacion.value,
                    altitud: altitud.value,
                    dimension: dimension.value,
                    anios_descanso: anios_descanso.value,
                },
                maquinaria: {
                    nombre: nombre.value,
                    ID: ID.value,
                }
            }
        });
    }

    ProductForm.reset();

    lote.focus();

    //console.log(response);

});


const logout = () => {
    localStorage.removeItem('user');
    window.location.href = 'index.php';
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