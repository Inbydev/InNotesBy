<?php
function head($title, $description, $othercss = null) {
	echo <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="keywords" content="Inby, Inbypage, Inbydev, Anime, Dorama, Kdrama, Infi, Aliceki">
	<meta name="description" content="$description">
	<meta name="author" content="Infi">
	<meta name="copyright" content="©Inbydev">
	<meta name="robots" content="index, follow">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#896db7">
	<meta property="og:title" content="$title">
	<meta property="og:description" content="$description">
	<link rel="icon" href="Images/icono.ico">
	<title>$title</title>
	<link rel="stylesheet" href="./layouts/CSS/main.css">
	<link rel="stylesheet" href="./layouts/CSS/InNotesBy.css">
	$othercss
	<script defer src="./layouts/JS/app.js"></script>
	<script defer src="./layouts/JS/header__notes.js"></script>
	<script defer src="./layouts/JS/header__mobile.js"></script>
</head>


<body>
	<div class="icon-load" id="icon-load">
        <h2>InNotesBy</h2>
        <h3>Cargando...</h3>
	</div>
	
	<div class="background">	
		<div class="background__25"><svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="svg__home iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="var(--background-header)"> <path d="M36.1 2C35.7 3.9 34 5.4 32 5.4c-2 0-3.7-1.5-4.1-3.4c-3.1 1.7-5.3 5.6-5.3 12.3c0 9.3 9.4 20.5 9.4 20.5s9.4-11.2 9.4-20.5c0-6.7-2.2-10.6-5.3-12.3"> </path> <path d="M62 24.3c-1.9.4-3.8-.5-4.7-2.4c-.9-1.9-.4-4.1 1.1-5.4c-2.8-2.2-7.1-2.5-12.9.4c-8 4.2-13.5 17.9-13.5 17.9s13.7 4 21.7-.1c5.8-2.9 8.2-6.7 8.3-10.4"> </path> <path d="M2 24.3c1.9.4 3.8-.5 4.7-2.4c.9-1.9.4-4.1-1.1-5.4c2.8-2.2 7.1-2.5 12.9.4C26.5 21 32 34.7 32 34.7s-13.7 4-21.7-.1C4.5 31.8 2.1 28 2 24.3"> </path> <path d="M46.5 61.9c-.7-1.9-.1-4 1.5-5.2c1.6-1.2 3.8-1 5.2.3c1.6-3.3 1.3-7.8-2.3-13.3C45.8 36.1 32 32.5 32 32.5S30.3 47.3 35.4 55c3.6 5.5 7.6 7.4 11.1 6.9"> </path> <path d="M17.5 61.9c.7-1.9.1-4-1.5-5.2c-1.6-1.2-3.8-1-5.2.3c-1.6-3.3-1.3-7.8 2.3-13.3C18.2 36.1 32 32.5 32 32.5s1.7 14.8-3.4 22.5c-3.6 5.5-7.6 7.4-11.1 6.9"> </path> </g> <g fill="var(--background-3)"> <path d="M35.6 5.7c-.4 1.7-1.9 3-3.6 3s-3.2-1.3-3.6-3c-2.7 1.5-4.6 4.9-4.6 10.8c0 8.2 8.3 18 8.3 18s8.3-9.8 8.3-18c-.1-5.9-2-9.3-4.8-10.8"> </path> <path d="M58.3 25.3c-1.6.4-3.4-.4-4.1-2.1c-.8-1.7-.3-3.6 1-4.7c-2.5-1.9-6.3-2.2-11.3.3C36.8 22.4 32 34.4 32 34.4s12 3.5 19.1-.1c5-2.5 7.1-5.8 7.2-9"> </path> <path d="M5.7 25.3c1.6.4 3.4-.4 4.1-2.1c.8-1.7.3-3.6-1-4.7c2.5-1.9 6.3-2.2 11.3.3c7 3.6 11.9 15.6 11.9 15.6s-12 3.5-19.1-.1c-5-2.5-7.1-5.8-7.2-9"> </path> <path d="M44.7 58.3c-.6-1.6-.1-3.6 1.4-4.6s3.3-.9 4.6.3c1.4-2.9 1.1-6.8-2-11.6c-4.6-6.8-16.7-10-16.7-10s-1.5 13 3 19.7c3.2 4.9 6.6 6.6 9.7 6.2"> </path> <path d="M19.3 58.3c.6-1.6.1-3.6-1.4-4.6s-3.3-.9-4.6.3c-1.4-2.9-1.1-6.8 2-11.6c4.5-6.7 16.6-9.9 16.6-9.9s1.5 13-3 19.7c-3.1 4.8-6.5 6.5-9.6 6.1"> </path> </g> <g fill="var(--background-header)"> <path d="M28.7 40.9l-1.2-.6l7.8-17.2l1.2.6z"> </path> <path d="M37.5 23.3c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6"> </path> <path d="M29.7 40.5c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.7.7 1.7 1.6"> </path> <path d="M23.9 36.4l-.5-1.3l16.7-7.5l.5 1.3z"> </path> <path d="M41.9 28.3c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.6.9 1.5 1.8"> </path> <path d="M25.3 35.9c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5s1.5.9 1.5 1.8"> </path> <path d="M39.9 36.7l-16.4-8.1l.6-1.3l16.4 8.1z"> </path> <path d="M40.3 37.7c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c.1.9-.6 1.7-1.5 1.7"> </path> <path d="M23.9 29.6c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c0 .9-.7 1.7-1.5 1.7"> </path> <path d="M35 41l-7.2-17.4L29 23l7.2 17.4z"> </path> <path d="M35.5 42.4c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.5.9 1.5 1.8c-.1.9-.8 1.6-1.7 1.5"> </path> <path d="M28.3 24.9c-.9-.1-1.5-.9-1.5-1.8s.8-1.6 1.7-1.5s1.5.9 1.5 1.8c-.1.9-.9 1.6-1.7 1.5"> </path> <ellipse cx="32" cy="32" rx="3.4" ry="3.5"> </ellipse> </g> </g></svg></div>
		<div class="background__25"><svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="svg__home iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="var(--background-header)"> <path d="M36.1 2C35.7 3.9 34 5.4 32 5.4c-2 0-3.7-1.5-4.1-3.4c-3.1 1.7-5.3 5.6-5.3 12.3c0 9.3 9.4 20.5 9.4 20.5s9.4-11.2 9.4-20.5c0-6.7-2.2-10.6-5.3-12.3"> </path> <path d="M62 24.3c-1.9.4-3.8-.5-4.7-2.4c-.9-1.9-.4-4.1 1.1-5.4c-2.8-2.2-7.1-2.5-12.9.4c-8 4.2-13.5 17.9-13.5 17.9s13.7 4 21.7-.1c5.8-2.9 8.2-6.7 8.3-10.4"> </path> <path d="M2 24.3c1.9.4 3.8-.5 4.7-2.4c.9-1.9.4-4.1-1.1-5.4c2.8-2.2 7.1-2.5 12.9.4C26.5 21 32 34.7 32 34.7s-13.7 4-21.7-.1C4.5 31.8 2.1 28 2 24.3"> </path> <path d="M46.5 61.9c-.7-1.9-.1-4 1.5-5.2c1.6-1.2 3.8-1 5.2.3c1.6-3.3 1.3-7.8-2.3-13.3C45.8 36.1 32 32.5 32 32.5S30.3 47.3 35.4 55c3.6 5.5 7.6 7.4 11.1 6.9"> </path> <path d="M17.5 61.9c.7-1.9.1-4-1.5-5.2c-1.6-1.2-3.8-1-5.2.3c-1.6-3.3-1.3-7.8 2.3-13.3C18.2 36.1 32 32.5 32 32.5s1.7 14.8-3.4 22.5c-3.6 5.5-7.6 7.4-11.1 6.9"> </path> </g> <g fill="var(--background-3)"> <path d="M35.6 5.7c-.4 1.7-1.9 3-3.6 3s-3.2-1.3-3.6-3c-2.7 1.5-4.6 4.9-4.6 10.8c0 8.2 8.3 18 8.3 18s8.3-9.8 8.3-18c-.1-5.9-2-9.3-4.8-10.8"> </path> <path d="M58.3 25.3c-1.6.4-3.4-.4-4.1-2.1c-.8-1.7-.3-3.6 1-4.7c-2.5-1.9-6.3-2.2-11.3.3C36.8 22.4 32 34.4 32 34.4s12 3.5 19.1-.1c5-2.5 7.1-5.8 7.2-9"> </path> <path d="M5.7 25.3c1.6.4 3.4-.4 4.1-2.1c.8-1.7.3-3.6-1-4.7c2.5-1.9 6.3-2.2 11.3.3c7 3.6 11.9 15.6 11.9 15.6s-12 3.5-19.1-.1c-5-2.5-7.1-5.8-7.2-9"> </path> <path d="M44.7 58.3c-.6-1.6-.1-3.6 1.4-4.6s3.3-.9 4.6.3c1.4-2.9 1.1-6.8-2-11.6c-4.6-6.8-16.7-10-16.7-10s-1.5 13 3 19.7c3.2 4.9 6.6 6.6 9.7 6.2"> </path> <path d="M19.3 58.3c.6-1.6.1-3.6-1.4-4.6s-3.3-.9-4.6.3c-1.4-2.9-1.1-6.8 2-11.6c4.5-6.7 16.6-9.9 16.6-9.9s1.5 13-3 19.7c-3.1 4.8-6.5 6.5-9.6 6.1"> </path> </g> <g fill="var(--background-header)"> <path d="M28.7 40.9l-1.2-.6l7.8-17.2l1.2.6z"> </path> <path d="M37.5 23.3c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6"> </path> <path d="M29.7 40.5c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.7.7 1.7 1.6"> </path> <path d="M23.9 36.4l-.5-1.3l16.7-7.5l.5 1.3z"> </path> <path d="M41.9 28.3c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.6.9 1.5 1.8"> </path> <path d="M25.3 35.9c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5s1.5.9 1.5 1.8"> </path> <path d="M39.9 36.7l-16.4-8.1l.6-1.3l16.4 8.1z"> </path> <path d="M40.3 37.7c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c.1.9-.6 1.7-1.5 1.7"> </path> <path d="M23.9 29.6c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c0 .9-.7 1.7-1.5 1.7"> </path> <path d="M35 41l-7.2-17.4L29 23l7.2 17.4z"> </path> <path d="M35.5 42.4c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.5.9 1.5 1.8c-.1.9-.8 1.6-1.7 1.5"> </path> <path d="M28.3 24.9c-.9-.1-1.5-.9-1.5-1.8s.8-1.6 1.7-1.5s1.5.9 1.5 1.8c-.1.9-.9 1.6-1.7 1.5"> </path> <ellipse cx="32" cy="32" rx="3.4" ry="3.5"> </ellipse> </g> </g></svg></div>
		<div class="background__25"><svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="svg__home iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="var(--background-header)"> <path d="M36.1 2C35.7 3.9 34 5.4 32 5.4c-2 0-3.7-1.5-4.1-3.4c-3.1 1.7-5.3 5.6-5.3 12.3c0 9.3 9.4 20.5 9.4 20.5s9.4-11.2 9.4-20.5c0-6.7-2.2-10.6-5.3-12.3"> </path> <path d="M62 24.3c-1.9.4-3.8-.5-4.7-2.4c-.9-1.9-.4-4.1 1.1-5.4c-2.8-2.2-7.1-2.5-12.9.4c-8 4.2-13.5 17.9-13.5 17.9s13.7 4 21.7-.1c5.8-2.9 8.2-6.7 8.3-10.4"> </path> <path d="M2 24.3c1.9.4 3.8-.5 4.7-2.4c.9-1.9.4-4.1-1.1-5.4c2.8-2.2 7.1-2.5 12.9.4C26.5 21 32 34.7 32 34.7s-13.7 4-21.7-.1C4.5 31.8 2.1 28 2 24.3"> </path> <path d="M46.5 61.9c-.7-1.9-.1-4 1.5-5.2c1.6-1.2 3.8-1 5.2.3c1.6-3.3 1.3-7.8-2.3-13.3C45.8 36.1 32 32.5 32 32.5S30.3 47.3 35.4 55c3.6 5.5 7.6 7.4 11.1 6.9"> </path> <path d="M17.5 61.9c.7-1.9.1-4-1.5-5.2c-1.6-1.2-3.8-1-5.2.3c-1.6-3.3-1.3-7.8 2.3-13.3C18.2 36.1 32 32.5 32 32.5s1.7 14.8-3.4 22.5c-3.6 5.5-7.6 7.4-11.1 6.9"> </path> </g> <g fill="var(--background-3)"> <path d="M35.6 5.7c-.4 1.7-1.9 3-3.6 3s-3.2-1.3-3.6-3c-2.7 1.5-4.6 4.9-4.6 10.8c0 8.2 8.3 18 8.3 18s8.3-9.8 8.3-18c-.1-5.9-2-9.3-4.8-10.8"> </path> <path d="M58.3 25.3c-1.6.4-3.4-.4-4.1-2.1c-.8-1.7-.3-3.6 1-4.7c-2.5-1.9-6.3-2.2-11.3.3C36.8 22.4 32 34.4 32 34.4s12 3.5 19.1-.1c5-2.5 7.1-5.8 7.2-9"> </path> <path d="M5.7 25.3c1.6.4 3.4-.4 4.1-2.1c.8-1.7.3-3.6-1-4.7c2.5-1.9 6.3-2.2 11.3.3c7 3.6 11.9 15.6 11.9 15.6s-12 3.5-19.1-.1c-5-2.5-7.1-5.8-7.2-9"> </path> <path d="M44.7 58.3c-.6-1.6-.1-3.6 1.4-4.6s3.3-.9 4.6.3c1.4-2.9 1.1-6.8-2-11.6c-4.6-6.8-16.7-10-16.7-10s-1.5 13 3 19.7c3.2 4.9 6.6 6.6 9.7 6.2"> </path> <path d="M19.3 58.3c.6-1.6.1-3.6-1.4-4.6s-3.3-.9-4.6.3c-1.4-2.9-1.1-6.8 2-11.6c4.5-6.7 16.6-9.9 16.6-9.9s1.5 13-3 19.7c-3.1 4.8-6.5 6.5-9.6 6.1"> </path> </g> <g fill="var(--background-header)"> <path d="M28.7 40.9l-1.2-.6l7.8-17.2l1.2.6z"> </path> <path d="M37.5 23.3c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6"> </path> <path d="M29.7 40.5c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.7.7 1.7 1.6"> </path> <path d="M23.9 36.4l-.5-1.3l16.7-7.5l.5 1.3z"> </path> <path d="M41.9 28.3c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.6.9 1.5 1.8"> </path> <path d="M25.3 35.9c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5s1.5.9 1.5 1.8"> </path> <path d="M39.9 36.7l-16.4-8.1l.6-1.3l16.4 8.1z"> </path> <path d="M40.3 37.7c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c.1.9-.6 1.7-1.5 1.7"> </path> <path d="M23.9 29.6c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c0 .9-.7 1.7-1.5 1.7"> </path> <path d="M35 41l-7.2-17.4L29 23l7.2 17.4z"> </path> <path d="M35.5 42.4c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.5.9 1.5 1.8c-.1.9-.8 1.6-1.7 1.5"> </path> <path d="M28.3 24.9c-.9-.1-1.5-.9-1.5-1.8s.8-1.6 1.7-1.5s1.5.9 1.5 1.8c-.1.9-.9 1.6-1.7 1.5"> </path> <ellipse cx="32" cy="32" rx="3.4" ry="3.5"> </ellipse> </g> </g></svg></div>
		<div class="background__25"><svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="svg__home iconify iconify--emojione" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="var(--background-header)"> <path d="M36.1 2C35.7 3.9 34 5.4 32 5.4c-2 0-3.7-1.5-4.1-3.4c-3.1 1.7-5.3 5.6-5.3 12.3c0 9.3 9.4 20.5 9.4 20.5s9.4-11.2 9.4-20.5c0-6.7-2.2-10.6-5.3-12.3"> </path> <path d="M62 24.3c-1.9.4-3.8-.5-4.7-2.4c-.9-1.9-.4-4.1 1.1-5.4c-2.8-2.2-7.1-2.5-12.9.4c-8 4.2-13.5 17.9-13.5 17.9s13.7 4 21.7-.1c5.8-2.9 8.2-6.7 8.3-10.4"> </path> <path d="M2 24.3c1.9.4 3.8-.5 4.7-2.4c.9-1.9.4-4.1-1.1-5.4c2.8-2.2 7.1-2.5 12.9.4C26.5 21 32 34.7 32 34.7s-13.7 4-21.7-.1C4.5 31.8 2.1 28 2 24.3"> </path> <path d="M46.5 61.9c-.7-1.9-.1-4 1.5-5.2c1.6-1.2 3.8-1 5.2.3c1.6-3.3 1.3-7.8-2.3-13.3C45.8 36.1 32 32.5 32 32.5S30.3 47.3 35.4 55c3.6 5.5 7.6 7.4 11.1 6.9"> </path> <path d="M17.5 61.9c.7-1.9.1-4-1.5-5.2c-1.6-1.2-3.8-1-5.2.3c-1.6-3.3-1.3-7.8 2.3-13.3C18.2 36.1 32 32.5 32 32.5s1.7 14.8-3.4 22.5c-3.6 5.5-7.6 7.4-11.1 6.9"> </path> </g> <g fill="var(--background-3)"> <path d="M35.6 5.7c-.4 1.7-1.9 3-3.6 3s-3.2-1.3-3.6-3c-2.7 1.5-4.6 4.9-4.6 10.8c0 8.2 8.3 18 8.3 18s8.3-9.8 8.3-18c-.1-5.9-2-9.3-4.8-10.8"> </path> <path d="M58.3 25.3c-1.6.4-3.4-.4-4.1-2.1c-.8-1.7-.3-3.6 1-4.7c-2.5-1.9-6.3-2.2-11.3.3C36.8 22.4 32 34.4 32 34.4s12 3.5 19.1-.1c5-2.5 7.1-5.8 7.2-9"> </path> <path d="M5.7 25.3c1.6.4 3.4-.4 4.1-2.1c.8-1.7.3-3.6-1-4.7c2.5-1.9 6.3-2.2 11.3.3c7 3.6 11.9 15.6 11.9 15.6s-12 3.5-19.1-.1c-5-2.5-7.1-5.8-7.2-9"> </path> <path d="M44.7 58.3c-.6-1.6-.1-3.6 1.4-4.6s3.3-.9 4.6.3c1.4-2.9 1.1-6.8-2-11.6c-4.6-6.8-16.7-10-16.7-10s-1.5 13 3 19.7c3.2 4.9 6.6 6.6 9.7 6.2"> </path> <path d="M19.3 58.3c.6-1.6.1-3.6-1.4-4.6s-3.3-.9-4.6.3c-1.4-2.9-1.1-6.8 2-11.6c4.5-6.7 16.6-9.9 16.6-9.9s1.5 13-3 19.7c-3.1 4.8-6.5 6.5-9.6 6.1"> </path> </g> <g fill="var(--background-header)"> <path d="M28.7 40.9l-1.2-.6l7.8-17.2l1.2.6z"> </path> <path d="M37.5 23.3c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6"> </path> <path d="M29.7 40.5c0 .9-.6 1.7-1.5 1.7s-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.7.7 1.7 1.6"> </path> <path d="M23.9 36.4l-.5-1.3l16.7-7.5l.5 1.3z"> </path> <path d="M41.9 28.3c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.6.9 1.5 1.8"> </path> <path d="M25.3 35.9c-.1.9-.8 1.6-1.7 1.5c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5s1.5.9 1.5 1.8"> </path> <path d="M39.9 36.7l-16.4-8.1l.6-1.3l16.4 8.1z"> </path> <path d="M40.3 37.7c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c.1.9-.6 1.7-1.5 1.7"> </path> <path d="M23.9 29.6c-.9 0-1.6-.7-1.7-1.6c0-.9.6-1.7 1.5-1.7s1.6.7 1.7 1.6c0 .9-.7 1.7-1.5 1.7"> </path> <path d="M35 41l-7.2-17.4L29 23l7.2 17.4z"> </path> <path d="M35.5 42.4c-.9-.1-1.5-.9-1.5-1.8c.1-.9.8-1.6 1.7-1.5c.9.1 1.5.9 1.5 1.8c-.1.9-.8 1.6-1.7 1.5"> </path> <path d="M28.3 24.9c-.9-.1-1.5-.9-1.5-1.8s.8-1.6 1.7-1.5s1.5.9 1.5 1.8c-.1.9-.9 1.6-1.7 1.5"> </path> <ellipse cx="32" cy="32" rx="3.4" ry="3.5"> </ellipse> </g> </g></svg></div>
	</div>

HTML;
}
?>