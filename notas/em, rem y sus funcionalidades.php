<?php
require('../layouts/PHP/head.php');
$title = 'Inby ❤ - em, rem y sus funcionalidades';
$description = 'Proyecto de Inbydev para crear Notas!';
$othercss = '<link rel="stylesheet" href="/layouts/CSS/Notes.css">
<link href="../layouts/CSS/prism.css" rel="stylesheet"/>';
head($title, $description, $othercss);
?>
    <?php require('../layouts/PHP/new-header-word-archive.php') ?>

    <section class='wordarchive detector'>
        <h1>em, rem y sus funcionalidades</h1>
        <h3 class='h3__autor'>Autor: Infisito</h3>
        <p class='markdownParagraph'>**EM** y **REM** son dos unidades CSS relativas al **font-size existente de cada elemento** [elemento padre o la etiqueta html, respectivamente], las diferencias de ambas son como funcionan y casos de uso.<br />
<br />
#EM#<br />
<br />
La unidad em es relativa al **tamaño de letra del elemento padre**. Esto significa que el valor 1em es igual al tamaño de letra del elemento padre. Generalmente se usa para tener unidades pero en diferentes tipos de elementos.<br />
<br />
<br />
#REM#<br />
<br />
La unidad rem es relativa al **tamaño de letra de la etiqueta html**. Esto significa que el valor 1rem siempre se basa en el tamaño de letra de la etiqueta html. Normalmente se usa para tener una unidad en un solo elemento (el HTML) y todo calcularlo con ello.<br />
<br />
<br />
Aquí daré un ejemplo para cada uno.<br />
<br />
si tienes un HTML:
<br />
</p>
<pre>
    <code class="language-html">
&lt;header>
    Texto de prueba.
&lt;/header>
    </code>
</pre>
<p class='markdownParagraph'>
<br />
y ocupas EM:
<br />
</p>
<pre>
    <code class="language-css">
html {
    font-size: 16px;
}

header {
    font-size: 20px;
    width: 2em;
}
    </code>
</pre>
<p class='markdownParagraph'>
<br />
lo que pasara será que el width del header será **2 veces el tamaño del font-size del header**, en este caso 20 píxeles, teniendo un width de 40 píxeles.<br />
<br />
si tienes el mismo HTML:
<br />
</p>
<pre>
    <code class="language-html">
&lt;header>
    Texto de prueba.
&lt;/header>
    </code>
</pre>
<p class='markdownParagraph'>
<br />
y ocuparas rem:
<br />
</p>
<pre>
    <code class="language-css">
html {
    font-size: 16px;
}

header {
    font-size: 20px;
    width: 2rem;
}
    </code>
</pre>
<p class='markdownParagraph'>
<br />
lo que pasara será que el width del header será **2 veces el tamaño del font-size del html**, en este caso 16 píxeles, teniendo un width de 32 píxeles.</p>
        <img src=""> 
    </section>

    <?php require('../layouts/PHP/scripts.php') ?>
</body>
</html>