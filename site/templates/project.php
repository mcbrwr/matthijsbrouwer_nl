<?php snippet('header') ?>

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



<h1><?php echo $page->title()->html() ?></h1>

<ul class="meta cf">
  <li><b>Year:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
  <li><b>Tags:</b> <?php echo $page->tags() ?></li>
</ul>

<div class="text">
  <?php echo $page->text()->kirbytext() ?>

  <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
    <figure>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
    </figure>
  <?php endforeach ?>
</div>

<nav class="nextprev cf" role="navigation">
  <?php if($prev = $page->prevVisible()): ?>
    <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
  <?php endif ?>
  <?php if($next = $page->nextVisible()): ?>
    <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
  <?php endif ?>
</nav>

<?php snippet('footer') ?>