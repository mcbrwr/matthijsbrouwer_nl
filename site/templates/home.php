<?php snippet('header') ?>

  <!-- <header class="home-header">
    <div class="container">
      <div class="imgwrap">
        <img src="/assets/images/matthijs.png" alt="Matthijs Brouwer">
      </div>
      <div class="text">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->intro()->kirbytext() ?>
      </div>
    </div>
  </header> -->

  <main class="main" role="main" data-sbtitle="HELLO! I CONNECT HUMANS WITH COMPUTERS">

    <header>
      <div class="category-title">... <small>(just 3 dots)</small></div>

    <h1><?php echo $page->title()->h(); ?></h1>
    </header>

    <?php echo $page->headertext()->kirbytext() ?>
    
    
    <section class="articles">
      <hr>
      <h1>Latest articles</h1>
      <div class="bloglist">
        <?php foreach ($pages->find('blog')->children()->visible()->slice(0,4) as $blog): ?>
          <?php snippet('blogitem',array('item' => $blog)); ?>
        <?php endforeach ?>
      </div>
    </section>




  </main>

<?php snippet('footer') ?>
