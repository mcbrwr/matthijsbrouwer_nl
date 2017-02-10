<?php snippet('header') ?>

<header class="main-header<?php if ( $page->hasImages() ) echo ' has_visual'?>">
  
  <div class="category-title"><?php echo $page->categorytitle()->or('...') ?></div>

  <?php if ( $page->hasImages() ): ?>
    <figure>
      <?php echo thumb($page->images()->first(),'width:1414|height:1000|crop:true|quality:65'); ?>
    </figure>
  <?php endif ?>

  <h1><?php echo $page->title()->html() ?></h1>

</header>

<div class="text">
	<?php echo $page->text()->kirbytext() ?>
</div>

<?php snippet('footer') ?>