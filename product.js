
// Initialize Cloud Firestore through Firebase
 firebase.initializeApp({
   apiKey: "AIzaSyDbLM7VEgEKtLa_SwozdeeeQC-BjG1gHzo",
   authDomain: "dropshop-354d4.firebaseapp.com",
   projectId: "dropshop-354d4"
 });

var db = firebase.firestore();

//documento de productos
var tabla = document.getElementById('tabla');
db.collection("products").onSnapshot((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data().name}`);
        tabla.innerHTML +=
        `
        <tr>
          <th scope="row">${doc.id}</th>
          <td>${doc.data().name}</td>
          <td>${doc.data().value}</td>
          <td>${doc.data().tag}</td>
          <td>${doc.data().ofertado}</td>
          <td>${doc.data().fabricant}</td>
          <td>${doc.data().provider}</td>
          <td><button class="btn btn-danger" onclick="eliminar('${doc.id}')">Eliminar</button></td>
          <td><button class="btn btn-warning" onclick="editar('${doc.id}','${doc.data().name}','${doc.data().value}','${doc.data().tag}')">Editar</button></td>
        </tr>
        `
    });
});

//borrar documentos
function eliminar(id){
  db.collection("products").doc(id).delete().then(function() {
      console.log("Document successfully deleted!");
  }).catch(function(error) {
      console.error("Error removing document: ", error);
  });
  }

  function editar(id,nombre,value,tag){
    document.getElementById('name').value = nombre;
    document.getElementById('precio').value = value;
    document.getElementById('tag').value = tag;
    document.getElementById('ofertado').value = ofertado;
    var boton = document.getElementById('botonF');
    boton.innerHTML = 'Editar';

    boton.onclick = function(){
      var washingtonRef = db.collection("products").doc(id);
      // Set the "capital" field of the city 'DC'
      var nombre = document.getElementById('name').value;
      var precio = document.getElementById('precio').value;
      var tag = document.getElementById('tag').value;
      var ofertado = document.getElementById('ofertado').value;
      return washingtonRef.update({
          name: nombre,
          value: precio,
          tag : tag,
          ofertado : ofertado
      })
      .then(function() {
          boton.innerHTML = 'Guardar';
          document.getElementById('name').value = '';
          document.getElementById('precio').value = '';
          document.getElementById('tag').value = '';
          document.getElementById('ofertado').value = '';
          console.log("Document successfully updated!");
      })
      .catch(function(error) {
          // The document probably doesn't exist.
          console.error("Error updating document: ", error);
      });

    }
  }
