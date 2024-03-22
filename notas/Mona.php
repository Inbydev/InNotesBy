<?php
require('../layouts/PHP/head.php');
$title = 'InNotesBy ❤ - Mona';
$description = 'Proyecto de Inbydev para crear Notas!';
$othercss = '<link rel="stylesheet" href="/InNotesBy/layouts/CSS/Notes.css">';
head($title, $description, $othercss);
?>

    <?php require('../layouts/PHP/header-notes.php') ?>

    <section class='wordarchive'>
        <h1>corea</h1>
        <h2 class='autor'>By: Mona</h2>
        <p class='markdown__container'>
*los*
**coreanos**
~~son~~
## muy
### lindos
</p>
        <img src="images/64d2ff295c8bc_DRUY7SWCC5GMTDX32MFC3APNX4.jpg"> 
    </section>

    <?php require('../layouts/PHP/scripts.php') ?>
</body>
</html>
            