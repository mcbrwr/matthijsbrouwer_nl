<?php snippet('header') ?>
  
  <main class="main" role="main">
    
    <header class="main-header<?php if ( $page->hasImages() ) echo ' has_visual'?>" <?php if ( $page->hasImages() ) : ?>style="background-image: url(<?php echo thumb($page->images()->first(),'width:1414|height:1000|crop:true|quality:65')->url(); ?>)"<?php endif; ?>>

      <?php if ( $page->hasImages() ): ?>
        <figure class="header-visual">
          <?php echo thumb($page->images()->first(),'width:1414|height:1000|crop:true|quality:65'); ?>
        </figure>
      <?php endif ?>
      <div class="header-text">
        <div class="category-title">Thoughts &amp; Writings</div>
        <h1><?php echo $page->title()->escape() ?></h1>
        <div class="meta">Published on 
          <time datetime="<?php echo $page->date('c')->escape(); ?>">
            <?php echo $page->date('d/m/Y') ?>
          </time>
        </div>
        <?php echo $page->intro()->kirbytext() ?>
      </div>

    </header>

    <div class="main-text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main> 

<?php snippet('footer') ?>