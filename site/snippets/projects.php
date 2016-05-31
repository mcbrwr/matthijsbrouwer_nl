<?php 
   if (empty($parent)) $parent = $page;
   if (empty($start)) $start = null;
   if (empty($slice)) $slice = null;
?>

<ul class="projectlist">
  <?php foreach($parent->children()->visible()->slice($start,$slice) as $project): ?>
  <li>
    <article class="project-thumb">
      <a href="<?php echo $project->link() ?>">
        <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
          <?php echo thumb($image, 'width:1200|height:400|crop:true') ?>
        <?php else: ?>
          <img src="/assets/images/website.jpg" alt="website icon">
        <?php endif ?>
        <div class="project-text">
          <div class="title">
            <h1><?php echo $project->title()->html() ?></h1>
            <div class="meta">
              @<?php echo $project->employer() ?> / <?php echo $project->tags() ?>
            </div>
          </div>
        </div>
      </a>
    </article>
  </li>
  <?php endforeach ?>
</ul>
