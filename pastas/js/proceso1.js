const ProductForm = document.getElementById("productoForm");
const productosContainer = document.getElementById("productosContainer");
let editStatus = false;
let id = "";

// Enviar proceso 01 a firebase
const saveProducto = (
  lote,
  fecha_arar,
  fecha_nivelar,
  nombre,
  ID,
  dueno,
  altitud,
  anios_descanso,
  dimension,
  ubicacion
) => {
  //console.log('hhhhhhh');
  db.collection("pastas")
    .doc()
    .set({
      lote: lote,
      estado: "incomplet",
      proceso_1: {
        fecha_arar: fecha_arar,
        fecha_nivelar: fecha_nivelar,
        maquinaria: {
          ID: ID,
          nombre: nombre,
        },
        suelo: {
          dueno: dueno,
          altitud: altitud,
          anios_descanso: anios_descanso,
          dimension: dimension,
          ubicacion: ubicacion,
        },
      },
    });
};

const getProductos = () => db.collection("pastas").get();

const getProducto = (id) => db.collection("pastas").doc(id).get();

const onGetProductos = (callback) =>
  db.collection("pastas").onSnapshot(callback);

const deleteProduct = (id) => db.collection("pastas").doc(id).delete();

const updateProducto = (id, updatedProducto) =>
  db.collection("pastas").doc(id).update(updatedProducto);

window.addEventListener("DOMContentLoaded", async (e) => {
  onGetProductos((querySnapshot) => {
    let cont = 1;
    productosContainer.innerHTML = "";
    querySnapshot.forEach((doc) => {
      const producto = doc.data();
      producto.id = doc.id;
      console.log(querySnapshot.docs.length);
      if (querySnapshot.docs.length > 0) {
        productosContainer.innerHTML += `<tr>
            <th scope="row">${cont}</th>
            <td>${producto.proceso_1.suelo.ubicacion}</td>
            <td>${producto.proceso_1.maquinaria.nombre}</td>
            <td>${producto.lote}</td>
            <td>
                <button class="btn btn-secundary btn-edit" data-id="${producto.id}">Edit</button>			  
                <button class="btn btn-primary btn-delete" data-id="${producto.id}">Delete</button>	
            </td>
        </tr>	`;
      }

      const btnsDelete = document.querySelectorAll(".btn-delete");
      btnsDelete.forEach((btn) => {
        btn.addEventListener("click", async (e) => {
          //console.log(e.target.dataset.id);
          await deleteProduct(e.target.dataset.id);
          ProductForm.reset();
          editStatus = false;
          ProductForm["btn-producto-form"].innerText = "Enviar";
        });
      });

      //los botones de edit
      const btnEdit = document.querySelectorAll(".btn-edit");
      btnEdit.forEach((btn) => {
        btn.addEventListener("click", async (e) => {
          ProductForm["btn-producto-form"].innerText = "Actualizar";
          const doc = await getProducto(e.target.dataset.id);
          const producto = doc.data();

          editStatus = true;
          id = e.target.dataset.id;

          if (producto.proceso_1) {
            //llenamos el formulario
            ProductForm["lote"].value = producto.lote;
            ProductForm["dueno"].value = producto.proceso_1.suelo.dueno;
            ProductForm["altitud"].value = producto.proceso_1.suelo.altitud;
            ProductForm["anios_descanso"].value =
              producto.proceso_1.suelo.anios_descanso;
            ProductForm["dimension"].value = producto.proceso_1.suelo.dimension;
            ProductForm["ubicacion"].value = producto.proceso_1.suelo.ubicacion;
            ProductForm["nombre"].value = producto.proceso_1.maquinaria.nombre;
            ProductForm["ID"].value = producto.proceso_1.maquinaria.ID;
            ProductForm["fecha_arar"].value = producto.proceso_1.fecha_arar;
            ProductForm["fecha_nivelar"].value =
              producto.proceso_1.fecha_nivelar;
          }
        });
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

ProductForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  //ID que se asigna a una variable
  const lote = ProductForm["lote"];
  const fecha_arar = ProductForm["fecha_arar"];
  const fecha_nivelar = ProductForm["fecha_nivelar"];
  const ubicacion = ProductForm["ubicacion"];
  const altitud = ProductForm["altitud"];
  const dueno = ProductForm["dueno"];
  const anios_descanso = ProductForm["anios_descanso"];
  const dimension = ProductForm["dimension"];
  const nombre = ProductForm["nombre"];
  const ID = ProductForm["ID"];

  if (!editStatus) {
    //Llamar a la funcion
    let response = await saveProducto(
      lote.value,
      fecha_arar.value,
      fecha_nivelar.value,
      nombre.value,
      ID.value,
      dueno.value,
      altitud.value,
      anios_descanso.value,
      dimension.value,
      ubicacion.value
    );
  } else {
    await updateProducto(id, {
      lote: lote.value,
      estado: "incomplet",
      proceso_1: {
        fecha_arar: fecha_arar.value,
        fecha_nivelar: fecha_nivelar.value,
        maquinaria: {
          ID: ID.value,
          nombre: nombre.value,
        },
        suelo: {
          dueno: dueno.value,
          altitud: altitud.value,
          anios_descanso: anios_descanso.value,
          dimension: dimension.value,
          ubicacion: ubicacion.value,
        },
      },
    });
  }

  ProductForm.reset();

  lote.focus();

  //console.log(response);
});

window.addEventListener("DOMContentLoaded", (e) => {
  //vemos si etsa logueado
  if (localStorage.getItem("user")) {
    getUserAuth();
  } else {
    window.location.href = "login.php";
  }
});
