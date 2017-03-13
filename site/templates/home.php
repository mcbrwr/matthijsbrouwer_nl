<?php snippet('header') ?>

<header>
  <div class="category-title"><?php echo $page->categorytitle()->or('...') ?></div>
  <h1><?php echo $page->title()->h(); ?></h1>
</header>

<?php echo $page->intro()->kirbytext() ?>

<?php if ( $pages->find('blog')->children()->visible()->count() ): ?>
	<section class="articles">
	  <hr>
	  <h2>Latest articles</h2>
	  <div class="bloglist">
	    <?php foreach ($pages->find('blog')->children()->visible()->sortBy('date', 'desc')->slice(0,4) as $blog): ?>
	      <?php snippet('blogitem',array('item' => $blog)); ?>
	    <?php endforeach ?>
	  </div>
	</section>
<?php endif ?>

<?php snippet('footer') ?>
