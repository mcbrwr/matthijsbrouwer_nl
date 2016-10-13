<?php snippet('header') ?>

<header class="main-header<?php if ( $page->hasImages() ) echo ' has_visual'?>" <?php if ( $page->hasImages() ) : ?>style="background-image: url(<?php echo $visualUrl; ?>)"<?php endif; ?>>

  <?php if ( $page->hasImages() ): ?>
    <figure class="header-visual">
      <img src="<?php echo $visualUrl; ?>" alt="<?php echo $visualAlt; ?>">
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