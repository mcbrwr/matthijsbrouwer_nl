<?php snippet('header') ?>

<?php 
$headerImgUrl = $page->images()->first()->thumb('width:1414|height:1000|crop:true|quality:65')->url();
 ?>

<header class="main-header<?php if ( $page->hasImages() ) echo ' has_visual'?>" <?php if ( $page->hasImages() ) : ?>style="background-image: url(<?php echo $headerImgUrl; ?>)"<?php endif; ?>>

  <?php if ( $page->hasImages() ): ?>
    <figure class="header-visual">
      <img src="<?php echo $headerImgUrl; ?>" alt="<?php echo $page->images()->first()->alt(); ?>">
    </figure>
  <?php endif ?>
  <div class="header-text">
    <div class="category-title">Thoughts &amp; Writings</div>
    <h1>
      <?php echo $page->title()->html(); ?>
    </h1>
    <?php echo $page->subtitle()->kt(); ?>
    <div class="meta">Published on 
      <time datetime="<?php echo $page->date('c'); ?>">
        <?php echo $page->date('d/m/Y') ?>
      </time>
    </div>
  </div>

</header>

<div class="lead">
  <?php echo $page->intro()->kirbytext() ?>
</div>
<div class="main-text">
  <?php echo $page->text()->kirbytext() ?>
</div>

<?php snippet('footer') ?>