<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header class="main-header<?php if ( $page->hasImages() ) echo ' has_visual'?>">
      
      <div class="category-title">Thoughts &amp; Writings</div>

      <?php if ( $page->hasImages() ): ?>
        <figure>
          <?php echo thumb($page->images()->first(),'width:1414|height:1000|crop:true|quality:65'); ?>
        </figure>
      <?php endif ?>

      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>

    </header>

    <div class="bloglist">
      <?php foreach ($page->children()->visible() as $blog): ?>
      	<?php snippet('blogitem',array('item' => $blog)); ?>
      <?php endforeach ?>
    </div>

  </main>

<?php snippet('footer') ?>