const columAcciones = document.getElementById("columAcciones");
const columResponsable = document.getElementById("columResponsable");
const columFechaPro = document.getElementById("columFechaPro");
const columFechaTer = document.getElementById("columFechaTer");
const addRowButton = document.getElementById("addRowButton")
let contador = 1;
addRowButton.addEventListener('click', function(event){
    event.preventDefault();
    addRow(columAcciones,'text','accionesPA[]');
    addRow(columResponsable,'text','responsablePA[]');
    addRow(columFechaPro,'date','fechaProgramadaPA[]');
    addRow(columFechaTer,'date','fechaTerminacionPA[]');
    contador++;
});

function addRow(divId, type, name) {
    newInput = document.createElement('input')
    newInput.setAttribute('type', type);
    newInput.setAttribute('name', name);
    newInput.required = true
    divId.appendChild(newInput); 
}