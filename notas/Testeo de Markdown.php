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
        <h2 class='autor'>By: Infisito</h2>
        <p class='markdownParagraph'>#Esto será un testeo del Markdown#<br />
básicamente, de las diferentes tipos de formatos de texto<br />
<br />
_itálica_<br />
<br />
**negrita**<br />
<br />
--tachado--<br />
<br />
```bloque de código```<br />
<br />
#titulo 2#<br />
##titulo 3##<br />
###titulo 4###<br />
PRONTO SE VIENE MUCHO MAAAAS</p>
        <img src="../../notas/images/64cc786790acf_Nerdy Boy 2_0.jpg">
    </section>

    <?php require('../layouts/PHP/scripts.php') ?>
</body>
</html>