<ul class="menu">
  <?php foreach($pages->visible() as $p): ?>
  <li<?php e($p->isOpen(), ' class="active"') ?>>
    <a href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>
  </li>
  <?php endforeach ?>
</ul>
