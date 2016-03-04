<?php snippet('header') ?>

<header>
  <div class="category-title">... <small>(just 3 dots)</small></div>
  <h1><?php echo $page->title()->h(); ?></h1>
</header>

<?php echo $page->intro()->kirbytext() ?>

<?php if ($pages->find('blog')->children()->visible()): ?>
	<section class="articles">
	  <hr>
	  <h1>Latest articles</h1>
	  <div class="bloglist">
	    <?php foreach ($pages->find('blog')->children()->visible()->slice(0,4) as $blog): ?>
	      <?php snippet('blogitem',array('item' => $blog)); ?>
	    <?php endforeach ?>
	  </div>
	</section>	
<?php endif ?>

<?php snippet('footer') ?>
