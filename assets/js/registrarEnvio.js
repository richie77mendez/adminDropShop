const TEXT_NO = 'no';
const TEXT_YES = 'yes';
var zones = [];

loadTransportes();
loadMetodosEnvio();
loadZonasEnvio();
loadPaises();
// loadCiudades();


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
        .then(() => setDefaultValuesTransportistas())
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
    var metodoEnvio = document.getElementById('nombresTransporte').value;
    let metodoEnvioT = document.getElementById('nombresTransporte');
    let metodoEnvioText = metodoEnvioT.options[metodoEnvioT.selectedIndex].title;
    var pais = document.getElementById("nombresPaises");
    var valuePais = pais.options[pais.selectedIndex].value;
    var ciudad = document.getElementById("nombresCiudades");
    var valueCiudad = ciudad.options[ciudad.selectedIndex].value;
    var precioZona = document.getElementById("precioZona").value;
    var now = firebase.firestore.FieldValue.serverTimestamp();

    if (metodoEnvio && valuePais && valueCiudad) {
        db.collection("zonasEnvio").add({
                metod: metodoEnvio,
                nameMetod: metodoEnvioText,
                country: valuePais,
                city: valueCiudad,
                cost: precioZona,
                createdAt: now,
                updatedAt: now,
            })
            .then(function(docRef) {
                console.log("Metodo envio escrito con ID: ", docRef.id);
            })
            .then(() => reloadAll())
            .catch(function(error) {
                console.error("Error adding document: ", error);
            });
    } else {

    }


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
    let table = document.getElementById("bodyTransportistas");
    table.innerHTML = "";

    db.collection("transportistas")
        .orderBy("name")
        .get()
        .then(function(querySnapshot) {
            let docs = querySnapshot.data;

            querySnapshot.forEach(function(doc) {
                var option = document.createElement("option");
                // Elementos de tabla BodyTransportistas
                let row = table.insertRow();
                let nameT = row.insertCell(0);
                let descriptionT = row.insertCell(1);
                let stateT = row.insertCell(2);
                nameT.innerHTML = doc.data().name;
                descriptionT.innerHTML = doc.data().description;
                stateT.innerHTML = doc.data().state;
                // Elementos de select nombreTransporte
                option.text = doc.data().name;
                option.title = doc.data().name;
                option.value = doc.id;
                select.add(option);
            });
        });
}

function loadMetodosEnvio() {

    var transportes = document.getElementById("nombresTransporte");
    let table = document.getElementById("bodyMetodosEnvio");
    table.innerHTML = "";
    db.collection("metodosEnvio")
        .orderBy("nameTransport")
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                var optionTransporte = document.createElement("option");

                let row = table.insertRow();
                let nameME = row.insertCell(0);
                let transportME = row.insertCell(1);
                let descriptionME = row.insertCell(2);
                nameME.innerHTML = doc.data().name;
                transportME.innerHTML = doc.data().nameTransport;
                descriptionME.innerHTML = doc.data().description;

                var transporte = doc.data().nameTransport + ': ' + doc.data().name;

                optionTransporte.text = transporte;
                optionTransporte.title = transporte;
                optionTransporte.value = doc.id;

                transportes.add(optionTransporte);
            });
        });
}

function loadZonasEnvio() {

    var select = document.getElementById("nombresMetodoEnvio");
    let table = document.getElementById("bodyZonas");
    table.innerHTML = "";

    db.collection("zonasEnvio")
        .orderBy("nameMetod")
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {

                let row = table.insertRow();
                let nameME = row.insertCell(0);
                let country = row.insertCell(1);
                let city = row.insertCell(2);
                let cost = row.insertCell(3);
                nameME.innerHTML = doc.data().nameMetod;
                country.innerHTML = doc.data().country;
                city.innerHTML = doc.data().city;
                cost.innerHTML = doc.data().cost;
            });
        });
}

function loadPaises() {

    var select = document.getElementById("nombresPaises");
    let zones = [];


    db.collection("zones")
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                let option = document.createElement("option");
                // setInfoZones(doc.data());
                let country = doc.data().country;
                option.text = country;
                option.title = country;
                option.value = country;
                select.add(option);
            });
        });
    loadCiudades();
}

function loadCiudades() {

    var selected = document.getElementById("nombresPaises");
    let actualCountry = selected.value;
    var select = document.getElementById("nombresCiudades");
    console.log(actualCountry);
    select.innerHTML = '';

    db.collection("zones")
        .where("country", "==", actualCountry)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                let cities = doc.data().cities;
                if (cities) {
                    cities.forEach(city => {
                        let option = document.createElement("option");
                        option.text = city;
                        option.title = city;
                        select.add(option);
                        // console.log(city);
                    });
                }
            });
        });

}

function reloadAll() {
    loadTransportes();
    loadMetodosEnvio();
    loadZonasEnvio();
}