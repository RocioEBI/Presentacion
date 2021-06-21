//importar firestore
const db = firebase.firestore();

const ProductForm = document.getElementById('productoForm');
const productosContainer = document.getElementById('productosContainer');
let editStatus = false;
let idProducto = '';

const saveProducto = (lote, fecha_barbechear, fecha_desterrar, maquinaria, suelo) => {
    db.collection('productos').doc().set({
        lote: lote,        
        proceso_1: {
            fecha_barbechear: fecha_barbechear,
            fecha_desterrar: fecha_desterrar,
            maquinaria: {
                ID: '10101',
                nombre: maquinaria
            },
            suelo: {
                altitud: '120 msnm',
                anios_descanso: '14',
                dimension: '140x120',
                ubicacion: suelo
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
                    console.log(e.target.dataset.id);
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
                    ProductForm['suelo'].value = producto.proceso_1.suelo.ubicacion;
                    ProductForm['maquinaria'].value = producto.proceso_1.maquinaria.nombre;
                    ProductForm['fecha_barbechear'].value = producto.proceso_1.fecha_barbechear;
                    ProductForm['fecha_desterrar'].value = producto.proceso_1.fecha_desterrar;
                });
            });

            cont ++;
        });
    });
    
    
});

ProductForm.addEventListener('submit', async(e) => {
    e.preventDefault();
    //console.log(ProductForm['lote'].value);

    const lote = ProductForm['lote'];
    const fecha_barbechear = ProductForm['fecha_barbechear'];
    const fecha_desterrar = ProductForm['fecha_desterrar'];
    const suelo = ProductForm['suelo'];
    const maquinaria = ProductForm['maquinaria'];

    if(!editStatus)
    {
        await saveProducto(lote.value, fecha_barbechear.value, fecha_desterrar.value, maquinaria.value, suelo.value);
    }else{
        await updateProducto(id, {
            //lote: lote.value,
            proceso_4: {
                fecha_barbechear: fecha_barbechear.value,
                fecha_desterrar: fecha_desterrar.value,
                suelo: {
                    ubicacion: suelo.value
                },
                maquinaria: {
                    nombre: maquinaria.value
                }
            }
        });
    }

    ProductForm.reset();

    lote.focus();

    //console.log(response);

});