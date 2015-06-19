<?php snippet('header') ?>

  <main class="main" role="main" data-sbtitle="THOUHGHTS & WRITINGS">
    <!-- <svg width="100" height="500" viewBox="0 0 200 200" version="1.1" 
          xmlns="http://www.w3.org/2000/svg" 
          xmlns:xlink="http://www.w3.org/1999/xlink" 
          xml:space="preserve"
          style="background: #f3f3f3;">
      <text text-anchor="end" transform="rotate(270 0,0)" x="0px" y="80px" style="font-family:'Paytone One', sans-serif; font-size:150px; fill:black;">
          Lorem ipsum dolor sit amet.
      </text>
    </svg> -->


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