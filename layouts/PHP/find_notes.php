<?php
$archivos = glob('notas/*.php');

if (count($archivos) > 0) {
    echo "<section class='notas__container'>";
    echo <<<HTML
    <search>
        <label for="buscador">Buscar:</label>
        <input type="text" id="buscador" placeholder="Nombre de la nota..." />
    </search>
HTML;
    echo "    <h2 class='h2list'>Notas Existentes:</h2>";
    echo "    <div class='notas'>";
    
    $notasPresentes = false;

    foreach ($archivos as $archivo) {
        $nombreArchivo = basename($archivo, '.php');
        
        echo "  <a class='nota' href=\"$archivo\" oncontextmenu=\"showContextMenu(event, '$archivo'); return false;\">
                    <svg viewBox='0 0 16 16' xmlns='http://www.w3.org/2000/svg' fill='#FFFFFF'>
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
HTML;
}
?>
