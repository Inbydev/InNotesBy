<?php
require('../layouts/PHP/head.php');
$title = 'InNotesBy ❤ - em, rem y sus funcionalidades';
$description = 'Proyecto de Inbydev para crear Notas!';
$othercss = '<link rel="stylesheet" href="/InNotesBy/layouts/CSS/Notes.css">';
head($title, $description, $othercss);
?>
    <?php require('../layouts/PHP/header-notes.php') ?>

    <section class='wordarchive'>
        <h1>em, rem y sus funcionalidades</h1>
        <h2 class='autor'>Autor: Infisito</h2>
        <p class='markdown__container'>
**EM** y **REM** son dos unidades CSS relativas al **tamaño de letra** existente de cada elemento *[elemento padre o la etiqueta html, respectivamente]*, las diferencias de ambas son como funcionan y casos de uso.


### EM

La unidad **em** es relativa al **tamaño de letra del elemento padre**. Esto significa que el valor **1em** es igual a lo anterior. Generalmente se usa para tener unidades pero en diferentes tipos de elementos.


### REM

La unidad **rem** es relativa al **tamaño de letra de la etiqueta html**. Esto significa que el valor **1rem** siempre se basará en lo anterior. Normalmente se usa para tener una unidad en un solo elemento *(el HTML)* y todo calcularlo con ello.


Aquí daré un ejemplo para cada uno:

### EM

**HTML**

```&lt;header&gt;
    Texto de prueba.
&lt;/header&gt;```

**CSS**

```html {
    font-size: 16px; /* por defecto son 16 píxeles */
}

header {
    font-size: 20px;
    width: 2em;
}```


lo que pasara será que el ancho del header será **2 veces el tamaño de letra del header**, en este caso **20 píxeles**, teniendo un ancho de **40 píxeles**.

### REM

**HTML**
```&lt;header&gt;
    Texto de prueba.
&lt;/header&gt;```

**CSS**
```html {
    font-size: 16px; /* por defecto son 16 píxeles */
}

header {
    font-size: 20px;
    width: 2rem;
}```

lo que pasara será que el ancho del header será **2 veces el tamaño de letra del html**, en este caso **16 píxeles**, teniendo un ancho de **32 píxeles**.
</p>
        <img src="">
    </section>

    <?php require('../layouts/PHP/scripts.php') ?>
</body>
</html>