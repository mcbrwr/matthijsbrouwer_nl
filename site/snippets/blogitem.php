<article class="blogitem">
	<header>
  	<h1><a href="<?php echo $item->url() ?>"><?php echo $item->title(); ?></a></h1>
		<div class="meta">Published on 
      <time datetime="<?php echo $item->date('c') ?>">
        <?php echo $item->date('d/m/Y') ?>
      </time>
    </div>
	</header>
  <p><?php echo $item->intro(); ?></p>
</article>