<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This intro snippet is reused in multiple templates.
  While it does not contain much code, it helps to keep your
  code DRY and thus facilitate maintenance when you have
  to make changes.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<header class="h1">
  <?php if ($page->Headline()->isNotEmpty()): ?>

   <h1 class="h1 outline-text" style="text-align: center"><?= $page->Headline()->esc() ?></h1>

  <?php endif ?>

  <?php if ($page->subheadline()->isNotEmpty()): ?>

   <p class="h3"><?= $page->subheadline()->esc() ?></p>

  <?php endif ?>
</header>
