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

<section class="portfolio">
	<?php foreach($page->children()->visible() as $project): ?>
		<article class="portfolio-item">
			<?php if(!$project->visual()->empty()): ?>
				<?php echo thumb($project->image($project->visual()), 'width:1200|height:400|crop:true') ?>
			<?php elseif($project->hasImages()): ?>
				<?php echo thumb($project->images()->sortBy('sort', 'asc')->first(), 'width:1200|height:400|crop:true') ?>
			<?php endif ?>
			<header>
				<h2><?php echo $project->title()->html() ?></h2>
				<p class="meta">
					@<?php echo $project->employer() ?> / 
							tags: <?php echo $project->tags() ?>
				</p>
			</header>
			<div class="portfolio-text">
				<div class="title">
					<?php echo $project->text()->kt(); ?>
					<!-- <div class="meta">
						
					</div> -->
				</div>
				<?php if ($project->link()->notEmpty()): ?>
					<footer>
						&infin; <a href="<?php echo $project->link() ?>"><?php echo $project->link()->html(); ?></a>
					</footer>
				<?php endif ?>
			</div>
		</article>
	<?php endforeach ?>
</section>


<?php snippet('footer') ?>