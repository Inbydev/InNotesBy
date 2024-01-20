<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombreArchivo = $_POST['nombre_archivo'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $autor = $_POST['autor'];
    $background = "<?php require('../layouts/PHP/background_default.php') ?>";

    if (isset($_POST['cambiarFondo'])) {
        if ($opcion === 'leaf') {
            $background = 'ruta/a/la/imagen/leaf.jpg';
        } elseif ($opcion === 'love') {
            $background = 'ruta/a/la/imagen/love.jpg';
        }
    }

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



    $rutaArchivo = 'notas/' . $nombreArchivo . '.php';
    if (file_exists($rutaArchivo)) {
        echo '<script>
            alert("El nombre de la nota \'' . $nombreArchivo . '\' ya existe. Por favor, elige otro nombre.");
            window.location.href = "../../InTextBy.php";
        </script>';
        exit;
    }

    else {
        $contenido = htmlspecialchars($contenido);
        $contenido = nl2br($contenido);

        $contenidoArchivo = "<?php require('../layouts/PHP/head-1.php') ?>
    <title>Inby ❤ - $nombreArchivo </title>
<?php require('../layouts/PHP/head-2.php') ?>

<?php require('../layouts/PHP/crear_archivo_content.php') ?>

    $background
	<?php require('../layouts/PHP/new-header-word-archive.php') ?>

    <section class='wordarchive detector'>
        <h1>$titulo</h1>
        <h3 class='h3__autor'>Autor: $autor</h3>
        <p id='markdownParagraph'>$contenido</p>
        <img src=\"$imagenGenerada\"> 
    </section>

    <?php require('../layouts/PHP/scripts.php') ?>
</body>
</html>
            ";

            $rutaArchivo = '../../notas/' . $nombreArchivo . '.php';


            if (file_put_contents($rutaArchivo, $contenidoArchivo) !== false) {
                header("Location:../../notas/$nombreArchivo");
                exit();
            } else {
                echo "Error al crear la nota.";
            }
        }
    }
?>