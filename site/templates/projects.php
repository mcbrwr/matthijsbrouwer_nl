<?php snippet('header') ?>


<header class="main-header<?php if ( $page->hasImages() ) echo ' has_visual'?>">

<div class="category-title">Things I'm currently doing or thinking about</div>

  <?php if ( $page->hasImages() ): ?>
    <figure>
      <?php echo thumb($page->images()->first(),'width:1414|height:1000|crop:true|quality:65'); ?>
    </figure>
  <?php endif ?>

  <h1><?php echo $page->title()->html() ?></h1>
  <?php echo $page->text()->kirbytext() ?>

</header>


<h2>TODO: list of running projects.</h2>


<?php snippet('footer') ?>