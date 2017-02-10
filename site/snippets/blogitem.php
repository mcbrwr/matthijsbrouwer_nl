<a class="blogitem" href="<?php echo $item->url() ?>">
  <article>
    <header>
      <h3><?php echo $item->title()->html(); ?></h3>
    </header>
    <p><?php echo $item->subtitle()->html(); ?></p>
    <footer>
  		<!-- <div class="meta"> -->
        <time datetime="<?php echo $item->date('c') ?>">
          <?php echo $item->date('d/m/Y') ?>
        </time>
        <span class="tags">
        	<?php echo $item->tags()->escape(); ?>
        </span>
      <!-- </div> -->
    </footer>
  </article>
</a>