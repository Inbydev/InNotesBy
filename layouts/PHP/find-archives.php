<?php
$archivos = glob('notas/*.php');
    
if (count($archivos) > 0) {
    echo "<article class='archivocontainer'>";
    echo "    <h2 class='h2list'>Páginas Existentes:</h2>";
    echo "    <div class='cardss'>";
    
    $contador = 1;
    
    foreach ($archivos as $archivo) {
        $nombreArchivo = basename($archivo, '.php');
        
        echo "  <a href=\"$archivo\" class='cardn'>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class='card_content'>
                        <h2>$contador</h2>
                        <h3>$nombreArchivo</h3>
                    </div>
                </a>";
        
        $contador++;
    }
    
    echo "    </div>";
    echo "</article>";
}
?>
