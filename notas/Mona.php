<?php
    require('../layouts/PHP/head.php');
    $title = 'InNotesBy ❤ - Mona';
    $description = '*los*
    **coreanos**
    ~~son~~
    ## muy
    ### lindos';
    $othercss = '<link rel="stylesheet" href="/InNotesBy/layouts/CSS/Notes.css">';
    $header__box__content__top = '<li class="header__items"><a class="header__link" href="/InNotesBy/"><svg class="header__icon__fill" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 10L3.29289 10.7071L2.58579 10L3.29289 9.29289L4 10ZM21 18C21 18.5523 20.5523 19 20 19C19.4477 19 19 18.5523 19 18L21 18ZM8.29289 15.7071L3.29289 10.7071L4.70711 9.29289L9.70711 14.2929L8.29289 15.7071ZM3.29289 9.29289L8.29289 4.29289L9.70711 5.70711L4.70711 10.7071L3.29289 9.29289ZM4 9L14 9L14 11L4 11L4 9ZM21 16L21 18L19 18L19 16L21 16ZM14 9C17.866 9 21 12.134 21 16L19 16C19 13.2386 16.7614 11 14 11L14 9Z" fill="#33363F"></path> </g></svg></a></li>';
    $header__box__content__bottom = '<li class="header__items"><button class="header__link" id="copy" onclick="copyLink()"><svg class="header__icon__fill" fill="#000000" viewBox="-4 -2.8 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>share</title> <path d="M0 25.472q0 2.368 1.664 4.032t4.032 1.664h18.944q2.336 0 4-1.664t1.664-4.032v-8.192l-3.776 3.168v5.024q0 0.8-0.544 1.344t-1.344 0.576h-18.944q-0.8 0-1.344-0.576t-0.544-1.344v-18.944q0-0.768 0.544-1.344t1.344-0.544h9.472v-3.776h-9.472q-2.368 0-4.032 1.664t-1.664 4v18.944zM5.696 19.808q0 2.752 1.088 5.28 0.512-2.944 2.24-5.344t4.288-3.872 5.632-1.664v5.6l11.36-9.472-11.36-9.472v5.664q-2.688 0-5.152 1.056t-4.224 2.848-2.848 4.224-1.024 5.152zM32 22.080v0 0 0z"></path> </g></svg></button></li>';
    head($title, $description, $header__box__content__top, $header__box__content__bottom, $othercss);
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
            