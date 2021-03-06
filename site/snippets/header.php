<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
  
  <meta name="description" content="<?php e($page->meta_description()->empty(), $site->description()->html(), $page->meta_description()->html()) ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.min.css') ?>

  <link href="https://fonts.googleapis.com/css?family=Fira+Mono:700%7CFira+Sans:300,400,400i,700" rel="stylesheet">

	<style type="text/css">
		body::before {
			content: "<?php echo strtoupper(pageExcerpt($page,$length = 150,$fields = array('decotext','category_title','title','intro'))); ?>";
		}
	</style>

</head>

<body class="template-<?php echo $page->template(); ?>">

<?php snippet('nav'); ?>

<main class="main">