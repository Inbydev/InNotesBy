<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $directorioNotas = '../../notas/';
    
    $cantidadArchivos = count(glob($directorioNotas . '*.php'));
    
    if ($cantidadArchivos >= 200) {
        echo '<script>
            alert("Se alcanzó el límite máximo de 200 notas en InNotesBy. Contacte a Inbydev para resolver este problema.");
            window.location.href = "<?php echo $base_url; ?>index.php";
        </script>';
        exit;
    }
    
    $nombreArchivo = $_POST['nombre_archivo'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $autor = $_POST['autor'];

    if (isset($_FILES['imagen_subida']) && $_FILES['imagen_subida']['error'] === UPLOAD_ERR_OK) {
        $nombreArchivoOriginal = $_FILES['imagen_subida']['name'];
        $tipoArchivo = $_FILES['imagen_subida']['type'];
        $tamanioArchivo = $_FILES['imagen_subida']['size'];
    
        $extensionesPermitidas = array('png', 'jpg', 'jpeg');
        $extensionArchivo = pathinfo($nombreArchivoOriginal, PATHINFO_EXTENSION);
    
        if (!in_array(strtolower($extensionArchivo), $extensionesPermitidas)) {
            echo "Error: Solo se permiten archivos PNG, JPG o JPEG.";
            exit;
        }
    
        $directorioCarga = '../../notas/images/';
    
        $nombreArchivoCargadoWebP = uniqid() . '_' . pathinfo($nombreArchivoOriginal, PATHINFO_FILENAME) . '.webp';
        $rutaArchivoWebP = $directorioCarga . $nombreArchivoCargadoWebP;
    
        $imagenGenerada = '';
    
        if (move_uploaded_file($_FILES['imagen_subida']['tmp_name'], $directorioCarga . $nombreArchivoOriginal)) {
            list($ancho, $alto) = getimagesize($directorioCarga . $nombreArchivoOriginal);
    
            if ($ancho > 1920 || $alto > 1080) {
                $factorReduccion = min(1920 / $ancho, 1080 / $alto);
                $nuevoAncho = $ancho * $factorReduccion;
                $nuevoAlto = $alto * $factorReduccion;
    
                $imagenRedimensionada = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                $imagenOriginal = imagecreatefromstring(file_get_contents($directorioCarga . $nombreArchivoOriginal));
    
                imagecopyresampled($imagenRedimensionada, $imagenOriginal, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
    
                imagedestroy($imagenOriginal);
    
                // Guardar la imagen redimensionada en formato WebP
                imagewebp($imagenRedimensionada, $rutaArchivoWebP, 80);
                imagedestroy($imagenRedimensionada);
            } else {
                // Si la imagen no necesita redimensionarse, simplemente guardarla en formato WebP
                $imagen = imagecreatefromstring(file_get_contents($directorioCarga . $nombreArchivoOriginal));
                imagewebp($imagen, $rutaArchivoWebP, 80);
                imagedestroy($imagen);
            }
    
            $imagenGenerada = $rutaArchivoWebP;
            unlink($directorioCarga . $nombreArchivoOriginal);
        } else {
            echo "Error al mover la imagen cargada.";
            exit;
        }
    } else {
        $imagenGenerada = '';
    }


    $rutaArchivo = '../../notas/' . $nombreArchivo . '.php';
    if (file_exists($rutaArchivo)) {
        echo '<script>
            alert("El nombre de la nota \'' . $nombreArchivo . '\' ya existe. Por favor, elige otro nombre.");
            window.location.href = "<?php echo $base_url; ?>index.php";
        </script>';
        exit;
    }

    else {
        $contenido = htmlspecialchars($contenido);
        $contenido = nl2br($contenido);

        $contenidoArchivo = "<?php
require('../layouts/PHP/head.php');
\$title = 'InNotesBy ❤ - $nombreArchivo';
\$description = 'Proyecto de Inbydev para crear Notas!';
\$othercss = '<link rel=\"stylesheet\" href=\"/layouts/CSS/Notes.css\">';
head(\$title, \$description, \$othercss);
?>
    <?php require('../layouts/PHP/header-notes.php') ?>

    <section class='wordarchive'>
        <h1>$titulo</h1>
        <h2 class='autor'>Autor: $autor</h2>
        <p class='markdownParagraph'>$contenido</p>
        <img src=\"$imagenGenerada\">
    </section>

    <?php require('../layouts/PHP/scripts.php') ?>
</body>
</html>";

            $rutaArchivo = '../../notas/' . $nombreArchivo . '.php';


            if (file_put_contents($rutaArchivo, $contenidoArchivo) !== false) {
                header("Location: $rutaArchivo");
                exit();
            } else {
                echo "Error al crear la nota.";
            }
        }
    }
?>