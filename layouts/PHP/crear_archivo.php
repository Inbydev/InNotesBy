<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombreArchivo = $_POST['nombre_archivo'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $autor = $_POST['autor'];

    if (isset($_FILES['imagen_subida']) && $_FILES['imagen_subida']['error'] === UPLOAD_ERR_OK) {

        $directorioCarga = '../../notas/images/';
        $nombreArchivoCargado = uniqid() . '_' . $_FILES['imagen_subida']['name'];

        if (move_uploaded_file($_FILES['imagen_subida']['tmp_name'], $directorioCarga . $nombreArchivoCargado)) {
            $imagenGenerada = '../../notas/images/' . $nombreArchivoCargado;
            
        } else {
            echo "Error al mover la imagen cargado.";
            echo "Información de la imagen subida: ";
            print_r($_FILES['imagen_subida']);
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
\$title = 'Inby ❤ - $nombreArchivo';
\$description = 'Proyecto de Inbydev para crear Notas!';
\$othercss = '<link rel=\"stylesheet\" href=\"/layouts/CSS/Notes.css\">';
head(\$title, \$description, \$othercss);
?>
    <?php require('../layouts/PHP/new-header-word-archive.php') ?>

    <section class='wordarchive detector'>
        <h1>$titulo</h1>
        <h3 class='h3__autor'>Autor: $autor</h3>
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