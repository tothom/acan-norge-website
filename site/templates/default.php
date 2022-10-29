<?php ?>

<?php snippet('header') ?>

  <article>
    <div class="text">
      <?php foreach ($page->text->toBlocks() as $block): ?>
        <div id="<?= $block->type ?>" class="block block-type-<?= $block->type ?>">
          <?= $block ?>
        </div>
      <?php endforeach; ?>
    </div>
    <?php foreach ($page->children() as $subpage): ?>
    <li>
      <a class="h5" style="text-decoration: underline" href="<?= $subpage->url() ?>">
        <?= html($subpage->title) ?>
      </a>
    </li>
    <?php endforeach; ?>
  </article>

<?php snippet('footer') ?>
