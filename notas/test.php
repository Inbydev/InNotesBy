<?php
require('../layouts/PHP/head.php');
$title = 'Inby ❤ - test';
$description = 'Proyecto de Inbydev para crear Notas!';
$othercss = '<link rel="stylesheet" href="/layouts/CSS/Notes.css">';
head($title, $description, $othercss);
?>
    <?php require('../layouts/PHP/new-header-word-archive.php') ?>

    <section class='wordarchive detector'>
        <h1>test</h1>
        <h3 class='h3__autor'>Autor: test</h3>
        <p id='markdownParagraph'>test</p>
        <img src=""> 
    </section>

    <?php require('../layouts/PHP/scripts.php') ?>
</body>
</html>