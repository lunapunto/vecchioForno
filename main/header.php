<?php
/*
* Header
* Para cambiar favicon incluir archivos
  assets/favicon16x16
  assets/favicon32x32
  assets/favicon48x48

  -Se puede utilizar favicon.ai para exportar
*
* Para cambiar screenshot de OG:FB subir un PNG screenshot de medidas 1702px x 730px en assets/screenshot.png
  -Se puede utilizar screenshot.ai para exportar
*/
require_once('functions.php');
$title = i('title');
$classes = array();
if($path = i('path')){
  $classes[] = $path.'_body';
}
if($additionalclasses = i('additionalclasses')){
  $classes = array_merge($additionalclasses, $classes);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title><?php get_title($title);?></title>
  <meta charset="utf-8" />
  <meta content="width=device-width,initial-scale=1, user-scalable=no" name="viewport" />
  <link rel="icon" type="image/png" href="<?= asset.'/favicon16x16.png';?>" sizes="16x16">
  <link rel="icon" type="image/png" href="<?= asset.'/favicon32x32.png';?>" sizes="32x32">
  <link rel="icon" type="image/png" href="<?= asset.'/favicon48x48.png';?>" sizes="48x48">
  <meta name="author" content="Luna Punto" />

  <meta name="keywords" content="<?= implode(',', $keywords);?>" />
  <meta name="description" content="<?= $description;?>" />
  <meta property="og:url"                content="<?= dir;?>" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="<?php get_title($title);?>" />
  <meta property="og:description"        content="<?= $quickdescription;?>" />
  <meta property="og:image"              content="<?= asset.'/screenshot.png';?>" />

  <!-- Incluir Google Analytics -->


  <?php scriptsstyles(false);?>
</head>
<body class="<?= array_to_str($classes, ' ');?>">
  <?php
  /*
  * Livereload
  */
  if(!is_production):?>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  <?php endif;?>
  <div id="wrapper">
