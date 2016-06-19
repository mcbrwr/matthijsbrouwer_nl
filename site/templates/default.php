<?php snippet('header') ?>

<div class="text">
	<div class="category-title"><?php echo $page->categorytitle()->or('...') ?></div>
	<h1><?php echo $page->title()->html() ?></h1>
	<?php echo $page->text()->kirbytext() ?>
</div>

<?php snippet('footer') ?>