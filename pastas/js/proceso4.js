//importar firestore

const ProductForm = document.getElementById('productoForm');
const productosContainer = document.getElementById('productosContainer');
let editStatus = true;
const idProducto = localStorage.getItem('idproducto');



const getProductos = () => db.collection("pastas").get();

const getProducto = (id) => db.collection("pastas").doc(id).get();

const onGetProductos = (callback) => db.collection("pastas").onSnapshot(callback);

const deleteProduct = id => db.collection("pastas").doc(id).delete();

const updateProducto = (id, updatedProducto) => db.collection("pastas").doc(id).update(updatedProducto);


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

                    console.log(producto);
                    //llenamos el formulario
                    if(producto.proceso_4)
                    {
                        ProductForm['nombre_maquinaria'].value = producto.proceso_4.maquina.nombre_maquinaria;
                        ProductForm['ID_maquinaria'].value = producto.proceso_4.maquina.ID_maquinaria;

                        ProductForm['cortar_mp'].value = producto.proceso_4.cortar_mp;

                        ProductForm['trillar_mp'].value = producto.proceso_4.trillar_mp;

                        ProductForm['secar_mp'].value = producto.proceso_4.secar_mp;

                        ProductForm['ventear_mp'].value = producto.proceso_4.ventear_mp;

                        ProductForm['ensacar_mp'].value = producto.proceso_4.ensacar_mp;

                    
                        ProductForm['medio_transporte'].value = producto.proceso_4.medio_transporte.medio_transporte;
                        ProductForm['nombre'].value = producto.proceso_4.medio_transporte.nombre;
                        ProductForm['ID'].value = producto.proceso_4.medio_transporte.ID;

                        
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

    const nombre_maquinaria = ProductForm['nombre_maquinaria'];
    const ID_maquinaria = ProductForm['ID_maquinaria'];
    const cortar_mp = ProductForm['cortar_mp'];
    const trillar_mp = ProductForm['trillar_mp'];
    const secar_mp = ProductForm['secar_mp'];
    const ventear_mp = ProductForm['ventear_mp'];
    const ensacar_mp = ProductForm['ensacar_mp'];
    const medio_transporte = ProductForm['medio_transporte'];
    const nombre = ProductForm['nombre'];
    const ID = ProductForm['ID'];
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
                maquina:{
                    nombre_maquinaria: nombre_maquinaria.value,
                    ID_maquinaria: ID_maquinaria.value,
                },
                cortar_mp: cortar_mp.value,
                trillar_mp: trillar_mp.value,
                secar_mp: secar_mp.value,
                ventear_mp: ventear_mp.value,
                ensacar_mp: ensacar_mp.value,
                medio_transporte: {
                    nombre: nombre.value,
                    medio_transporte: medio_transporte.value,
                    ID: ID.value
                },
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


window.addEventListener('DOMContentLoaded', e => {                 
    //vemos si etsa logueado
    if(localStorage.getItem('user'))
    {
        getUserAuth();
    }else{
        window.location.href = 'login.php';
    }
});