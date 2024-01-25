<?php
$base_url = realpath(__DIR__);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombreArchivo = $_POST['nombre_archivo'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $autor = $_POST['autor'];

    if (isset($_FILES['imagen_subida']) && $_FILES['imagen_subida']['error'] === UPLOAD_ERR_OK) {

        $directorioCarga = $base_url . '/notas/images/';
        $nombreArchivoCargado = uniqid() . '_' . $_FILES['imagen_subida']['name'];

        if (move_uploaded_file($_FILES['imagen_subida']['tmp_name'], $directorioCarga . $nombreArchivoCargado)) {
            $imagenGenerada = $base_url . '/notas/images/' . $nombreArchivoCargado;
            
        } else {
            echo "Error al mover la imagen cargado.";
            echo "Información de la imagen subida: ";
            print_r($_FILES['imagen_subida']);
            exit;
        }
    } else {
        $imagenGenerada = '';
    }



    $rutaArchivo = $base_url . '/notas/' . $nombreArchivo . '.php';
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

        $contenidoArchivo = "<?php require('$base_url/layouts/PHP/head.php');
\$title = 'Inby ❤ - $nombreArchivo';
\$description = 'Proyecto de Inbydev para crear Notas!';
\$othercss = '<link rel=\"stylesheet\" href=\"{$base_url}/layouts/CSS/Notes.css\">';
head(\$title, \$description, \$othercss);
?>
    <?php require('$base_url/layouts/PHP/new-header-word-archive.php') ?>

    <section class='wordarchive detector'>
        <h1>$titulo</h1>
        <h3 class='h3__autor'>Autor: $autor</h3>
        <p id='markdownParagraph'>$contenido</p>
        <img src=\"$imagenGenerada\"> 
    </section>

    <?php require('$base_url/layouts/PHP/scripts.php') ?>
</body>
</html>";

            $rutaArchivo = $base_url . '/notas/' . $nombreArchivo . '.php';


            if (file_put_contents($rutaArchivo, $contenidoArchivo) !== false) {
                header("Location:$base_url . /notas/$nombreArchivo");
                exit();
            } else {
                echo "Error al crear la nota.";
            }
        }
    }
?>