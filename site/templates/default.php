<?php snippet('header') ?>

<div class="text">
	<div class="category-title">...</div>
	<h1><?php echo $page->title()->html() ?></h1>
	<?php echo $page->text()->kirbytext() ?>
</div>

<?php snippet('footer') ?>