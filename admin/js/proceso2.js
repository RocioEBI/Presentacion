//importar firestore
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
                    <button class="btn btn-secundary btn-edit" data-id="${producto.id}">Elegir</button>
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

                    //console.log(id);
                    //llenamos el formulario
                    if(producto.proceso_2)
                    {
                        ProductForm['origen'].value = producto.proceso_2.semilla.origen;
                        ProductForm['variedad'].value = producto.proceso_2.semilla.variedad;
                        ProductForm['nombre'].value = producto.proceso_2.insumo.nombre;
                        ProductForm['caracteristicas'].value = producto.proceso_2.insumo.caracteristicas;
                        ProductForm['documento'].value = producto.proceso_2.insumo.documento;
                        ProductForm['certificado'].value = producto.proceso_2.insumo.certificado;
                        ProductForm['fecha_enterrar'].value = producto.proceso_2.fecha_enterrar;
                        ProductForm['fecha_aplicar'].value = producto.proceso_2.fecha_aplicar;
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

    const origen = ProductForm['origen'];
    const variedad = ProductForm['variedad'];
    const nombre = ProductForm['nombre'];
    const fecha_enterrar = ProductForm['fecha_enterrar'];
    const fecha_aplicar = ProductForm['fecha_aplicar'];
    const caracteristicas = ProductForm['caracteristicas'];
    const documento = ProductForm['documento'];
    const certificado = ProductForm['certificado'];

    if(!editStatus)
    {
        //await saveProducto(lote.value, fecha_barbechear.value, fecha_desterrar.value, maquinaria.value, suelo.value);
    }else{
        await updateProducto(id, {
            //lote: lote.value,
            proceso_2: {
                semilla: {
                    origen: origen.value,
                    variedad: variedad.value
                },
                insumo: {
                    nombre: nombre.value,
                    caracteristicas: caracteristicas.value,
                    documento: documento.value,
                    certificado: certificado.value
                },
                fecha_enterrar: fecha_enterrar.value,
                fecha_aplicar: fecha_aplicar.value
            }
        });
    }

    ProductForm.reset();

    origen.focus();

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