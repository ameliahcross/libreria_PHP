// Validacion de formulario de contacto

// JavaScript puro


// Validación de datos insertados en formulario de contacto
function validarFormulario() {
    const email = document.getElementById("email");
    const nombre = document.getElementById("nombre");
    const asunto = document.getElementById("asunto");
    const mensaje = document.getElementById("mensaje");

    if ((nombre.value.length === 0 || asunto.value.length === 0 || mensaje.value.length=== 0 || email.value.length=== 0)) {

        var modalvalidacion = new bootstrap.Modal(document.getElementById('modalValidacion'));
        modalvalidacion.show();

        var obligatorios = document.getElementById("obligatorio");
        obligatorios.classList.remove("oculto");
        return false;
    }
}

// Funciones a ejecutar luego de enviar la sentencia SQL
function alertarEnvioExitoso() {
    document.getElementById("alerta-exito").classList.remove("oculto");
}

function alertarEnvioFallido() {
    document.getElementById("alerta-fallo").classList.remove("oculto");
}

// Para evitar reenvio del formulario si se le da a refrescar navegador luego de enviar el formulario
// y que además se muestre la URL del formulario en lugar de la URL de proceso.php
if (window.history.replaceState) {
    window.history.replaceState(null, null, 'contacto.php');
}
