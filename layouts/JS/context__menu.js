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

    contextMenu.style.transition = 'none';
    contextMenu.style.opacity = 0;
    contextMenu.style.transform = 'translateY(-10px)';
    contextMenu.style.display = 'flex';
    contextMenu.offsetHeight;

    var mouseX = event.clientX + window.scrollX;
    var mouseY = event.clientY + window.scrollY;

    contextMenu.style.left = mouseX + 10 + 'px';
    contextMenu.style.top = mouseY - 540 + 'px';

    setTimeout(function () {
        contextMenu.style.transition = 'opacity 0.2s ease-in-out, transform 0.2s ease-in-out';
        contextMenu.style.opacity = 1;
        contextMenu.style.transform = 'translateY(0)';
    }, 10);

    contextMenu.dataset.enlace = window.location.origin + '/InNotesBy/' + archivo;

    document.addEventListener('click', closeContextMenu);
}

function closeContextMenu(event) {
    var contextMenu = document.getElementById('contextMenu');

    contextMenu.style.transition = 'opacity 0.2s ease-in-out, transform 0.2s ease-in-out';
    contextMenu.style.opacity = 0;
    contextMenu.style.transform = 'translateY(-10px)';

    document.removeEventListener('click', closeContextMenu);

    setTimeout(function () {
        contextMenu.style.display = 'none';
    }, 200);
}

function copyLink() {
    var contextMenu = document.getElementById('contextMenu');
    var enlace = contextMenu.dataset.enlace;

    var tempInput = document.createElement('input');
    tempInput.value = enlace;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);

    closeContextMenu();
}