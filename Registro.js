
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
  var stateT;
  if (estadoT=="Activo") {
    stateT = "true";
  }else{
    stateT = "false";
  }
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
      document.getElementById('nameT').value='';
      document.getElementById('descripcionT').value='';
      document.getElementById('createdT').value='';
      document.getElementById('updatedT').value='';
      document.getElementById('estadoT').value='';
      document.getElementById('portadaT').value='';
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
  var state;
  if (estadoF=="Activo") {
    state = "true";
  }else{
    state = "false";
  }
  db.collection("fabricant").add({
      name: nameF,
      description: descripcionF,
      createdAt: createdF,
      updatedAt: updatedF,
      active: estadoF
  })
  .then(function(docRef) {
      console.log("Fabricante escrito con ID: ", docRef.id);
      document.getElementById('nameF').value='';
      document.getElementById('descripcionF').value='';
      document.getElementById('createdF').value='';
      document.getElementById('updatedF').value='';
      document.getElementById('estadoF').value='';
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
  var state;
  if (estadoP=="Activo") {
    state = "true";
  }else{
    state = "false";
  }
  db.collection("providers").add({
      name: nameP,
      description: descripcionP,
      createdAt: createdP,
      updatedAt: updatedP,
      active: estadoP
  })
  .then(function(docRef) {
      console.log("Proveedor escrito con ID: ", docRef.id);
      document.getElementById('nameP').value='';
      document.getElementById('descripcionP').value='';
      document.getElementById('createdP').value='';
      document.getElementById('updatedP').value='';
      document.getElementById('estadoP').value='';
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
    document.getElementById('name').value = '';
    document.getElementById('estado').value= '';
    document.getElementById('descripcion').value= '';
    document.getElementById('precio').value= '';
    document.getElementById('valor').value= '';
    document.getElementById('galeria').value= '';
    document.getElementById('stock').value= '';
    document.getElementById('created').value= '';
    document.getElementById('updated').value= '';
    document.getElementById('categoria').value= '';
    document.getElementById('Proveedor').value= '';
    document.getElementById('Fabricante').value= '';
})
.catch(function(error) {
    console.error("Error adding document: ", error);
});
}

//leer documentos
//documento para proveedores
var prov = document.getElementById('listProveedor');
db.collection("providers").onSnapshot((querySnapshot) => {
  querySnapshot.forEach((doc) => {
      console.log(`${doc.id} => ${doc.data().name}`);
      prov.innerHTML +=
      `
      <option value="${doc.data().name}">

      `
  });
});

//documento para fabricantes
var prov2 = document.getElementById('listFabricante');
db.collection("fabricant").onSnapshot((querySnapshot) => {
  querySnapshot.forEach((doc) => {
      console.log(`${doc.id} => ${doc.data().name}`);
      prov2.innerHTML +=
      `
      <option value="${doc.data().name}">

      `
  });
});

//documento para tags
var prov3 = document.getElementById('listTags');
db.collection("tags").onSnapshot((querySnapshot) => {
  querySnapshot.forEach((doc) => {
      console.log(`${doc.id} => ${doc.data().name}`);
      prov3.innerHTML +=
      `
      <option value="${doc.data().name}">

      `
  });
});
