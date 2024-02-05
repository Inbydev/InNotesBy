<?php
require('layouts/PHP/head.php');
$title = 'InNotesBy ❤';
$description = 'Proyecto de Inbydev para crear Notas!';
$headerjs = '<script defer src="/layouts/JS/header__notes.js"></script>';
$otherjs = '<script defer src="/layouts/JS/app.js"></script>
<script src="/layouts/JS/exclude__characters.js"></script>';
$othercss = '<link rel="stylesheet" href="/layouts/CSS/InNotesBy.css">';
head($title, $description, $headerjs, $otherjs, $othercss);
?>
	<?php require('layouts/PHP/header.php') ?>

	<section class="home" id="home">
        <h1>InNotesBy</h1>
        <h2>Crea tu <span>nota!</span></h2>
        <h3><a href="#guide">Guía de como usar este proyecto:</a></h3>
	</section>

	<section class="notes__section detector" id="create">
        <button class="open__dialog__button" onclick="popup.showModal(); bodyHidden()">Crear Nota</button>
        
        <?php require('layouts/PHP/find_notes.php') ?>
	</section>

    
	<dialog id="popup">
        <div class="background">	
            <div class="background__25"><svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="svg__home iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="var(--background-header)"> <path d="M36.1 2C35.7 3.9 34 5.4 32 5.4c-2 0-3.7-1.5-4.1-3.4c-3.1 1.7-5.3 5.6-5.3 12.3c0 9.3 9.4 20.5 9.4 20.5s9.4-11.2 9.4-20.5c0-6.7-2.2-10.6-5.3-12.3"> </path> <path d="M62 24.3c-1.9.4-3.8-.5-4.7-2.4c-.9-1.9-.4-4.1 1.1-5.4c-2.8-2.2-7.1-2.5-12.9.4c-8 4.2-13.5 17.9-13.5 17.9s13.7 4 21.7-.1c5.8-2.9 8.2-6.7 8.3-10.4"> </path> <path d="M2 24.3c1.9.4 3.8-.5 4.7-2.4c.9-1.9.4-4.1-1.1-5.4c2.8-2.2 7.1-2.5 12.9.4C26.5 21 32 34.7 32 34.7s-13.7 4-21.7-.1C4.5 31.8 2.1 28 2 24.3"> </path> <path d="M46.5 61.9c-.7-1.9-.1-4 1.5-5.2c1.6-1.2 3.8-1 5.2.3c1.6-3.3 1.3-7.8-2.3-13.3C45.8 36.1 32 32.5 32 32.5S30.3 47.3 35.4 55c3.6 5.5 7.6 7.4 11.1 6.9"> </path> <path d="M17.5 61.9c.7-1.9.1-4-1.5-5.2c-1.6-1.2-3.8-1-5.2.3c-1.6-3.3-1.3-7.8 2.3-13.3C18.2 36.1 32 32.5 32 32.5s1.7 14.8-3.4 22.5c-3.6 5.5-7.6 7.4-11.1 6.9"> </path> </g> <g fill="var(--background-3)"> <path d="M35.6 5.7c-.4 1.7-1.9 3-3.6 3s-3.2-1.3-3.6-3c-2.7 1.5-4.6 4.9-4.6 10.8c0 8.2 8.3 18 8.3 18s8.3-9.8 8.3-18c-.1-5.9-2-9.3-4.8-10.8"> </path> <path d="M58.3 25.3c-1.6.4-3.4-.4-4.1-2.1c-.8-1.7-.3-3.6 1-4.7c-2.5-1.9-6.3-2.2-11.3.3C36.8 22.4 32 34.4 32 34.4s12 3.5 19.1-.1c5-2.5 7.1-5.8 7.2-9"> </path> <path d="M5.7 25.3c1.6.4 3.4-.4 4.1-2.1c.8-1.7.3-3.6-1-4.7c2.5-1.9 6.3-2.2 11.3.3c7 3.6 11.9 15.6 11.9 15.6s-12 3.5-19.1-.1c-5-2.5-7.1-5.8-7.2-9"> </path> <path d="M44.7 58.3c-.6-1.6-.1-3.6 1.4-4.6s3.3-.9 4.6.3c1.4-2.9 1.1-6.8-2-11.6c-4.6-6.8-16.7-10-16.7-10s-1.5 13 3 19.7c3.2 4.9 6.6 6.6 9.7 6.2"> </path> <path d="M19.3 58.3c.6-1.6.1-3.6-1.4-4.6s-3.3-.9-4.6.3c-1.4-2.9-1.1-6.8 2-11.6c4.5-6.7 16.6-9.9 16.6-9.9s1.5 13-3 19.7c-3.1 4.8-6.5 6.5-9.6 6.1"> </path> </g> <g fill="var(--background-header)"> <path d="M28.7 40.9l-1.2-.6l7.8-17.2l1.2.6z"> </path> <path d="M37.5 23.3c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6"> </path> <path d="M29.7 40.5c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.7.7 1.7 1.6"> </path> <path d="M23.9 36.4l-.5-1.3l16.7-7.5l.5 1.3z"> </path> <path d="M41.9 28.3c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.6.9 1.5 1.8"> </path> <path d="M25.3 35.9c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5s1.5.9 1.5 1.8"> </path> <path d="M39.9 36.7l-16.4-8.1l.6-1.3l16.4 8.1z"> </path> <path d="M40.3 37.7c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c.1.9-.6 1.7-1.5 1.7"> </path> <path d="M23.9 29.6c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c0 .9-.7 1.7-1.5 1.7"> </path> <path d="M35 41l-7.2-17.4L29 23l7.2 17.4z"> </path> <path d="M35.5 42.4c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.5.9 1.5 1.8c-.1.9-.8 1.6-1.7 1.5"> </path> <path d="M28.3 24.9c-.9-.1-1.5-.9-1.5-1.8s.8-1.6 1.7-1.5s1.5.9 1.5 1.8c-.1.9-.9 1.6-1.7 1.5"> </path> <ellipse cx="32" cy="32" rx="3.4" ry="3.5"> </ellipse> </g> </g></svg></div>
            <div class="background__25"><svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="svg__home iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="var(--background-header)"> <path d="M36.1 2C35.7 3.9 34 5.4 32 5.4c-2 0-3.7-1.5-4.1-3.4c-3.1 1.7-5.3 5.6-5.3 12.3c0 9.3 9.4 20.5 9.4 20.5s9.4-11.2 9.4-20.5c0-6.7-2.2-10.6-5.3-12.3"> </path> <path d="M62 24.3c-1.9.4-3.8-.5-4.7-2.4c-.9-1.9-.4-4.1 1.1-5.4c-2.8-2.2-7.1-2.5-12.9.4c-8 4.2-13.5 17.9-13.5 17.9s13.7 4 21.7-.1c5.8-2.9 8.2-6.7 8.3-10.4"> </path> <path d="M2 24.3c1.9.4 3.8-.5 4.7-2.4c.9-1.9.4-4.1-1.1-5.4c2.8-2.2 7.1-2.5 12.9.4C26.5 21 32 34.7 32 34.7s-13.7 4-21.7-.1C4.5 31.8 2.1 28 2 24.3"> </path> <path d="M46.5 61.9c-.7-1.9-.1-4 1.5-5.2c1.6-1.2 3.8-1 5.2.3c1.6-3.3 1.3-7.8-2.3-13.3C45.8 36.1 32 32.5 32 32.5S30.3 47.3 35.4 55c3.6 5.5 7.6 7.4 11.1 6.9"> </path> <path d="M17.5 61.9c.7-1.9.1-4-1.5-5.2c-1.6-1.2-3.8-1-5.2.3c-1.6-3.3-1.3-7.8 2.3-13.3C18.2 36.1 32 32.5 32 32.5s1.7 14.8-3.4 22.5c-3.6 5.5-7.6 7.4-11.1 6.9"> </path> </g> <g fill="var(--background-3)"> <path d="M35.6 5.7c-.4 1.7-1.9 3-3.6 3s-3.2-1.3-3.6-3c-2.7 1.5-4.6 4.9-4.6 10.8c0 8.2 8.3 18 8.3 18s8.3-9.8 8.3-18c-.1-5.9-2-9.3-4.8-10.8"> </path> <path d="M58.3 25.3c-1.6.4-3.4-.4-4.1-2.1c-.8-1.7-.3-3.6 1-4.7c-2.5-1.9-6.3-2.2-11.3.3C36.8 22.4 32 34.4 32 34.4s12 3.5 19.1-.1c5-2.5 7.1-5.8 7.2-9"> </path> <path d="M5.7 25.3c1.6.4 3.4-.4 4.1-2.1c.8-1.7.3-3.6-1-4.7c2.5-1.9 6.3-2.2 11.3.3c7 3.6 11.9 15.6 11.9 15.6s-12 3.5-19.1-.1c-5-2.5-7.1-5.8-7.2-9"> </path> <path d="M44.7 58.3c-.6-1.6-.1-3.6 1.4-4.6s3.3-.9 4.6.3c1.4-2.9 1.1-6.8-2-11.6c-4.6-6.8-16.7-10-16.7-10s-1.5 13 3 19.7c3.2 4.9 6.6 6.6 9.7 6.2"> </path> <path d="M19.3 58.3c.6-1.6.1-3.6-1.4-4.6s-3.3-.9-4.6.3c-1.4-2.9-1.1-6.8 2-11.6c4.5-6.7 16.6-9.9 16.6-9.9s1.5 13-3 19.7c-3.1 4.8-6.5 6.5-9.6 6.1"> </path> </g> <g fill="var(--background-header)"> <path d="M28.7 40.9l-1.2-.6l7.8-17.2l1.2.6z"> </path> <path d="M37.5 23.3c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6"> </path> <path d="M29.7 40.5c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.7.7 1.7 1.6"> </path> <path d="M23.9 36.4l-.5-1.3l16.7-7.5l.5 1.3z"> </path> <path d="M41.9 28.3c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.6.9 1.5 1.8"> </path> <path d="M25.3 35.9c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5s1.5.9 1.5 1.8"> </path> <path d="M39.9 36.7l-16.4-8.1l.6-1.3l16.4 8.1z"> </path> <path d="M40.3 37.7c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c.1.9-.6 1.7-1.5 1.7"> </path> <path d="M23.9 29.6c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c0 .9-.7 1.7-1.5 1.7"> </path> <path d="M35 41l-7.2-17.4L29 23l7.2 17.4z"> </path> <path d="M35.5 42.4c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.5.9 1.5 1.8c-.1.9-.8 1.6-1.7 1.5"> </path> <path d="M28.3 24.9c-.9-.1-1.5-.9-1.5-1.8s.8-1.6 1.7-1.5s1.5.9 1.5 1.8c-.1.9-.9 1.6-1.7 1.5"> </path> <ellipse cx="32" cy="32" rx="3.4" ry="3.5"> </ellipse> </g> </g></svg></div>
            <div class="background__25"><svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="svg__home iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="var(--background-header)"> <path d="M36.1 2C35.7 3.9 34 5.4 32 5.4c-2 0-3.7-1.5-4.1-3.4c-3.1 1.7-5.3 5.6-5.3 12.3c0 9.3 9.4 20.5 9.4 20.5s9.4-11.2 9.4-20.5c0-6.7-2.2-10.6-5.3-12.3"> </path> <path d="M62 24.3c-1.9.4-3.8-.5-4.7-2.4c-.9-1.9-.4-4.1 1.1-5.4c-2.8-2.2-7.1-2.5-12.9.4c-8 4.2-13.5 17.9-13.5 17.9s13.7 4 21.7-.1c5.8-2.9 8.2-6.7 8.3-10.4"> </path> <path d="M2 24.3c1.9.4 3.8-.5 4.7-2.4c.9-1.9.4-4.1-1.1-5.4c2.8-2.2 7.1-2.5 12.9.4C26.5 21 32 34.7 32 34.7s-13.7 4-21.7-.1C4.5 31.8 2.1 28 2 24.3"> </path> <path d="M46.5 61.9c-.7-1.9-.1-4 1.5-5.2c1.6-1.2 3.8-1 5.2.3c1.6-3.3 1.3-7.8-2.3-13.3C45.8 36.1 32 32.5 32 32.5S30.3 47.3 35.4 55c3.6 5.5 7.6 7.4 11.1 6.9"> </path> <path d="M17.5 61.9c.7-1.9.1-4-1.5-5.2c-1.6-1.2-3.8-1-5.2.3c-1.6-3.3-1.3-7.8 2.3-13.3C18.2 36.1 32 32.5 32 32.5s1.7 14.8-3.4 22.5c-3.6 5.5-7.6 7.4-11.1 6.9"> </path> </g> <g fill="var(--background-3)"> <path d="M35.6 5.7c-.4 1.7-1.9 3-3.6 3s-3.2-1.3-3.6-3c-2.7 1.5-4.6 4.9-4.6 10.8c0 8.2 8.3 18 8.3 18s8.3-9.8 8.3-18c-.1-5.9-2-9.3-4.8-10.8"> </path> <path d="M58.3 25.3c-1.6.4-3.4-.4-4.1-2.1c-.8-1.7-.3-3.6 1-4.7c-2.5-1.9-6.3-2.2-11.3.3C36.8 22.4 32 34.4 32 34.4s12 3.5 19.1-.1c5-2.5 7.1-5.8 7.2-9"> </path> <path d="M5.7 25.3c1.6.4 3.4-.4 4.1-2.1c.8-1.7.3-3.6-1-4.7c2.5-1.9 6.3-2.2 11.3.3c7 3.6 11.9 15.6 11.9 15.6s-12 3.5-19.1-.1c-5-2.5-7.1-5.8-7.2-9"> </path> <path d="M44.7 58.3c-.6-1.6-.1-3.6 1.4-4.6s3.3-.9 4.6.3c1.4-2.9 1.1-6.8-2-11.6c-4.6-6.8-16.7-10-16.7-10s-1.5 13 3 19.7c3.2 4.9 6.6 6.6 9.7 6.2"> </path> <path d="M19.3 58.3c.6-1.6.1-3.6-1.4-4.6s-3.3-.9-4.6.3c-1.4-2.9-1.1-6.8 2-11.6c4.5-6.7 16.6-9.9 16.6-9.9s1.5 13-3 19.7c-3.1 4.8-6.5 6.5-9.6 6.1"> </path> </g> <g fill="var(--background-header)"> <path d="M28.7 40.9l-1.2-.6l7.8-17.2l1.2.6z"> </path> <path d="M37.5 23.3c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6"> </path> <path d="M29.7 40.5c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.7.7 1.7 1.6"> </path> <path d="M23.9 36.4l-.5-1.3l16.7-7.5l.5 1.3z"> </path> <path d="M41.9 28.3c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.6.9 1.5 1.8"> </path> <path d="M25.3 35.9c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5s1.5.9 1.5 1.8"> </path> <path d="M39.9 36.7l-16.4-8.1l.6-1.3l16.4 8.1z"> </path> <path d="M40.3 37.7c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c.1.9-.6 1.7-1.5 1.7"> </path> <path d="M23.9 29.6c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c0 .9-.7 1.7-1.5 1.7"> </path> <path d="M35 41l-7.2-17.4L29 23l7.2 17.4z"> </path> <path d="M35.5 42.4c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.5.9 1.5 1.8c-.1.9-.8 1.6-1.7 1.5"> </path> <path d="M28.3 24.9c-.9-.1-1.5-.9-1.5-1.8s.8-1.6 1.7-1.5s1.5.9 1.5 1.8c-.1.9-.9 1.6-1.7 1.5"> </path> <ellipse cx="32" cy="32" rx="3.4" ry="3.5"> </ellipse> </g> </g></svg></div>
            <div class="background__25"><svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="svg__home iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="var(--background-header)"> <path d="M36.1 2C35.7 3.9 34 5.4 32 5.4c-2 0-3.7-1.5-4.1-3.4c-3.1 1.7-5.3 5.6-5.3 12.3c0 9.3 9.4 20.5 9.4 20.5s9.4-11.2 9.4-20.5c0-6.7-2.2-10.6-5.3-12.3"> </path> <path d="M62 24.3c-1.9.4-3.8-.5-4.7-2.4c-.9-1.9-.4-4.1 1.1-5.4c-2.8-2.2-7.1-2.5-12.9.4c-8 4.2-13.5 17.9-13.5 17.9s13.7 4 21.7-.1c5.8-2.9 8.2-6.7 8.3-10.4"> </path> <path d="M2 24.3c1.9.4 3.8-.5 4.7-2.4c.9-1.9.4-4.1-1.1-5.4c2.8-2.2 7.1-2.5 12.9.4C26.5 21 32 34.7 32 34.7s-13.7 4-21.7-.1C4.5 31.8 2.1 28 2 24.3"> </path> <path d="M46.5 61.9c-.7-1.9-.1-4 1.5-5.2c1.6-1.2 3.8-1 5.2.3c1.6-3.3 1.3-7.8-2.3-13.3C45.8 36.1 32 32.5 32 32.5S30.3 47.3 35.4 55c3.6 5.5 7.6 7.4 11.1 6.9"> </path> <path d="M17.5 61.9c.7-1.9.1-4-1.5-5.2c-1.6-1.2-3.8-1-5.2.3c-1.6-3.3-1.3-7.8 2.3-13.3C18.2 36.1 32 32.5 32 32.5s1.7 14.8-3.4 22.5c-3.6 5.5-7.6 7.4-11.1 6.9"> </path> </g> <g fill="var(--background-3)"> <path d="M35.6 5.7c-.4 1.7-1.9 3-3.6 3s-3.2-1.3-3.6-3c-2.7 1.5-4.6 4.9-4.6 10.8c0 8.2 8.3 18 8.3 18s8.3-9.8 8.3-18c-.1-5.9-2-9.3-4.8-10.8"> </path> <path d="M58.3 25.3c-1.6.4-3.4-.4-4.1-2.1c-.8-1.7-.3-3.6 1-4.7c-2.5-1.9-6.3-2.2-11.3.3C36.8 22.4 32 34.4 32 34.4s12 3.5 19.1-.1c5-2.5 7.1-5.8 7.2-9"> </path> <path d="M5.7 25.3c1.6.4 3.4-.4 4.1-2.1c.8-1.7.3-3.6-1-4.7c2.5-1.9 6.3-2.2 11.3.3c7 3.6 11.9 15.6 11.9 15.6s-12 3.5-19.1-.1c-5-2.5-7.1-5.8-7.2-9"> </path> <path d="M44.7 58.3c-.6-1.6-.1-3.6 1.4-4.6s3.3-.9 4.6.3c1.4-2.9 1.1-6.8-2-11.6c-4.6-6.8-16.7-10-16.7-10s-1.5 13 3 19.7c3.2 4.9 6.6 6.6 9.7 6.2"> </path> <path d="M19.3 58.3c.6-1.6.1-3.6-1.4-4.6s-3.3-.9-4.6.3c-1.4-2.9-1.1-6.8 2-11.6c4.5-6.7 16.6-9.9 16.6-9.9s1.5 13-3 19.7c-3.1 4.8-6.5 6.5-9.6 6.1"> </path> </g> <g fill="var(--background-header)"> <path d="M28.7 40.9l-1.2-.6l7.8-17.2l1.2.6z"> </path> <path d="M37.5 23.3c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6"> </path> <path d="M29.7 40.5c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.7.7 1.7 1.6"> </path> <path d="M23.9 36.4l-.5-1.3l16.7-7.5l.5 1.3z"> </path> <path d="M41.9 28.3c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.6.9 1.5 1.8"> </path> <path d="M25.3 35.9c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5s1.5.9 1.5 1.8"> </path> <path d="M39.9 36.7l-16.4-8.1l.6-1.3l16.4 8.1z"> </path> <path d="M40.3 37.7c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c.1.9-.6 1.7-1.5 1.7"> </path> <path d="M23.9 29.6c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c0 .9-.7 1.7-1.5 1.7"> </path> <path d="M35 41l-7.2-17.4L29 23l7.2 17.4z"> </path> <path d="M35.5 42.4c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.5.9 1.5 1.8c-.1.9-.8 1.6-1.7 1.5"> </path> <path d="M28.3 24.9c-.9-.1-1.5-.9-1.5-1.8s.8-1.6 1.7-1.5s1.5.9 1.5 1.8c-.1.9-.9 1.6-1.7 1.5"> </path> <ellipse cx="32" cy="32" rx="3.4" ry="3.5"> </ellipse> </g> </g></svg></div>
        </div>

        <form action="layouts/PHP/create_note.php" id="form__create__page" method="POST" enctype="multipart/form-data" onsubmit="return validarCaracteresEspeciales();">
            <header class="header__create__note">
                <nav class="note__navigation">
                    <div>
                        <input type="text" class="form__input" placeholder="Nombre de la nota:" name="nombre_archivo" id="nombre_archivo" required>
                    </div>
                    <div class="close__and__send__container">
                        <button class="preview__button" id="btnPreview" type="button">Vista Previa</button>

                        <label class="close__and__send__button">
                            <input type="submit" id="CreatePage" onclick="crearArchivo()">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M11.5003 12H5.41872M5.24634 12.7972L4.24158 15.7986C3.69128 17.4424 3.41613 18.2643 3.61359 18.7704C3.78506 19.21 4.15335 19.5432 4.6078 19.6701C5.13111 19.8161 5.92151 19.4604 7.50231 18.7491L17.6367 14.1886C19.1797 13.4942 19.9512 13.1471 20.1896 12.6648C20.3968 12.2458 20.3968 11.7541 20.1896 11.3351C19.9512 10.8529 19.1797 10.5057 17.6367 9.81135L7.48483 5.24303C5.90879 4.53382 5.12078 4.17921 4.59799 4.32468C4.14397 4.45101 3.77572 4.78336 3.60365 5.22209C3.40551 5.72728 3.67772 6.54741 4.22215 8.18767L5.24829 11.2793C5.34179 11.561 5.38855 11.7019 5.407 11.8459C5.42338 11.9738 5.42321 12.1032 5.40651 12.231C5.38768 12.375 5.34057 12.5157 5.24634 12.7972Z" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </label>
                        
                        <button type="button" class="close__and__send__button" onclick="popup.close(); bodyNoHidden()">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z" fill="#FFFFFF"></path> </g></svg>
                        </button>
                    </div>
                </nav>

                <nav class="markdown__navigation">
                    <button class="just__fill" type="button" id="btnItalic"><svg viewBox="-1 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 6C8 5.44772 8.44772 5 9 5H12H15C15.5523 5 16 5.44772 16 6C16 6.55228 15.5523 7 15 7H12.8579L11.1656 18H13C13.5523 18 14 18.4477 14 19C14 19.5523 13.5523 20 13 20H10H7C6.44772 20 6 19.5523 6 19C6 18.4477 6.44772 18 7 18H9.14208L10.8344 7H9C8.44772 7 8 6.55228 8 6Z" fill="#FFFFFF"></path> </g></svg></button>
                    <button class="just__stroke" type="button" id="btnBold"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Bold"> <path id="Vector" d="M8 12H12.5M8 12V5H12.5C14.433 5 16 6.567 16 8.5C16 10.433 14.433 12 12.5 12M8 12V19H13.5C15.433 19 17 17.433 17 15.5C17 13.567 15.433 12 13.5 12H12.5" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg></button>
                    <button class="just__stroke" type="button" id="btnStrikethrough"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Edit / Strikethrough"> <path id="Vector" d="M12.0005 12.0001C12.8959 12.0001 13.7749 12.1925 14.5457 12.5571C14.8939 12.7218 15.2146 12.9192 15.5009 13.1437C15.8484 13.4162 16.1457 13.729 16.3822 14.0732C16.8136 14.7009 17.0263 15.4096 16.9982 16.1256C16.97 16.8416 16.702 17.5385 16.2222 18.1433C15.7424 18.7481 15.0684 19.2386 14.2705 19.5638C13.4727 19.889 12.5802 20.0373 11.6865 19.9923C10.7928 19.9473 9.93104 19.7108 9.19043 19.3082C8.44982 18.9055 7.85782 18.3514 7.47656 17.7032M12.0005 12.0001H4M12.0005 12.0001H20M16.5243 6.29718C16.143 5.649 15.5512 5.09462 14.8105 4.69197C14.0699 4.28932 13.2076 4.05287 12.314 4.00789C11.4203 3.96291 10.5278 4.11091 9.72998 4.43613C8.93213 4.76135 8.25812 5.25205 7.77832 5.85689C7.29852 6.46173 7.03057 7.15885 7.00244 7.87485C6.9942 8.08463 7.00669 8.29345 7.03924 8.50014" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg></button>
                    <button class="just__stroke" type="button" id="btnBlockcode"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 8L5 11.6923L9 16M15 8L19 11.6923L15 16" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
                    <button class="just__fill" type="button" id="btnBigHeader"><svg fill="#FFFFFF" viewBox="-4.5 -7 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-header-2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M2 4h4V1a1 1 0 1 1 2 0v8a1 1 0 1 1-2 0V6H2v3a1 1 0 1 1-2 0V1a1 1 0 1 1 2 0v3zm12.88 4.352V10H10V8.986l.1-.246 1.785-1.913c.43-.435.793-.77.923-1.011.124-.23.182-.427.182-.587 0-.14-.04-.242-.127-.327a.469.469 0 0 0-.351-.127.443.443 0 0 0-.355.158c-.105.117-.165.288-.173.525l-.012.338h-1.824l.016-.366c.034-.735.272-1.33.718-1.77.446-.44 1.02-.66 1.703-.66.424 0 .805.091 1.14.275.336.186.606.455.806.8.198.343.3.7.3 1.063 0 .416-.23.849-.456 1.307-.222.45-.534.876-1.064 1.555l-.116.123-.254.229h1.938z"></path></g></svg></button>
                    <button class="just__fill" type="button" id="btnNormalHeader"><svg fill="#FFFFFF" viewBox="-4.5 -6.5 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-header-3"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M2 4h4V1a1 1 0 1 1 2 0v8a1 1 0 1 1-2 0V6H2v3a1 1 0 1 1-2 0V1a1 1 0 1 1 2 0v3zm12.453 2.513l.043.055c.254.334.38.728.38 1.172 0 .637-.239 1.187-.707 1.628-.466.439-1.06.658-1.763.658-.671 0-1.235-.209-1.671-.627-.436-.418-.673-.983-.713-1.676L10 7.353h1.803l.047.295c.038.238.112.397.215.49.1.091.23.137.402.137a.566.566 0 0 0 .422-.159.5.5 0 0 0 .158-.38c0-.163-.067-.295-.224-.419-.17-.134-.438-.21-.815-.215l-.345-.004v-1.17l.345-.004c.377-.004.646-.08.815-.215.157-.124.224-.255.224-.418a.5.5 0 0 0-.158-.381.566.566 0 0 0-.422-.159.568.568 0 0 0-.402.138c-.103.092-.177.251-.215.489l-.047.295H10l.022-.37c.04-.693.277-1.258.713-1.675.436-.419 1-.628 1.67-.628.704 0 1.298.22 1.764.658.468.441.708.991.708 1.629a1.892 1.892 0 0 1-.424 1.226z"></path></g></svg></button>
                    <button class="just__fill" type="button" id="btnSmallHeader"><svg fill="#FFFFFF" viewBox="-4.5 -7 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-header-4"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M2 4h4V1a1 1 0 1 1 2 0v8a1 1 0 1 1-2 0V6H2v3a1 1 0 1 1-2 0V1a1 1 0 1 1 2 0v3zm10.636 4.74H10V7.302l.06-.198 2.714-4.11h1.687v3.952h.538V8.74h-.538V10h-1.825V8.74zm.154-1.283V5.774l-1.1 1.683h1.1z"></path></g></svg></button>
                    <label for="imagen_subida" class="just__stroke">
                        <input type="file" id="imagen_subida" class="form__file" name="imagen_subida">
                        <svg viewBox="-2 -2 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.2647 15.9377L12.5473 14.2346C11.758 13.4519 11.3633 13.0605 10.9089 12.9137C10.5092 12.7845 10.079 12.7845 9.67922 12.9137C9.22485 13.0605 8.83017 13.4519 8.04082 14.2346L4.04193 18.2622M14.2647 15.9377L14.606 15.5991C15.412 14.7999 15.8149 14.4003 16.2773 14.2545C16.6839 14.1262 17.1208 14.1312 17.5244 14.2688C17.9832 14.4253 18.3769 14.834 19.1642 15.6515L20 16.5001M14.2647 15.9377L18.22 19.9628M18.22 19.9628C17.8703 20 17.4213 20 16.8 20H7.2C6.07989 20 5.51984 20 5.09202 19.782C4.7157 19.5903 4.40973 19.2843 4.21799 18.908C4.12583 18.7271 4.07264 18.5226 4.04193 18.2622M18.22 19.9628C18.5007 19.9329 18.7175 19.8791 18.908 19.782C19.2843 19.5903 19.5903 19.2843 19.782 18.908C20 18.4802 20 17.9201 20 16.8V13M11 4H7.2C6.07989 4 5.51984 4 5.09202 4.21799C4.7157 4.40973 4.40973 4.71569 4.21799 5.09202C4 5.51984 4 6.0799 4 7.2V16.8C4 17.4466 4 17.9066 4.04193 18.2622M18 9V6M18 6V3M18 6H21M18 6H15" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </label>
                </nav>
            </header>

            
            <section class="form__section">
                <input type="text" class="form__section__input form__section__title" placeholder="Título:" name="titulo" required>
                <label>
                    <span>By: </span>
                    <span class="size-span"></span>
                    <input oninput="updateChange(event)" type="text" class="form__section__input form__section__author" placeholder="Autor" name="autor" required>
                </label>
                <textarea type="text" class="form__textarea" placeholder="Contenido:" name="contenido" id="contenido" required></textarea>
                <div id="vistaPreviaContainer"></div>
            </section>
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

        <h3>Paso 4: Guardar o Cerrar la Nota</h3>

        <p>Una vez que hayas terminado de crear tu nota, puedes presionar el botón <span>Crear Nota</span> para almacenar la nota en InNotesBy.
            Si deseas continuar trabajando en la nota más tarde, puedes cerrarla presionando el botón <span>Cerrar</span>. <span><i>(próximamente estará la función de guardar automáticamente, actualmente no está esa funcionalidad)</i></span></p>

        <h3 class="two">Recuerda!</h3>

        <p>El <span>nombre de la nota</span> no puede contener <span>carácteres especiales</span>!</p>

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
	<script src="/layouts/JS/word.js"></script>
	<script src="/layouts/JS/loader.js"></script>
    <script src="/layouts/JS/context__menu.js"></script>
    <script src="/layouts/JS/preview__mode.js"></script>
    <script>
        const spanElement = document.querySelector('.size-span');

        function updateChange(event) {
            const value = event.target.value;
            spanElement.innerText = value;
        }
    </script>
</body>
</html>