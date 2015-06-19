<?php snippet('header') ?>

  <main class="main" role="main">

		<header class="main-header<?php if ( $page->hasImages() ) echo ' has_visual'?>">
        
      <div class="category-title">Things I'm Proud of</div>

      <?php if ( $page->hasImages() ): ?>
        <figure>
          <?php echo thumb($page->images()->first(),'width:1414|height:1000|crop:true|quality:65'); ?>
        </figure>
      <?php endif ?>

      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>

    </header>
    
		<?php snippet('projects') ?>

  </main>

<?php snippet('footer') ?>