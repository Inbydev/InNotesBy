<?php
$archivos = glob('notas/*.php');

if (count($archivos) > 0) {
    echo "<section class='notas__container'>";
    echo <<<HTML
    <nav>
        <label for="buscador">Buscar:</label>
        <input type="text" id="buscador" placeholder="Nombre de la nota..." />
    </nav>
HTML;
    echo "    <h2 class='h2list'>Notas Existentes:</h2>";
    echo "    <div class='notas'>";
    
    $notasPresentes = false;

    foreach ($archivos as $archivo) {
        $nombreArchivo = basename($archivo, '.php');
        
        echo "  <a class='nota' href=\"$archivo\" oncontextmenu=\"showContextMenu(event, '$archivo'); return false;\">
                    <svg viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg' fill='#FFFFFF'>s
                    <g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'><path d='M6.345 5h2.1v6.533H6.993l.055-5.31-1.774 5.31H4.072l-1.805-5.31c.04.644.06 5.31.06 5.31H1V5h2.156s1.528 4.493 1.577 4.807L6.345 5zm6.71 3.617v-3.5H11.11v3.5H9.166l2.917 2.916L15 8.617h-1.945z'></path></g></svg>
                    <h4>$nombreArchivo</h4>
                </a>";
        
        $notasPresentes = true;
    }

    echo "    </div>";

    if (!$notasPresentes) {
        echo "  <div class='no-notas'>
                    <h4>No hay ninguna nota con ese nombre.</h4>
                </div>";
    }

    echo "</section>";

    echo <<<HTML
    <div id="contextMenu" class="context-menu">
        <ul>
            <li onclick="copyLink()">Compartir</li>
        </ul>
    </div>

    <script>
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
            var mouseX = event.clientX;
            var mouseY = event.clientY;

            contextMenu.style.left = mouseX + 10 + 'px';
            contextMenu.style.top = mouseY - 30 + 'px';

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
    </script>

    <style>
        @keyframes slideUp {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(-10px);
            }
        }
    </style>
HTML;
}
?>
