<?php ?>

<?php snippet('header') ?>

<?php foreach ($page->layout()->toLayouts() as $layout): ?>
  <section class="grid" id="<?= $layout->id() ?>">
    <?php $n = 1;?>
    <?php foreach ($layout->columns() as $column): ?>
      <div class="column" style="grid-column:<?=$n?> / span <?= $column->span() ?>">
        <div class="blocks">
          <?= $column->blocks() ?>
        </div>
      </div>
    <?php $n = $n + $column->span(); ?>
    <?php endforeach ?>
  </section>
<?php endforeach ?>

<?php snippet('footer') ?>