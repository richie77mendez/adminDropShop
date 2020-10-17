
// Initialize Cloud Firestore through Firebase
 firebase.initializeApp({
   apiKey: "AIzaSyDbLM7VEgEKtLa_SwozdeeeQC-BjG1gHzo",
   authDomain: "dropshop-354d4.firebaseapp.com",
   projectId: "dropshop-354d4"
 });

var db = firebase.firestore();

//agregar documentos
function guardarTag(){
  var nameT = document.getElementById('nameT').value;
  var descripcionT = document.getElementById('descripcionT').value;
  var createdT = document.getElementById('createdT').value;
  var updatedT = document.getElementById('updatedT').value;
  var estadoT = document.getElementById('estadoT').value;
  var portadaT = document.getElementById('portadaT').value;
  db.collection("tags").add({
      name: nameT,
      description: descripcionT,
      createdAt: createdT,
      updatedAt: updatedT,
      active: estadoT,
      image: portadaT
  })
  .then(function(docRef) {
      console.log("Tag escrito con ID: ", docRef.id);
  })
  .catch(function(error) {
      console.error("Error adding document: ", error);
  });
}

function guardarFabricante(){
  var nameF = document.getElementById('nameF').value;
  var descripcionF = document.getElementById('descripcionF').value;
  var createdF = document.getElementById('createdF').value;
  var updatedF = document.getElementById('updatedF').value;
  var estadoF = document.getElementById('estadoF').value;
  db.collection("fabricant").add({
      name: nameF,
      description: descripcionF,
      createdAt: createdF,
      updatedAt: updatedF,
      active: estadoF
  })
  .then(function(docRef) {
      console.log("Fabricante escrito con ID: ", docRef.id);
  })
  .catch(function(error) {
      console.error("Error adding document: ", error);
  });
}

function guardarProveedor(){
  var nameP = document.getElementById('nameP').value;
  var descripcionP = document.getElementById('descripcionP').value;
  var createdP = document.getElementById('createdP').value;
  var updatedP = document.getElementById('updatedP').value;
  var estadoP = document.getElementById('estadoP').value;
  db.collection("providers").add({
      name: nameP,
      description: descripcionP,
      createdAt: createdP,
      updatedAt: updatedP,
      active: estadoP
  })
  .then(function(docRef) {
      console.log("Proveedor escrito con ID: ", docRef.id);
  })
  .catch(function(error) {
      console.error("Error adding document: ", error);
  });
}


function guardar(){
  var nombre = document.getElementById('name').value;
  var estado = document.getElementById('estado').value;
  var descripcion = document.getElementById('descripcion').value;
  var precio = document.getElementById('precio').value;
  var valor = document.getElementById('valor').value;
  var galeria = document.getElementById('galeria').value;
  var stock = document.getElementById('stock').value;
  var created = document.getElementById('created').value;
  var updated = document.getElementById('updated').value;
  var categoria = document.getElementById('categoria').value;
  var Proveedor = document.getElementById('Proveedor').value;
  var Fabricante = document.getElementById('Fabricante').value;

  var state;
  if (estado=="Activo") {
    state = "true";
  }else{
    state = "false";
  }

db.collection("products").add({
    name: nombre,
    active: state,
    description: descripcion,
    cost: precio,
    value: valor,
    gallery: galeria,
    stock: stock,
    createdAt: created,
    updatedAt: updated,
    tag: categoria,
    provider: Proveedor,
    fabricant: Fabricante
})
.then(function(docRef) {
    console.log("Producto escrito con ID: ", docRef.id);
})
.catch(function(error) {
    console.error("Error adding document: ", error);
});
}
