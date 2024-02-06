<?php
require('../layouts/PHP/head.php');
$title = 'InNotesBy ❤ - Testeo de Markdown';
$description = 'Proyecto de Inbydev para crear Notas!';
$othercss = '<link rel="stylesheet" href="/layouts/CSS/Notes.css">';
head($title, $description, $othercss);
?>
    <?php require('../layouts/PHP/header-notes.php') ?>

    <section class='wordarchive'>
        <h1>Testeo de Markdown</h1>
        <h2 class='autor'>Autor: Infisito</h2>
        <p class='markdown__container'>
## Esto será un testeo del Markdown

básicamente, de las diferentes tipos de formatos de texto


*itálica*


**negrita**


~~tachado~~


```bloque de código```


## H2

### H3

#### H4

##### H5

###### H6
</p>
        <img src="">
    </section>

    <?php require('../layouts/PHP/scripts.php') ?>
</body>
</html>