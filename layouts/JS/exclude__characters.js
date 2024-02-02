function validarCaracteresEspeciales() {
    var nombreArchivo = document.getElementById('nombre_archivo').value;

    var exclude = /^[^\/\\\*\?"<>|]+$/;

    if (!exclude.test(nombreArchivo)) {
        alert("El nombre de la nota '" + nombreArchivo + "' contiene caracteres no permitidos. Por favor, elige otro nombre.");
        return false;
    }

    return true;
}