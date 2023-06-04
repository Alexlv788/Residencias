let changePassContainer = document.getElementById("contenedorCambioContra");

function cerrarPass(){
    changePassContainer.style.display = 'none';
}

function abrirPass() {
    changePassContainer.style.display = 'flex';
    console.log("abri");
}