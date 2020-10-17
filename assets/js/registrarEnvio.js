const TEXT_NO = 'no';
const TEXT_YES = 'yes';

loadTransportes();
loadMetodosEnvio();
loadPaises();
loadCiudades();


var sunday = false;
var monday = false;
var tuesday = false;
var wednesday = false;
var thursday = false;
var friday = false;
var saturday = false;

var disponibilidad = [TEXT_NO, TEXT_NO, TEXT_NO, TEXT_NO, TEXT_NO, TEXT_NO, TEXT_NO];
var transportistas = [];

function setStateToDay(day) {
    switch (day) {
        case 'sunday':
            this.sunday = !this.sunday;
            setDisponibilidad(day, this.sunday);
            // console.log('sunday', sunday);
            break;
        case 'monday':
            this.monday = !this.monday;
            setDisponibilidad(day, this.monday);
            // console.log('monday', monday);
            break;
        case 'tuesday':
            this.tuesday = !this.tuesday;
            setDisponibilidad(day, this.tuesday);
            // console.log('tuesday', tuesday);
            break;
        case 'wednesday':
            this.wednesday = !this.wednesday;
            setDisponibilidad(day, this.wednesday);
            // console.log('wednesday', wednesday);
            break;
        case 'thursday':
            this.thursday = !this.thursday;
            setDisponibilidad(day, this.thursday);
            // console.log('thursday', thursday);
            break;
        case 'friday':
            this.friday = !this.friday;
            setDisponibilidad(day, this.friday);
            // console.log('friday', friday)
            break;
        case 'saturday':
            this.saturday = !this.saturday;
            setDisponibilidad(day, this.saturday);
            // console.log('saturday', saturday);
            break;
    }
    // console.log(this.disponibilidad);

}

function setDisponibilidad(day, state) {
    var newState = TEXT_NO;
    if (state == true) {
        newState = TEXT_YES;
    }
    switch (day) {
        case 'sunday':
            this.disponibilidad[0] = newState;
            break;
        case 'monday':
            this.disponibilidad[1] = newState;
            break;
        case 'tuesday':
            this.disponibilidad[2] = newState;
            break;
        case 'wednesday':
            this.disponibilidad[3] = newState;
            break;
        case 'thursday':
            this.disponibilidad[4] = newState;
            break;
        case 'friday':
            this.disponibilidad[5] = newState;
            break;
        case 'saturday':
            this.disponibilidad[6] = newState;
            break;
    }
}

function saveTransportista() {
    var name = document.getElementById('nameTransport').value;
    var description = document.getElementById('descriptionTransport').value;
    var now = firebase.firestore.FieldValue.serverTimestamp();
    if (!name.trim()) {

    }
    if (!description.trim() !== "") {

    }
    db.collection("transportistas").add({
            name: name,
            description: description,
            state: 'active',
            createdAt: now,
            updatedAt: now,
        })
        .then(function(docRef) {
            console.log("Transportista escrito con ID: ", docRef.id);
        })
        .then(() => setDefaultValuesTransportistas)
        .catch(function(error) {
            console.error("Error adding document: ", error);
        });
}

function saveMetodoEnvio() {
    var name = document.getElementById('nombreMetodoEnvio').value;
    var description = document.getElementById('descripcionMetodoEnvio').value;
    var transport = document.getElementById("nombreTransporte");
    var idTransport = transport.options[transport.selectedIndex].value;
    var nameTransport = transport.options[transport.selectedIndex].text;
    // var idTransport = document.getElementById('nombreTransporte').value;
    // var nameTransport = document.getElementById('nombreTransporte').textContent;
    var initHour = document.getElementById('inicioHorario').value;
    var endHour = document.getElementById('finHorario').value;
    var availability = this.disponibilidad;
    var now = firebase.firestore.FieldValue.serverTimestamp();

    db.collection("metodosEnvio").add({
            name: name,
            description: description,
            nameTransport: nameTransport,
            idTransport: idTransport,
            initHour: initHour,
            endHour: endHour,
            availability: availability,
            createdAt: now,
            updatedAt: now,
        })
        .then(function(docRef) {
            console.log("Metodo envio escrito con ID: ", docRef.id);
        })
        .then(() => setDefaultValuesMetodoEnvio())
        .catch(function(error) {
            console.error("Error adding document: ", error);
        });
    // setDefaultValuesMetodoEnvio();
}

function saveZonaEnvio() {
    var metodoEnvio = document.getElementById('nombresMetodoEnvio').value;
    var pais = document.getElementById("nombresPaises");
    var valuePais = pais.options[pais.selectedIndex].value;
    var ciudad = document.getElementById("nombresCiudades");
    var valueCiudad = ciudad.options[ciudad.selectedIndex].value;
    var precioZona = document.getElementById("precioZona").value;
    var now = firebase.firestore.FieldValue.serverTimestamp();

    db.collection("zonasEnvio").add({
            metod: metodoEnvio,
            country: valuePais,
            city: valueCiudad,
            cost: precioZona,
            createdAt: now,
            updatedAt: now,
        })
        .then(function(docRef) {
            console.log("Metodo envio escrito con ID: ", docRef.id);
        })
        .catch(function(error) {
            console.error("Error adding document: ", error);
        });

}

function setDefaultValuesMetodoEnvio() {
    document.getElementById('nombreMetodoEnvio').value = ' ';
    document.getElementById('descripcionMetodoEnvio').value = ' ';
    document.getElementById('dow1').checked = false;
    document.getElementById('dow2').checked = false;
    document.getElementById('dow3').checked = false;
    document.getElementById('dow4').checked = false;
    document.getElementById('dow5').checked = false;
    document.getElementById('dow6').checked = false;
    document.getElementById('dow7').checked = false;
    sunday = false;
    monday = false;
    tuesday = false;
    wednesday = false;
    thursday = false;
    friday = false;
    saturday = false;
    disponibilidad = [TEXT_NO, TEXT_NO, TEXT_NO, TEXT_NO, TEXT_NO, TEXT_NO, TEXT_NO];
    reloadAll();
}

function setDefaultValuesTransportistas() {
    document.getElementById('nameTransport').value = ' ';
    document.getElementById('descriptionTransport').value = ' ';
    reloadAll();
}

function loadTransportes() {

    var select = document.getElementById("nombreTransporte");

    db.collection("transportistas")
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                var option = document.createElement("option");
                option.text = doc.data().name;
                option.title = doc.data().name;
                option.value = doc.id;
                select.add(option);
                // doc.data() is never undefined for query doc snapshots
                // console.log(doc.id, " => ", doc.data().name);
            });
        });


    // var example_array = {
    //     ValueA: 'Transporte 1',
    //     ValueB: 'Transporte 2',
    //     ValueC: 'Transporte 3'
    // };

    // for (index in example_array) {
    //     select.options[select.options.length] = new Option(example_array[index], index);
    // }
}

function loadMetodosEnvio() {

    var select = document.getElementById("nombresMetodoEnvio");

    db.collection("metodosEnvio")
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                var option = document.createElement("option");
                var name = doc.data().name + " - " + doc.data().nameTransport;
                option.text = name;
                option.title = name;
                option.value = doc.id;
                select.add(option);
            });
        });
}

function loadPaises() {

    var select = document.getElementById("nombresPaises");

    var example_array = {
        Guatemala: 'Guatemala',
        EstadosUnidos: 'Estados Unidos',
        Mexico: 'Mexico'
    };

    for (index in example_array) {
        select.options[select.options.length] = new Option(example_array[index], index);
    }
}

function loadCiudades() {

    var select = document.getElementById("nombresCiudades");

    var example_array = {
        Quetzaltenango: 'Quetzaltenango',
        Quiche: 'Quiche',
        SanMarcos: 'San Marcos',
        Totonicapan: 'Totonicapan',
        Izabal: 'Izabal'
    };

    for (index in example_array) {
        select.options[select.options.length] = new Option(example_array[index], index);
    }
}

function reloadAll() {
    loadTransportes();
    loadMetodosEnvio();
}