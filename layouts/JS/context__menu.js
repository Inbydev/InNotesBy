document.addEventListener('DOMContentLoaded', function () {
    var notasContainer = document.querySelector('.notas');
    var inputBuscador = document.getElementById('buscador');
    var notas = document.querySelectorAll('.nota');
    var noNotasMensaje = document.createElement('h4');
    noNotasMensaje.className = 'no-notas';
    noNotasMensaje.textContent = 'No hay ninguna nota con ese nombre.';

    inputBuscador.addEventListener('input', function () {
        var busqueda = inputBuscador.value.toLowerCase();
        var notasPresentes = false;

        notas.forEach(function (nota) {
            var nombreNota = nota.querySelector('h4').textContent.toLowerCase();
            nota.style.display = nombreNota.includes(busqueda) ? 'flex' : 'none';

            if (nota.style.display === 'flex') {
                notasPresentes = true;
            }
        });

        if (!notasPresentes) {
            if (!document.querySelector('.no-notas')) {
                document.querySelector('.notas').appendChild(noNotasMensaje);
                notasContainer.style.gridTemplateColumns = "1fr";
                notasContainer.style.justifyItems = "center";
            }
        } else {
            if (document.querySelector('.no-notas')) {
                document.querySelector('.no-notas').remove();
                notasContainer.style.gridTemplateColumns = "repeat(auto-fill, 9rem)";
                notasContainer.style.justifyItems = "";
            }
        }
    });
});


function showContextMenu(event, archivo) {
    event.preventDefault();

    var contextMenu = document.getElementById('contextMenu');

    // Reiniciar la animación al mostrar el menú contextual
    contextMenu.style.transition = 'none';
    contextMenu.style.opacity = 0;
    contextMenu.style.transform = 'translateY(-10px)';
    contextMenu.style.display = 'flex';
    contextMenu.offsetHeight; // Triggers reflow

    // Calcular la posición del menú en relación con el ratón
    var mouseX = event.clientX + window.scrollX;
    var mouseY = event.clientY + window.scrollY;

    contextMenu.style.left = mouseX + 10 + 'px';
    contextMenu.style.top = mouseY - 540 + 'px';

    // Aplicar la animación después de un pequeño retraso
    setTimeout(function () {
        contextMenu.style.transition = 'opacity 0.2s ease-in-out, transform 0.2s ease-in-out';
        contextMenu.style.opacity = 1;
        contextMenu.style.transform = 'translateY(0)';
    }, 10);

    // Guardar el enlace para copiarlo posteriormente
    contextMenu.dataset.enlace = window.location.origin + '/' + archivo;

    // Agregar evento para cerrar el menú al hacer clic fuera de él
    document.addEventListener('click', closeContextMenu);
}

function closeContextMenu(event) {
    var contextMenu = document.getElementById('contextMenu');

    // Ocultar el menú contextual
    contextMenu.style.transition = 'opacity 0.2s ease-in-out, transform 0.2s ease-in-out';
    contextMenu.style.opacity = 0;
    contextMenu.style.transform = 'translateY(-10px)';

    // Eliminar el evento para cerrar el menú después de ejecutarse una vez
    document.removeEventListener('click', closeContextMenu);

    // Ocultar el menú después de la animación
    setTimeout(function () {
        contextMenu.style.display = 'none';
    }, 200);
}

function copyLink() {
    var contextMenu = document.getElementById('contextMenu');
    var enlace = contextMenu.dataset.enlace;

    // Copiar enlace al portapapeles
    var tempInput = document.createElement('input');
    tempInput.value = enlace;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);

    // Ocultar el menú contextual después de copiar
    closeContextMenu();
}