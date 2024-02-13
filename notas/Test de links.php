<?php
require('../layouts/PHP/head.php');
$title = 'InNotesBy ❤ - Test de links';
$description = 'Proyecto de Inbydev para crear Notas!';
$othercss = '<link rel="stylesheet" href="/layouts/CSS/Notes.css">';
head($title, $description, $othercss);
?>
    <?php require('../layouts/PHP/header-notes.php') ?>

    <section class='wordarchive'>
        <h1>Test de links</h1>
        <h2 class='autor'>Autor: Infisito</h2>
        <p class='markdown__container'>
**Test de como se comportan los links**
[Videito](https://www.youtube.com/watch?v=N8Xg8gvjgcw)

</p>
        <img src="">
    </section>

    <?php require('../layouts/PHP/scripts.php') ?>
</body>
</html>