<?php
require('layouts/PHP/head.php');
$title = 'Inby ❤ - InNotesBy';
$description = 'Proyecto de Inbydev para crear Notas!';
$headerjs = '<script defer src="/layouts/JS/header__notes.js"></script>';
head($title, $description, $headerjs);
?>
	<?php require('layouts/PHP/header.php') ?>


	<section class="home" id="home">
        <h1>InNotesBy</h1>
        <h2>Crea tu <span>nota!</span></h2>
        <h3><a href="#guide">Guía de como usar este proyecto:</a></h3>
	</section>

	<section class="formsection detector" id="create">
        <button class="create__page__button" onclick="popup.showModal()">Crear Nota</button>
        
        <?php require('layouts/PHP/find_notes.php') ?>
	</section>

    
	<dialog id="popup">
        <form action="layouts/PHP/create_note.php" id="form__create__page" method="POST" enctype="multipart/form-data">
            <nav class="text__edit">
                <a class="text__edit__button" href="#0">Datos de la nota</a>
                <a class="text__edit__button" href="#1">Edición de contenido</a>
                <a class="text__edit__button" href="#2">Fondo</a>
                <input type="submit" class="text__edit__button__not" id="CreatePage" onclick="crearArchivo()" value="Crear nota">
                <button type="button" class="text__edit__button__not" onclick="popup.close()">Cerrar</button>
            </nav>

            <nav class="text__edit__container">
                <div class="text__edit__wrapper">
                    <span class="text__edit__content" id="0">
                        <div class="form__group__data__container">
                            <div class="form__group__data">
                                <input type="text" class="form__input" placeholder=" " name="nombre_archivo">
                                <label for="name" class="form__label">Nombre de la Nota:</label>
                                <nav class="form__line"></nav>
                                <p class="form__input__error">El nombre de la Nota no puede contener "<" o ">"</p>
                            </div>

                            <div class="form__group__data">
                                <input type="text" class="form__input" placeholder=" " name="titulo">
                                <label for="name" class="form__label">Título:</label>
                                <nav class="form__line"></nav>
                                <p class="form__input__error">El título de la Nota no puede contener "<" o ">"</p>
                            </div>

                            <div class="form__group__data">
                                <input type="text" class="form__input" placeholder=" " name="autor">
                                <label for="name" class="form__label">Autor:</label>
                                <nav class="form__line"></nav>
                                <p class="form__input__error">El nombre del autor no puede contener "<" o ">"</p>
                            </div>
                        </div>
                    </span>

                    <span class="text__edit__content" id="1">
                        <div class="form__group__markdown">
                            <button class="form__group__button__hover" type="button" id="btnItalic"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 22H15M9 2H21M9 22L11.4 14M15 2L12.6 10" stroke="#706C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
                            <button class="form__group__button__hover" type="button" id="btnBold"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5 12H12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2H7.6087C6.16795 2 5 3.16795 5 4.6087V12ZM5 12H14C16.7614 12 19 14.2386 19 17C19 19.7614 16.7614 22 14 22H7.05882C5.92177 22 5 21.1371 5 20M5 12V15.9706" stroke="#706C6C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg></button>
                            <button class="form__group__button__hover" type="button" id="btnStrikethrough"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 3H8C6.11438 3 5.17157 3 4.58579 3.58579C4 4.17157 4 5.11438 4 7V7.95M12 3H16C17.8856 3 18.8284 3 19.4142 3.58579C20 4.17157 20 5.11438 20 7V7.95M12 3V9M12 21V19.5M12 15V17" stroke="#706C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M7 21H17" stroke="#706C6C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 12H20" stroke="#706C6C" stroke-width="1.5" stroke-linecap="round"></path> </g></svg></button>
                            <button class="form__group__button__hover" type="button" id="btnBlockcode"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 8L5 11.6923L9 16M15 8L19 11.6923L15 16" stroke="#706C6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
                            <button class="form__group__button__hover" type="button" id="btnBigHeader"><svg fill="#706C6C" viewBox="-4.5 -7 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-header-2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M2 4h4V1a1 1 0 1 1 2 0v8a1 1 0 1 1-2 0V6H2v3a1 1 0 1 1-2 0V1a1 1 0 1 1 2 0v3zm12.88 4.352V10H10V8.986l.1-.246 1.785-1.913c.43-.435.793-.77.923-1.011.124-.23.182-.427.182-.587 0-.14-.04-.242-.127-.327a.469.469 0 0 0-.351-.127.443.443 0 0 0-.355.158c-.105.117-.165.288-.173.525l-.012.338h-1.824l.016-.366c.034-.735.272-1.33.718-1.77.446-.44 1.02-.66 1.703-.66.424 0 .805.091 1.14.275.336.186.606.455.806.8.198.343.3.7.3 1.063 0 .416-.23.849-.456 1.307-.222.45-.534.876-1.064 1.555l-.116.123-.254.229h1.938z"></path></g></svg></button>
                            <button class="form__group__button__hover" type="button" id="btnNormalHeader"><svg fill="#706C6C" viewBox="-4.5 -6.5 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-header-3"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M2 4h4V1a1 1 0 1 1 2 0v8a1 1 0 1 1-2 0V6H2v3a1 1 0 1 1-2 0V1a1 1 0 1 1 2 0v3zm12.453 2.513l.043.055c.254.334.38.728.38 1.172 0 .637-.239 1.187-.707 1.628-.466.439-1.06.658-1.763.658-.671 0-1.235-.209-1.671-.627-.436-.418-.673-.983-.713-1.676L10 7.353h1.803l.047.295c.038.238.112.397.215.49.1.091.23.137.402.137a.566.566 0 0 0 .422-.159.5.5 0 0 0 .158-.38c0-.163-.067-.295-.224-.419-.17-.134-.438-.21-.815-.215l-.345-.004v-1.17l.345-.004c.377-.004.646-.08.815-.215.157-.124.224-.255.224-.418a.5.5 0 0 0-.158-.381.566.566 0 0 0-.422-.159.568.568 0 0 0-.402.138c-.103.092-.177.251-.215.489l-.047.295H10l.022-.37c.04-.693.277-1.258.713-1.675.436-.419 1-.628 1.67-.628.704 0 1.298.22 1.764.658.468.441.708.991.708 1.629a1.892 1.892 0 0 1-.424 1.226z"></path></g></svg></button>
                            <button class="form__group__button__hover" type="button" id="btnSmallHeader"><svg fill="#706C6C" viewBox="-4.5 -7 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-header-4"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M2 4h4V1a1 1 0 1 1 2 0v8a1 1 0 1 1-2 0V6H2v3a1 1 0 1 1-2 0V1a1 1 0 1 1 2 0v3zm10.636 4.74H10V7.302l.06-.198 2.714-4.11h1.687v3.952h.538V8.74h-.538V10h-1.825V8.74zm.154-1.283V5.774l-1.1 1.683h1.1z"></path></g></svg></button>
                            <label for="imagen_subida" class="custom-file-upload form__group__button__hover">
                                <input type="file" id="imagen_subida" class="form__file" name="imagen_subida">
                                <svg fill="#706C6C" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M19,13a1,1,0,0,0-1,1v.38L16.52,12.9a2.79,2.79,0,0,0-3.93,0l-.7.7L9.41,11.12a2.85,2.85,0,0,0-3.93,0L4,12.6V7A1,1,0,0,1,5,6h7a1,1,0,0,0,0-2H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V14A1,1,0,0,0,19,13ZM5,20a1,1,0,0,1-1-1V15.43l2.9-2.9a.79.79,0,0,1,1.09,0l3.17,3.17,0,0L15.46,20Zm13-1a.89.89,0,0,1-.18.53L13.31,15l.7-.7a.77.77,0,0,1,1.1,0L18,17.21ZM22.71,4.29l-3-3a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21l-3,3a1,1,0,0,0,1.42,1.42L18,4.41V10a1,1,0,0,0,2,0V4.41l1.29,1.3a1,1,0,0,0,1.42,0A1,1,0,0,0,22.71,4.29Z"></path></g></svg>
                            </label>
                        </div>
                    </span>

                    <span class="text__edit__content" id="2">
                        <div class="form__group__background">
                            <button class="form__group__button__hover" id="cherry" type="button"><svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><g id="fill__1" fill="#706C6C"><path d="M36.1 2C35.7 3.9 34 5.4 32 5.4c-2 0-3.7-1.5-4.1-3.4c-3.1 1.7-5.3 5.6-5.3 12.3c0 9.3 9.4 20.5 9.4 20.5s9.4-11.2 9.4-20.5c0-6.7-2.2-10.6-5.3-12.3"> </path><path d="M62 24.3c-1.9.4-3.8-.5-4.7-2.4c-.9-1.9-.4-4.1 1.1-5.4c-2.8-2.2-7.1-2.5-12.9.4c-8 4.2-13.5 17.9-13.5 17.9s13.7 4 21.7-.1c5.8-2.9 8.2-6.7 8.3-10.4"> </path><path d="M2 24.3c1.9.4 3.8-.5 4.7-2.4c.9-1.9.4-4.1-1.1-5.4c2.8-2.2 7.1-2.5 12.9.4C26.5 21 32 34.7 32 34.7s-13.7 4-21.7-.1C4.5 31.8 2.1 28 2 24.3"> </path><path d="M46.5 61.9c-.7-1.9-.1-4 1.5-5.2c1.6-1.2 3.8-1 5.2.3c1.6-3.3 1.3-7.8-2.3-13.3C45.8 36.1 32 32.5 32 32.5S30.3 47.3 35.4 55c3.6 5.5 7.6 7.4 11.1 6.9"> </path><path d="M17.5 61.9c.7-1.9.1-4-1.5-5.2c-1.6-1.2-3.8-1-5.2.3c-1.6-3.3-1.3-7.8 2.3-13.3C18.2 36.1 32 32.5 32 32.5s1.7 14.8-3.4 22.5c-3.6 5.5-7.6 7.4-11.1 6.9"> </path></g><g id="fill__2" fill="#9d9d9d"> <path d="M35.6 5.7c-.4 1.7-1.9 3-3.6 3s-3.2-1.3-3.6-3c-2.7 1.5-4.6 4.9-4.6 10.8c0 8.2 8.3 18 8.3 18s8.3-9.8 8.3-18c-.1-5.9-2-9.3-4.8-10.8"></path> <path d="M58.3 25.3c-1.6.4-3.4-.4-4.1-2.1c-.8-1.7-.3-3.6 1-4.7c-2.5-1.9-6.3-2.2-11.3.3C36.8 22.4 32 34.4 32 34.4s12 3.5 19.1-.1c5-2.5 7.1-5.8 7.2-9"> </path> <path d="M5.7 25.3c1.6.4 3.4-.4 4.1-2.1c.8-1.7.3-3.6-1-4.7c2.5-1.9 6.3-2.2 11.3.3c7 3.6 11.9 15.6 11.9 15.6s-12 3.5-19.1-.1c-5-2.5-7.1-5.8-7.2-9"> </path> <path d="M44.7 58.3c-.6-1.6-.1-3.6 1.4-4.6s3.3-.9 4.6.3c1.4-2.9 1.1-6.8-2-11.6c-4.6-6.8-16.7-10-16.7-10s-1.5 13 3 19.7c3.2 4.9 6.6 6.6 9.7 6.2"> </path> <path d="M19.3 58.3c.6-1.6.1-3.6-1.4-4.6s-3.3-.9-4.6.3c-1.4-2.9-1.1-6.8 2-11.6c4.5-6.7 16.6-9.9 16.6-9.9s1.5 13-3 19.7c-3.1 4.8-6.5 6.5-9.6 6.1"> </path> </g> <g id="fill__1" fill="#706C6C"> <path d="M28.7 40.9l-1.2-.6l7.8-17.2l1.2.6z"> </path> <path d="M37.5 23.3c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6"> </path> <path d="M29.7 40.5c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.7.7 1.7 1.6"> </path> <path d="M23.9 36.4l-.5-1.3l16.7-7.5l.5 1.3z"> </path> <path d="M41.9 28.3c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.6.9 1.5 1.8"> </path> <path d="M25.3 35.9c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5s1.5.9 1.5 1.8"> </path> <path d="M39.9 36.7l-16.4-8.1l.6-1.3l16.4 8.1z"> </path> <path d="M40.3 37.7c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c.1.9-.6 1.7-1.5 1.7"> </path> <path d="M23.9 29.6c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c0 .9-.7 1.7-1.5 1.7"> </path> <path d="M35 41l-7.2-17.4L29 23l7.2 17.4z"> </path> <path d="M35.5 42.4c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.5.9 1.5 1.8c-.1.9-.8 1.6-1.7 1.5"> </path> <path d="M28.3 24.9c-.9-.1-1.5-.9-1.5-1.8s.8-1.6 1.7-1.5s1.5.9 1.5 1.8c-.1.9-.9 1.6-1.7 1.5"> </path> <ellipse cx="32" cy="32" rx="3.4" ry="3.5"> </ellipse> </g> </g></svg></button>
                            <button class="form__group__button__hover" id="leaf" type="button"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#706C6C"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17,8C8,10,5.9,16.17,3.82,21.34L5.71,22l1-2.3A4.49,4.49,0,0,0,8,20C19,20,22,3,22,3,21,5,14,5.25,9,6.25S2,11.5,2,13.5a6.22,6.22,0,0,0,1.75,3.75C7,8,17,8,17,8Z"></path> <rect width="24" height="24" fill="none"></rect> </g></svg></button>
                            <button class="form__group__button__hover" id="love" type="button"><svg fill="#706C6C" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M20.808,11.079C19.829,16.132,12,20.5,12,20.5s-7.829-4.368-8.808-9.421C2.227,6.1,5.066,3.5,8,3.5a4.444,4.444,0,0,1,4,2,4.444,4.444,0,0,1,4-2C18.934,3.5,21.773,6.1,20.808,11.079Z"></path></g></svg></button>
                        </div>
                    </span>
                </div>
            </nav>

            
            <div class="form__container">
            	<div class="form__group">
                    <textarea type="text" class="form__input form__textarea" placeholder=" " name="contenido" id="contenido"></textarea>
                	<label for="name" class="form__label">Contenido:</label>
                    <nav class="form__line"></nav>
                </div>
            </div>
		</form>
	</dialog>

    <section class="guide detector" id="guide">
        <h3>Paso 1: Crear una Nueva Nota</h3>
        <p>Presiona el botón <span>Crear Nota</span> para comenzar.</p>

        <h3 class="two">Paso 2: Ingresar Datos de la Nota</h3>
        <p>Ya dentro, verás un formulario con una barra de botones de navegación y más abajo verás un cuadrado donde irá el contenido de la nota,
            para ingresar información general sobre tu nota, haz clic en el botón <span>Datos de la Nota</span>.
            Aquí podrás ingresar el nombre de la nota. Este será el nombre que se verá tanto en la <span>URL</span> como en el <span>nombre de la misma nota</span>.
            A continuación, aquí podrás ingresar el <span>título de la nota</span>, siendo este el <span>encabezado principal</span> de la página de la nota.
            También, aquí podrás proporcionar el <span>nombre del autor</span> de la nota para identificar al creador.</p>

        <h3>Paso 3: Edición de contenido</h3>
        <p>Dirígete a la sección <span>Contenido</span> abajo de la barra de navegación para comenzar a redactar o pegar el contenido de tu nota.
            Para dar <span>formato</span> al texto, utiliza las herramientas encontradas en el botón <span>Edición de contenido</span>. Aquí puedes aplicar al texto seleccionado:</p>

        <ul>
            <li><i>Itálica</i></li>
            <li><b>Negrita</b></li>
            <li><strike>Tachado</strike></li>
            <li>Diferentes tamaños de título</li>
            <li><code>Bloques de código</code></li>
            <li>Agregar una imagen al contenido <span><i>(opcional, múltiples imágenes dentro del contenido próximamente).</i></span></li>
        </ul>

        <h3 class="two">Paso 4: Personalizar el Fondo de la Nota</h3>
        <p class="guide__background__text">En el apartado de <span>Fondo</span>,
        puedes elegir entre un fondo de <span>cerezos</span>, uno de <span>hojas</span> o uno de <span>corazones</span>,
        el color del fondo <span>varia</span> dependiendo de cada una.</p>

        <h3>Paso 5: Guardar o Cerrar la Nota</h3>

        <p>Una vez que hayas terminado de crear tu nota, puedes presionar el botón <span>Crear Nota</span> para almacenar la nota en la página web.
            Si deseas continuar trabajando en la nota más tarde, puedes cerrarla presionando el botón <span>Cerrar</span>. <span><i>(próximamente estará la función de guardar automáticamente, actualmente no está esa funcionalidad)</i></span></p>

        <h3 class="two">Recuerda!</h3>

        <p>Ni el <span>nombre de la nota</span>, <span>título</span>, <span>autor</span> o el <span>contenido</span> puede contener <span>"<"</span> o <span>">"</span>!</p>

        <h3 class="not">¡Ya sabiendo esto, estás preparado para crear tu nota en <span>InNotesBy</span>!</h3>
    </section>

	<footer>
		<p>
			<a href="https://github.com/Inbydev/Inby.dev">InNotesBy</a> © 2023 - 2024
			by
			<a href="https://github.com/Inbydev">Inbydev</a>
			is licensed under
			<a href="http://creativecommons.org/licenses/by-sa/4.0/?ref=chooser-v1" target="_blank" style="display:inline-block;">CC BY-SA 4.0
			</a>
		</p>
	</footer>

	<style>
		a {
			color: var(--tertiary-text);
		}
	</style>
    
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script src="layouts/JS/word.js"></script>
	<script src="layouts/JS/loader.js"></script>
</body>
</html>