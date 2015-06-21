<article class="blogitem">
	<header>
  	<h1><a href="<?php echo $item->url() ?>"><?php echo $item->title()->escape(); ?></a></h1>
  	<p><?php echo $item->subtitle()->escape() ?></p>
	</header>
  <p><?php echo $item->intro(); ?></p>
  <footer>
		<div class="meta">
      <time datetime="<?php echo $item->date('c') ?>">
        <?php echo $item->date('d/m/Y') ?>
      </time>
      <span class="tags">
      	<?php echo $item->tags()->escape(); ?>
      </span>
    </div>
  </footer>
</article>