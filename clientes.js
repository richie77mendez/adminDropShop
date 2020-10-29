
// Initialize Cloud Firestore through Firebase
 firebase.initializeApp({
   apiKey: "AIzaSyDbLM7VEgEKtLa_SwozdeeeQC-BjG1gHzo",
   authDomain: "dropshop-354d4.firebaseapp.com",
   projectId: "dropshop-354d4"
 });

var db = firebase.firestore();

//documento de clientes
var tabla = document.getElementById('tabla');
db.collection("users").onSnapshot((querySnapshot) => {
    querySnapshot.forEach((doc) => {
        console.log(`${doc.id} => ${doc.data().name}`);
        tabla.innerHTML +=
        `
        <tr>
          <th scope="row">${doc.id}</th>
          <td>${doc.data().name}</td>
          <td>${doc.data().points}</td>
          <td>${doc.data().email}</td>
          <td>${doc.data().address}</td>
          <td>${doc.data().city}</td>
          <td>${doc.data().country}</td>
          <td>${doc.data().active}</td>
          <td>${doc.data().createdAt}</td>
          <td><button class="btn btn-danger" onclick="eliminar('${doc.id}')">Eliminar</button></td>
          <td><button class="btn btn-warning" onclick="editar('${doc.id}','${doc.data().name}','${doc.data().email}')">Editar</button></td>
        </tr>
        `
    });
});

//borrar documentos
function eliminar(id){
  db.collection("users").doc(id).delete().then(function() {
      console.log("Document successfully deleted!");
  }).catch(function(error) {
      console.error("Error removing document: ", error);
  });
  }

  function editar(id,nombre,email){
    document.getElementById('name').value = nombre;
    document.getElementById('correo').value = email;
    var boton = document.getElementById('botonF');
    boton.innerHTML = 'Editar';

    boton.onclick = function(){
      var washingtonRef = db.collection("users").doc(id);
      // Set the "capital" field of the city 'DC'
      var nombre = document.getElementById('name').value;
      var email = document.getElementById('correo').value;
      return washingtonRef.update({
          name: nombre,
          email: email
      })
      .then(function() {
          boton.innerHTML = 'Guardar';
          document.getElementById('name').value = '';
          document.getElementById('correo').value = '';
          console.log("Document successfully updated!");
      })
      .catch(function(error) {
          // The document probably doesn't exist.
          console.error("Error updating document: ", error);
      });

    }
  }
