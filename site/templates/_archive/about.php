<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This about page example uses the content from our layout field
  to create most parts of the page and keeps it modular. Only the
  contact box at the bottom is pre-defined with a set of fields
  in the about.yml blueprint.

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/
?>

<style>
  h1, h2, h3, h4, h5, h6 {
    text-align: center !important;
  }
  p {
    font-size: 1.2rem;
  }
</style>

<?php snippet('header') ?>

<?php snippet('intro') ?>

<?php snippet('splitline') ?>



<article>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
</article>


<?php snippet('splitline') ?>

<?php snippet('footer') ?>
