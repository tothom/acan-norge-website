<?php /** @var \Kirby\Cms\Block $block */ ?>
<figure style="gallery">
  <ul style="grid">
    <?php foreach ($block->images()->toFiles() as $image): ?>
      <li>
        <?= $image ?>
      </li>
    <?php endforeach ?>
  </ul>
</figure>