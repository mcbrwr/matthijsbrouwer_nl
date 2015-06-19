<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
  
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.min.css') ?>
  
  <link href='http://fonts.googleapis.com/css?family=Quicksand|Paytone+One|Oxygen:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body>

<?php snippet('nav'); ?>