<?php
require('../layouts/PHP/head.php');
$title = 'InNotesBy ❤ - Solo Prueba';
$description = 'Proyecto de Inbydev para crear Notas!';
$othercss = '<link rel="stylesheet" href="/layouts/CSS/Notes.css">';
head($title, $description, $othercss);
?>

    <?php require('../layouts/PHP/header-notes.php') ?>

    <section class='wordarchive'>
        <h1>Me parece que los títulos queda chicos</h1>
        <h2 class='autor'>By: Darío</h2>
        <p class='markdown__container'>**Está simpática la muestra de uso de markdown**<br />
</p>
        <img src=""> 
    </section>

    <?php require('../layouts/PHP/scripts.php') ?>
</body>
</html>
            