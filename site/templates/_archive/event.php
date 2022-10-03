<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This event template renders a blog article. It uses the `$page->cover()`
  method from the `event.php` page model (/site/models/page.php)

  It also receives the `$tag` variable from its controller
  (/site/controllers/event.php) if a tag filter is activated.

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/
?>
<?php snippet('header') ?>


<article class="event">
  <header class="event-header">

    <h1 class="event-title"><?= $page->title()->esc() ?></h1>


    <time class="h5" datetime="<?= $page->date()->toDate('c') ?>">
      <?= $page->date()->toDate('d/m/Y') ?>
    </time>

    <br/>

    <a class="h5" href="<?= $page->content()->link() ?>">Link</a>
    <br/>


    <p class="h6">
      <?= $page->description() ?>
    </p>

    <?php if ($cover = $page->cover()): ?>
      <a href="<?= $cover->url() ?>" data-lightbox class="img" style="--w:2; --h:1">
        <?= $cover->crop(1200, 600) ?>
      </a>
    <?php endif ?>


  </header>

  <div class="event text">
    <?= $page->text()->toBlocks() ?>
  </div>

</article>

<?php snippet('footer') ?>
