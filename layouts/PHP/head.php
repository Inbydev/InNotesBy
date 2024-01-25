<?php
function head($title, $description) {
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
HTML;
}
?>